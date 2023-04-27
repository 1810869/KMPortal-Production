<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SolariumController extends Controller
{
    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }

    public function ping()
    {
        // create a ping query
        $ping = $this->client->createPing();

        // execute the ping query
        try {
            $this->client->ping($ping);
            return response()->json('OK');
        } catch (\Solarium\Exception\HttpException $e) {
            return response()->json('ERROR', 500);
        }
   }

public function search(Request $request)
{
    //to receive  keyword from the search form
    $input = $request->input('keyword');

    //For pagination
    $page = $request->has('page') ? intval($request->query('page')) : 1;
    $perPage = 10;
    $offset = ($page - 1) * $perPage;

    $query = $this->client->createSelect();
    $query->setStart($offset);
    $query->setRows($perPage);

    //For faceting
    $facetSet = $query->getFacetSet();
    $facetSet->createFacetField('Category')->setField('Category');
    $facetSet->createFacetField('Subcategory')->setField('Subcategory');


    //to perform boolean operator
    $keywords = preg_split('/\s+(AND|OR)\s+/', $input, -1, PREG_SPLIT_DELIM_CAPTURE);

    $queryString = '';
    $phrase = false;
    $last_keyword = end($keywords);
    for ($i = 0; $i < count($keywords); $i += 2) {
        $operator = isset($keywords[$i+1]) ? strtoupper($keywords[$i+1]) : '';
        $keyword1 = $keywords[$i];
        $keyword2 = isset($keywords[$i+2]) ? $keywords[$i+2] : '';
        
        if ($operator === '') {
            $queryString .= "(Content:\"$keyword1\" OR Title:\"$keyword1\")";
        } else if ($operator === 'AND' || $operator === 'OR') {
            if ($operator === 'AND') {
                $operatorSymbol = 'AND';
            } else {
                $operatorSymbol = 'OR';
            }
            if ($keyword2 === '') {
                $queryString .= "(Content:\"$keyword1\" OR Title:\"$keyword1\")";
                $queryString .= " $operatorSymbol ";
            } else {
                $queryString .= "(Content:\"$keyword1\" OR Title:\"$keyword1\")";
                $queryString .= " $operatorSymbol ";
                $queryString .= "(Content:\"$keyword2\" OR Title:\"$keyword2\")";
                $i++;
            }
        }
    }

    if (empty($input)) {
        $queryString = '*:*';
    } else if (strpos($queryString, 'AND') === false && strpos($queryString, 'OR') === false) {
        $queryString = "(Content:\"$input\" OR Title:\"$input\")";
    }

    //Initilized  mutiple filtering
    $filterQueries = [];

    $selectedCategories = $request->input('Category', []);
    if (!empty($selectedCategories)) {
        if (!is_array($selectedCategories)) {
            $selectedCategories = [$selectedCategories];
        }
        $filterQueries[] = 'Category:("' . implode('" OR  "', $selectedCategories) . '")';
    }

    $selectedSubcategories = $request->input('Subcategory', []);
    if (!empty($selectedSubcategories)) {
        if (!is_array($selectedSubcategories)) {
            $selectedSubcategories = [$selectedSubcategories];
        }
        $filterQueries[] = 'Subcategory:("' . implode('" OR "', $selectedSubcategories) . '")';
    }

    $selectedTypes = $request->input('type', []);
    if (!empty($selectedTypes)) {
        $filterQueries[] = 'ContentType:("' . implode('" OR  "', $selectedTypes) . '")';
    }

    //Sorting
    $sort = $request->input('sort', 'relevance');
    if ($sort == 'asc') {
      $query->addSort('Category', $query::SORT_ASC);
    } else if ($sort == 'desc') {
      $query->addSort('Category', $query::SORT_DESC);
    } else {
      // Sort by relevance score
      $query->addSort('score', $query::SORT_DESC);
    }

    if (!empty($filterQueries)) {
        $query->createFilterQuery('checkbox')->setQuery(implode(' AND ', $filterQueries));
    }

    $query->setQuery($queryString);

    $resultset = $this->client->select($query);
    $total = $resultset->getNumFound();
    $lastPage = ceil($total / $perPage);

    $categoryFacet = $resultset->getFacetSet()->getFacet('Category');
    $subcategoryFacet = $resultset->getFacetSet()->getFacet('Subcategory');

    return view('result2', compact('resultset', 'input', 'keywords', 'page', 'lastPage', 'categoryFacet', 'subcategoryFacet'));

}

}
