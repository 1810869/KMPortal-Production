<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
        $input = $request->input('keyword');
        $query = $this->client->createSelect();
        $query->setQuery('Abstract:"' . $input . '"');
        $query->setStart(0);
        $query->setRows(100);
        $resultset = $this->client->select($query);

        return view('result2', compact('resultset', 'input'));

    }
}
