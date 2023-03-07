@extends('base2')

@section('result2-css')
<link rel="stylesheet" href="css/c2.css">
<link rel="stylesheet" href="css/result2.css">

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@stop

@section('result2')
<div class="wrapper">
    <div class="one">
    <div class="left-content">
        <section>

          <div class="search-sec">
            <div class="search-tooltip" style="display: flex; align-items: center; justify-content: space-between;">
            <strong>SEARCH</strong>
            <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="bottom" title="Enter any keyword that you desire and use advanced search for detail search.">
            <img src="/images/qmicon.png" alt="question-mark" style="width: 15px; height: 15px;">
            </a>
            </div>
            <form method="post" action="{{url('result')}}">
              {{csrf_field()}}
              <div id="searchBarWrap">
                <input id="searchBar" type="text" name="keyword" placeholder="Enter a keyword to get start"/>
                <button type="submit" id="searchBtn" class="btn" style="border-radius: 0; height: 40px;"><i class="fa fa-search" style="padding: 5px;"></i></button>
              </div>
            </form> 
              <!-- <a href="/adv2">Advance Search</a> -->
          </div>

        <div class="accordion-sec">
          <div class="search-tooltip" style="display: flex; align-items: center; justify-content: space-between;">
          <strong>FILTER</strong>
          <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Apply any of the filters to your search to help narrow the result">
          <img src="/images/qmicon.png" alt="question-mark" style="width: 15px; height: 15px;">
          </a>
          </div>
          <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                Category
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="policy">
                  <label class="form-check-label" for="policy">
                    IIUM Policies & Standards
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="2" id="experts">
                  <label class="form-check-label" for="experts">
                    Experts Corners
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="3" id="awards">
                  <label class="form-check-label" for="awards">
                    Awards & Achievements
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="4" id="knowledge">
                  <label class="form-check-label" for="knowledge">
                    Knowledges Resources
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="5" id="articles">
                  <label class="form-check-label" for="articles">
                    Articles & Publications
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="6" id="sharing">
                  <label class="form-check-label" for="sharing">
                    Knowledge Sharing
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="7" id="flagship">
                  <label class="form-check-label" for="flagship">
                    SDG & Flagship
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="8" id="community">
                  <label class="form-check-label" for="community">
                    Community Engagement
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="9" id="history">
                  <label class="form-check-label" for="history">
                    IIUM History
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="10" id="lesson">
                  <label class="form-check-label" for="lesson">
                    Lesson Learnt
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Center/Organization
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Center/Organization</option>
                <option value="1">LIBRARY</option>
                <option value="2">GRADUATE SCHOOL OF MANAGEMENT</option>
                <option value="3">MANAGEMENT SERVICES DIVISION</option>
                <option value="4">NATURAL MEDICINAL PRODUCT CENTER (NMPC)</option>
                <option value="5">OFFICE FOR STRATEGY & INSTITUTIONAL CHANGE</option>
                <option value="6">OFFICE OF INTERNAL AUDIT</option>
                <option value="7">OFFICE OF THE CAMPUS DIRECTOR, KUANTAN CAMPUS</option>
                <option value="8">OFFICE OF THE DEPUTY RECTOR (ACADEMIC & INTERNATIONALIZATION)</option>
                <option value="9">OFFICE OF THE DEPUTY RECTOR (INTERNATIONALIZATION) & GLOBAL NETWORK</option>
                <option value="10">OFFICE OF THE DEPUTY RECTOR (RESPONSIBLE RESEARCH AND INNOVATION)</option>
                <option value="11">OFFICE OF THE DEPUTY RECTOR (STUDENT DEVELOPMENT AND COMMUNITY ENGAGEMENT)</option>
                <option value="12">OFFICE OF THE PRESIDENT</option>
                <option value="13">OFFICE OF THE RECTOR</option>
                <option value="14">PLANNING UNIT (PLAN)</option>
                <option value="15">OFFICE OF COMMUNIZATION, ADVOCATION AND PROMOTION FOR CHANGE</option>
                <option value="16">RESEARCH MANAGEMENT CENTER</option>
                <option value="17">OFFICE OF SECURITY MANAGEMENT</option>
                <option value="18">SPORTS DEVELOPMENT CENTER</option>
                <option value="19">STUDENT AFFAIRS AND DEVELOPMENT DIVISION</option>
                <option value="20">STUDENT SERVICES DIVISION</option>
                <option value="21">STUDENT DEVELOPMENY AND CO-CURRICULAR DIVISION (SDCD)</option>
                <option value="22">STUDENT DEVELOPMENT DIVISION</option>
                <option value="23">IIUM SHAHS MOSQUE</option>
              </select>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Type
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="flexCheckDefault">
                    Audio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="flexCheckChecked">
                    Photo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="flexCheckDefault">
                    Document
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="flexCheckChecked">
                    Webpage
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="flexCheckChecked">
                    Video
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="button-sec">
         <button type="button" class="btn1 btn btn-outline-primary">Apply</button>
         <br>
         <button type="button" class="btn1 btn btn-outline-primary">Clear</button>
      </div>

    </section>

    <!-- <section id="suggested-sec">
          <div class="suggested-sec">
            <div class="search-tooltip" style="display: flex; align-items: center; justify-content: space-between;">
            <strong>SUGGESTED SEARCH TERMS</strong>
            <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="bottom" title="List of keyword(s) that might find useful for you.">
            <img src="/images/qmicon.png" alt="question-mark" style="width: 15px; height: 15px;">
            </a>
            </div>
          </div>
          <div class="keywords">
            <button type="button" class="btn2 btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Convocation</button>
            <button type="button" class="btn2 btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Finance</button>
            <button type="button" class="btn2 btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Library</button>
            <button type="button" class="btn2 btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">iRep</button>
            <button type="button" class="btn2 btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Mahallah</button>
            <button type="button" class="btn2 btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Random</button>
          </div>
    </section>

    <section id="urls-sec">
      <div class="urls-sec">
        <div class="search-tooltip" style="display: flex; align-items: center; justify-content: space-between;">
        <strong>QUICK LINKS</strong>
        <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="bottom" title="Other useful links that are related to IIUM">
        <img src="/images/qmicon.png" alt="question-mark" style="width: 15px; height: 15px;">
        </a>
        </div>
      </div>
      <div class="urls">
          <a href="https://www.iium.edu.my/v2/">IIUM Official Website</a>
          <br>
          <a href="https://www.iium.edu.my/division/lib">IIUM Library Dar Al-Hikmah Website</a>
          <br>
          <a href="https://iarchives.iium.edu.my/pages/home.php?login=true">IIUM iArchive</a>
          <br>
          <a href="http://irep.iium.edu.my/">IIUM i-Repository</a>
      </div>
    </section> -->

    </div>
    </div>

    <div class="two">



      
      <div class="navigate" style="display: flex; align-items: center; margin-bottom: 2rem;"><a href="/search2" style="font-size:18px; text-decoration: none; margin-right: 5px; font-size: 16px;"> Home</a> / Result </div>
      <div class="resNum"><p style="color: black;">Result(s) found: <b style="font-size: 25px;"> {{ $resultset->getNumFound() }} </b> for <b style="font-size: 25px;"> {{ $input }} </b> </p></div>

      {{-- <ul style="list-style-type: none; padding: 0;">

      @foreach ($resultset as $document) 

          <li class="post" style="border-radius:0%;text-overflow: ellipsis; overflow: hidden;">
          <a href=""><picture><source srcset="" media=(max-width: 768px)><img src="images/uia background.jpg" class="post-thumbnail" alt=""></picture></a>
          <div class="post-text">
          <a href= {{ $document->URL[0] }}> {{ $document->Title }}</a> <span class="badge bg-secondary rounded-0">New</span>
          <br><span style="font-size: 12px;">Articles & Publication</span><span style="font-size: 12px;"> | Library</span>
          <p style="margin-top: 1rem;">{{ $document->URL[0] }} </p>
          <div class="content text-justify">
          <p> {{ $document->Abstract[0] }} </p>
          </div>
          </div>
          </li>      

      </ul>

      @endforeach --}}

      @if (count($resultset) > 0)

      <ul>
        @foreach ($resultset as $document) 
        <li class="post" style="border-radius:0%;text-overflow: ellipsis; overflow: hidden;">
            <a href=""><picture><source srcset="" media=(max-width: 768px)><img src="images/uia background.jpg" class="post-thumbnail" alt=""></picture></a>
            <div class="post-text">
                <a href="{{ $document->URL[0] }}">
                    <?php
                        // Highlight the search keywords in the title
                        $title = preg_replace("/\b(" . implode('|', array_map('preg_quote', $keywords)) . ")\b/i", '<mark>$0</mark>', $document->Title);
                        echo $title;
                    ?>
                </a>
                <span class="badge bg-secondary rounded-0">New</span>
                <br><span style="font-size: 12px;">Articles & Publication</span><span style="font-size: 12px;"> | Library</span>
                <p style="margin-top: 1rem;">{{ $document->URL[0] }} </p>
                <div class="content text-justify">
                    <p>
                        <?php
                            // Highlight the search keywords in the abstract
                            $abstract = preg_replace("/\b(" . implode('|', array_map('preg_quote', $keywords)) . ")\b/i", '<mark>$0</mark>', $document->Abstract[0]);
                            echo $abstract;
                        ?>
                    </p>
                </div>
            </div>
        </li>
    @endforeach

      </ul>

      @else

      <p>No results found</p>

      @endif

    </div>
    </div>

</div>
@stop

@section('search-js')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@stop

@section('search-script')
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
    $(function() {
        // Highlight the search keywords in the search results
        var keywords = @json($keywords);
        var query = new RegExp("\\b(" + keywords.join("|") + ")\\b", "gi");
        $('mark').each(function() {
            var text = $(this).text();
            $(this).html(text.replace(query, '<strong>$&</strong>'));
        });
    });
</script>
@stop