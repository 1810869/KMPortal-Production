@extends('base2')

@section('search2-css')

<link rel="stylesheet" href="/css/search2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Font Awesome -->
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
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>

@stop

@section('search2-container')

   <div class="search2-wrapper d-flex align-items-center justify-content-center"> 

    <div class="crossfade">
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
    </div>


    <div class="box d-flex align-items-left">
      <div class="container-socmed">
          <div class="icon facebook">
              <div class="tooltip">
                  Facebook
              </div>
              <span><a href="https://www.facebook.com/iiumlibrary"><i class="fab fa-facebook-f"></i></a></span>
          </div>

          <div class="icon youtube">
              <div class="tooltip">
                  Youtube
              </div>
              <span><a href="https://www.youtube.com/channel/UCXWukxhJoZmw0k83NbdSl1w?sub_confirmation=1"><i class="fab fa-youtube"></a></i></span>
          </div>

          <div class="icon twitter">
              <div class="tooltip">
                  Twitter
              </div>
              <span><a href="https://twitter.com/LibIIUM"><i class="fab fa-twitter"></a></i></span>
          </div>

          <div class="icon instagram">
              <div class="tooltip">
                  Instagram
              </div>
              <span><a href="https://www.instagram.com/iiumlib"><i class="fab fa-instagram"></a></i></span>
          </div>
      </div>
  </div>
    

    <div class="search2-section">

        <div class="w3-container w3-center w3-animate-opacity" style="animation-duration: 1.8s">
            <div class="text responsive-font-example">
                <h1>IIUM KNOWLEDGE PORTAL</h1>
                <p style="color: white;">Enables searching and accessing of IIUM knowledge assets residing in systems,</p>
                <p style="color: white;">databases and repositories available at IIUM</p>
            </div>
        </div>
      {{-- <form method="post" action="{{url('result')}}">
          {{csrf_field()}}
        <div id="searchBarWrap">
            <input id="searchBar" type="text" name="keyword" placeholder="Enter a keyword to get started"/>
            <button type="submit" class="btn" id="searchBtn" style="height: 40px;"><i class="fa fa-search"></i></button>
        </div>
      </form> --}}

      <form method="post" action="{{ url('result') }}" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div id="searchBarWrap">
          <input id="searchBar" type="text" name="keyword" placeholder="Enter a keyword to get started" />
          <button type="submit" class="btn" id="searchBtn" style="height: 40px;"><i class="fa fa-search"></i></button>
        </div>
      </form>

    </div>

   </div> 

   <div class="cluster2-wrapper">

       <div class="cluster-text">
            <a href="#cluster" class="cluster-img"><img src="/images/down.png" alt="down arrow" class="vert-move"></a>
       </div>

       {{-- <marquee width="100%" direction="right" height="30px" style="background-color:yellow; color:red; z-index:-3; "> 
        This website is still under development, it does not represent the final product.
        </marquee> --}}

       <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

      <section class="container py-5 text-center" id="cluster">
          
        <row class="row justify-content-center">
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/IIUM Policies & Standard - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                {{-- <img src="/images/awards.png" alt="" style="background-color: rgb(213, 159, 15); width: 7rem; height: 7rem; padding: 1rem;"> --}}
                <img src="/images/IIUM Policies & Standards (copy).png" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>IIUM Rules and Policies</strong> </h5>
                <p class="card-text">
                  Explore IIUM policies & standards.
                </p>
                {{-- <a href="mobile" class="btn btn-primary">Open Mobile</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Expert Corner - Round Shape.png" alt="" style="width: 7rem; height: 7rem; "> --}}
                <img src="/images/Experts Corner (copy).png" alt="" style="width: 5rem;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Experts Corner</strong></h5>
                <p class="card-text">
                  Learn about IIUM experts' profiles.
                </p>
                {{-- <a href="monitor" class="btn btn-primary">Open Monitor</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Awards & Achievement - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/awards.png" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Awards and Achievements</strong></h5>
                <p class="card-text">
                  Awards and achievements received by IIUM.
                </p>
                {{-- <a href="predictor" class="btn btn-primary">Open Predictor</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Knowledge Resource - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/Knowledge Resources (copy).png" alt="" style="width: 4.5rem;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Knowledge Resources</strong></h5>
                <p class="card-text">
                  Knowledge resources such as e-book and digital manuscripts collections available at the library and kulliyyah.
                </p>
                {{-- <a href="simulator" class="btn btn-primary">Open Simulator</a> --}}
              </div>
            </card>
          </column>
        </row>
      
        <row class="row justify-content-center">
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Articles & Publications - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/Articles & Publications (copy).png" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Research Output</strong> </h5>
                <p class="card-text">
                  Research and Scholarly Publications.
                </p>
                {{-- <a href="mobile" class="btn btn-primary">Open Mobile</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/SDG & Flagship - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/SDG & Flagship (copy).png" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>SDG & Flagship</strong></h5>
                <p class="card-text">
                  Information related to IIUM Sustainable Development Goal (SDG) and Flagship projects.
                </p>
                {{-- <a href="monitor" class="btn btn-primary">Open Monitor</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Knowledge Sharing - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/Knowledge Sharing (copy).png" alt="" style="width: 5rem;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Knowledge Sharing</strong></h5>
                <p class="card-text">
                  IIUM knowledge sharing activities organized by Centre of Studies and Administrative Offices (CoS/AO).
                </p>
                {{-- <a href="predictor" class="btn btn-primary">Open Predictor</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Community Engagement - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/Community Engagement (copy).png" alt="" style="width: 5rem; padding-top: 1rem;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Community Engagement</strong></h5>
                <p class="card-text">
                  IIUM community engagement programs.
                </p>
                {{-- <a href="simulator" class="btn btn-primary">Open Simulator</a> --}}
              </div>
            </card>
          </column>
        </row>
      
        <row class="row justify-content-center">
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/IIUM History - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/IUM History.png" alt="" style="height: 5rem; width: 3rem;">
            </div>
              <div class="card-body">
                <h5 class="card-title"><strong>IIUM History</strong> </h5>
                <p class="card-text">
                  IIUM corporate memories and archives collection.
                </p>
                {{-- <a href="mobile" class="btn btn-primary">Open Mobile</a> --}}
              </div>
            </card>
          </column>
          <column class="col-12 col-lg-3 d-flex">
            <card class="card shadow my-4 pt-3 align-self-stretch">
              <div class="icon-cluster">
                {{-- <img src="/images/Lesson Learnt - Round Shape.png" alt="" style="width: 5rem; height: 5rem; "> --}}
                <img src="/images/Lesson Learnt (copy).png" alt="" style="width: 5rem;">
              </div>
              <div class="card-body">
                <h5 class="card-title"><strong>Lesson Learnt</strong></h5>
                <p class="card-text">
                  Lessons learnt and success stories of IIUM community.
                </p>
                {{-- <a href="monitor" class="btn btn-primary">Open Monitor</a> --}}
              </div>
            </card>
          </column>
        </row>
      </section>

      
    </body>


   </div>
   
   <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

  <script>
    function validateForm() {
      var keyword = document.getElementById("searchBar").value.trim();
      if (keyword == "") {
        return false;
      }
     }
  </script>

@stop