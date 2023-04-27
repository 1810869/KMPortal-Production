@extends('base2')

@section('result2-css')
<link rel="stylesheet" href="css/c2.css">
<link rel="stylesheet" href="css/result2.css">

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@stop

@section('result2')
<div class="wrapper">
    <div class="one">
    <div class="left-content">
        <section>
          <div class="search-sec">
            <div class="search-tooltip" style="display: flex; align-items: center; justify-content: space-between;">
               <strong>SEARCH</strong>
               <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="bottom" title="Include any operator (AND, OR, NOT, AND NOT) between keywords to narrow down the searching.">
               <img src="/images/qmicon.png" alt="question-mark" style="width: 15px; height: 15px;">
               </a>
            </div>

                <form id="my-form"  action="{{ route('result') }}" method="GET">
            <!--<form method="post" action="{{ url('result') }} " onsubmit="return validateForm()">-->
    	      {{csrf_field()}}
    		<div id="searchBarWrap">
        	  <input id="searchBar" type="text" name="keyword" value="{{ $input  }}" placeholder="Enter a keyword to get start">
        	  <button type="submit" id="searchBtn" class="btn" style="border-radius: 0; height: 40px;"  onclick="submitSearch()"><i class="fa fa-search" style="padding: 5px;"></i></button>
                </div>
	    <!--</form>-->
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
              <button class="accordion-button collapsed" style="--bs-accordion-active-bg: none; --bs-accordion-active-color: none; --bs-accordion-btn-focus-box-shadow: none;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                Category
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
              <!--<form id="my-form"  action="{{ route('result') }}" method="GET">-->

                @foreach ($categoryFacet as $value => $count)
                @if($value === "SDG & Flagships")
                <div class="form-check">
                   <label>
                   <input type="checkbox" name="Category[]" value="SDG & Flagships" {{ request('Category') == 'SDG & Flagships' ? 'checked' : '' }} id="category-checkbox"> SDG & Flagships ({{ $count }})
                   </label>
                </div>
                @elseif($value === "Experts Corner")
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Experts Corner" {{ request('Category') == 'Experts Corner' ? 'checked' : '' }} id="category-checkbox"> Experts Corner ({{ $count  }})
                   </label>
                </div>
                @elseif($value === "Research Output")
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Research Output" {{ request('Category') == 'Research Output' ? 'checked' : '' }} id="category-checkbox"> Research Output ({{ $count }})
                   </label>
                </div>
                @elseif($value ==="Knowledge Sharing")
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Knowledge Sharing" {{ request('Category') == 'Research Output' ? 'checked' : '' }} id="category-checkbox"> Knowledge Sharing ({{ $count }})
                   </label>
                </div>
                @elseif($value ==="IIUM Rules & Policies")
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="IIUM Rules & Policies" {{ request('Category') == 'IIUM Rules & Policies' ? 'checked' : '' }} id="category-checkbox"> IIUM Rules & Policies ({{ $count }})
                   </label>
                </div>
                @elseif($value ==="IIUM History")
                <div class="form-check">
                   <label>
                   <input type="checkbox" name="Category[]" value="IIUM History" {{ request('Category') == 'IIUM History' ? 'checked' : '' }} id="category-checkbox"> IIUM History ({{ $count }})
                   </label>
                </div>
                @endif
                @endforeach
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Awards and Achievements" {{ request('Category') == 'Awards and Achievements' ? 'checked' : '' }} id="category-checkbox"> Awards and Achievements (0)
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Knowledge Resources" {{ request('Category') == 'Knowledge Resources' ? 'checked' : '' }} id="category-checkbox"> Knowledge Resources (0)
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Community Engagement" {{ request('Category') == 'Community Engagement' ? 'checked' : '' }} id="category-checkbox"> Community Engagement (0)
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="Category[]" value="Lesson Learnt" {{ request('Category') == 'Lesson Learnt' ? 'checked' : '' }} id="category-checkbox"> Lesson Learnt (0)
                   </label>
                </div>
                <!--<input type="hidden" name="keyword" value="{{ $input }}">-->
              </div>
            </div>
            </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">

              <button class="accordion-button collapsed" style="--bs-accordion-active-bg: none; --bs-accordion-active-color: none; --bs-accordion-btn-focus-box-shadow: none;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                KCDIOM
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">

                <select class="form-select form-select-sm" name="Subcategory"  aria-label=".form-select-sm example">
                <option value="">All Categories</option>
                <option value="KCDIOM" {{ request('Subcategory') === 'KCDIOM' ? 'selected' : '' }}>KCDIOM</option>
                <option value="AHMAD IBRAHIM KULLIYYAH OF LAWS" {{ request('Subcategory') === 'AHMAD IBRAHIM KULLIYYAH OF LAWS' ? 'selected' : '' }}>AHMAD IBRAHIM KULLIYYAH OF LAWS (AIKOL)</option>
                <option value="ABDULHAMID ABUSULAYMAN KULLIYYAH OF ISLAMIC REVEALED KNOWLEDGE AND HUMAN SCIENCE" {{ request('Subcategory') === 'AHMAD IBRAHIM KULLIYYAH OF LAW' ? 'selected' : '' }}>ABDULHAMID ABUSULAYMAN KULLIYYAH OF ISLAMIC REVEALED KNOWLEDGE AND HUMAN SCIENCE (AHAS KIRKHS)</option>
                <option value="KULLIYYAH OF ECONOMICS AND MANAGEMENT SCIENCES" {{ request('Subcategory') === 'KULLIYYAH OF ECONOMICS AND MANAGEMENT SCIENCES' ? 'selected' : '' }}>KULLIYYAH OF ECONOMICS AND MANAGEMENT SCIENCES (KENMS)</option>
                <option value="KULLIYYAH OF ENGINEERING" {{ request('Subcategory') === 'KULLIYYAH OF ENGINEERING' ? 'selected' : '' }}>KULLIYYAH OF ENGINEERING (KOE)</option>
                <option value="KULLIYYAH OF ARCHITECTURE AND ENVIRONMENTAL DESIGN" {{ request('Subcategory') === 'KULLIYYAH OF ARCHITECTURE AND ENVIRONMENTAL DESIGN' ? 'selected' : '' }}>KULLIYYAH OF ARCHITECTURE AND ENVIRONMENTAL DESIGN (KAED)</option>
                <option value="KULLIYYAH OF EDUCATION" {{ request('Subcategory') === 'KULLIYYAH OF EDUCATION' ? 'selected' : '' }}>KULLIYYAH OF EDUCATION (KOED)</option>
                <option value="KULLIYYAH OF INFORMATION AND COMMUNICATION TECHNOLOGY" {{ request('Subcategory') === 'KULLIYYAH OF INFORMATION AND COMMUNICATION TECHNOLOGY' ? 'selected' : '' }}>KULLIYYAH OF INFORMATION AND COMMUNICATION TECHNOLOGY (KICT)</option>
                <option value="KULLIYYAH OF MEDICINE" {{ request('Subcategory') === 'KULLIYYAH OF MEDICINE' ? 'selected' : '' }}>KULLIYYAH OF MEDICINE (KOM)</option>
                <option value="9">KULLIYYAH OF NURSING (KON)</option>
                <option value="KULLIYYAH OF DENTISTRY" {{ request('Subcategory') === 'KULLIYYAH OF DENTISTRY' ? 'selected' : '' }}>KULLIYYAH OF DENTISTRY (KOD)</option>
                <option value="KULLIYYAH OF PHARMACY" {{ request('Subcategory') === 'KULLIYYAH OF PHARMACY' ? 'selected' : '' }}>KULLIYYAH OF PHARMACY (KOP)</option>
                <option value="KULLIYYAH OF ALLIED HEALTH SCIENCE" {{ request('Subcategory') === 'KULLIYYAH OF ALLIED HEALTH SCIENCE' ? 'selected' : '' }}>KULLIYYAH OF ALLIED HEALTH SCIENCE (KAHS)</option>
                <option value="KULLIYYAH OF SCIENCE" {{ request('Subcategory') === 'KULLIYYAH OF SCIENCE' ? 'selected' : '' }}>KULLIYYAH OF SCIENCE (KOS)</option>
                <option value="14">KULLIYYAH OF LANGUAGE AND MANAGEMENT (KLM)</option>
                <option value="INTERNATIONAL INSTITUTE OF ISLAMIC THOUGHT AND CIVILIZATION" {{ request('Subcategory') === 'INTERNATIONAL INSTITUTE OF ISLAMIC THOUGHT AND CIVILIZATION' ? 'selected' : '' }}>INTERNATIONAL INSTITUTE OF ISLAMIC THOUGHT AND CIVILIZATION (ISTAC-IIUM)</option>
                <option value="INTERNATIONAL INSTITUTE FOR HALAL RESEARCH AND TRAINING" {{ request('Subcategory') === 'INTERNATIONAL INSTITUTE FOR HALAL RESEARCH AND TRAINING' ? 'selected' : '' }}>INTERNATIONAL INSTITUTE FOR HALAL RESEARCH AND TRAINING (INHART)</option>
                <option value="INSTITUTE OF ISLAMIC BANKING AND FINANCE" {{ request('Subcategory') === 'INSTITUTE OF ISLAMIC BANKING AND FINANCE' ? 'selected' : '' }}>IIUM INSTITUE OF ISLAMIC BANKING AND FINANCE (IIIBF)</option>
                <option value="18">INTERNATIONAL INSTITUTE FOR MUSLIM UNITY (IIMU)</option>
                <option value="19">INSTITUTE OF OCEANOGRAPHY AND AND MARITIME STUDIES (INOCEM)</option>
                <option value="20">CENTRE FOR FOUNDATION STUDIES</option>
                <option value="21">CENTRE FOR LANGUAGES AND PRE-UNIVERSITY ACADEMIC DEVELOPMENT (CELPAD)</option>
                <option value="22">RISK MANAGEMENT OFFICE</option>
                <option value="23">OFFICE OF OMBUDSMAN</option>
                <option value="24">IIUM PRESS</option>
                <option value="25">UNDERGRADUATE AND POSTGRADUATE INTERNATIONAL STUDENT ADMISSION</option>
                <option value="26">OFFICE OF SECURITY</option>
                <option value="27">SULTAN HAJI AHMAD SHAH MOSQUE</option>
                <option value="28">OFFICE OF THE LEGAL ADVISOR</option>
                <option value="29">OFFICE OF KNOWLEDGE FOR CHANGE AND ADVANCEMENT</option>
                <option value="29">OFFICE OF THE INDUSTRIAL LINK</option>
                <option value="30">OFFICE OF THE CAMPUS RECTOR</option>
                <option value="31">OFFICE OF THE DEPUTY RECTOR (ACADEMIC AND INTERNATIONALISATION)</option>
                <option value="32">OFFICE OF INTERNAL AFFAIRS</option>
                <option value="33">OFFICE FOR STRATEGY AND INSTITUTIONAL CHANGE</option>
                <option value="34">OFFICE OF DEPUTY RECTOR (STUDENT DEVELOPMENT AND COMMUNITY ENGAGEMENT)</option>
                <option value="35">OFFICE OF DEPUTY RECTOR (RESPONSIBLE RESEARCH AND INNOVATION)</option>
                <option value="36">STUDENT SMART LEARNING AND RESEARCH TRAINING UNIT</option>
                <option value="37">OFFICE OF COMMUNICATION, ADVOCARY AND PROMOTION</option>
                <option value="DAR ALHIKMAH LIBRARY" {{ request('Subcategory') === 'DAR ALHIKMAH LIBRARY' ? 'selected' : '' }}>DAR ALHIKMAH LIBRARY</option>
                <option value="39">OCCUPATIONAL SAFETY, HEALTH AND BUILT ENVIRONMENT</option>
                <option value="40">STUDENT AFFAIRS AND DEVELOPMENT DIVISION</option>
                <option value="41">MANAGEMENT SERVICES DIVISION</option>
                <option value="42">INFORMATION TECHNOLOGY DIVISION</option>
                <option value="43">FINANCE DIVISION</option>
                <option value="44">RESIDENTIAL AND SERVICE DEPARTMENT</option>
                <option value="45">DEVELOPMENT DIVISION</option>
                <option value="46">IIUM ENDOWMENT FUND</option>
                <option value="47">ALUMNI RELATIONS DIVISION</option>
                <option value="48">HARUN M. HASHIM LAW CENTRE</option>
                <option value="49">PERCEPTIVE SENTIMENT COMPUTING</option>
                <option value="50">PERVASIVE COMPUTING AND BRAIN DEVELOPMENT RESEARCH GROUP</option>
                <option value="51">SEJAHTERA CENTRE FOR SUSTAINABILITY AND HUMANITY</option>
                <option value="52">CENTRE OF UNMANNED TECHNOLOGIES</option>
                <option value="53">IIUM RESEARCH ETHICS COMMITTEE</option>
                <option value="54">IIUM ANIMAL CARE AND USE COMMITTEE</option>
                <option value="55">IIUM MEDICAL CENTRE</option>
                <option value="56">RESEARCH MANAGEMENT CENTRE</option>
                <option value="57">CENTRE FOR ARTS AND CULTURAL SUSTAINABLE DEVELOPMENT</option>
                <option value="58">CENTRE FOR ISLAMIC ECONOMICS</option>
                <option value="59">INTEGRATED CENTRE FOR RESEARCH ANIMAL CARE AND USE</option>
                <option value="60">INTERNATIONAL CENTRE FOR WAQF RESEARCH</option>
                <option value="61">CREDITED TO CO-CURRICULAR DEPARTMENT</option>
                <option value="62">INTERNATIONAL CENTRE FOR THE ALLIANCE OF CIVILISATIONS</option>
                <option value="63">ENTERPRENUERSHIP DEVELOPMENT CENTRE</option>
                <option value="64">CENTRE FOR PROFESSIONAL DEVELOPMENT</option>
                <option value="65">IIUM SEJAHTERA CLINIC</option>
                <option value="66">CENTRE FOR COMMUNITY ENGAGEMENT AND SERVICES</option>
                <option value="67">IIUM WORLD DEBATE AND ORATORY CENTRE</option>
                <option value="68">CENTRE FOR ISLAMISATION</option>
                <option value="69">NATURAL MEDICINAL PRODUCTS CENTRE</option>
                <option value="70">SPORTS DEVELOPMENT CENTRE</option>
                <option value="71">COUNSELING AND CAREER SERVICES CENTRE</option>
                <option value="72">CENTRE FOR POSTGRADUATES STUDIES</option>
                <option value="73">MAHALLAH ASIAH</option>
                <option value="74">MAHALLAH RUQAIYAH</option>
                <option value="75">MAHALLAH SAFFIYYAH</option>
                <option value="76">MAHALLAH SUMAIYAH</option>
                <option value="77">MAHALLAH NUSAIBAH</option>
                <option value="78">MAHALLAH HALIMATUN SAADIAH</option>
                <option value="79">MAHALLAH HAFSAH</option>
                <option value="80">MAHALLAH AMINAH</option>
                <option value="81">MAHALLAH ASMA'</option>
                <option value="82">MAHALLAH SALAHUDIN AL-AYYUBI</option>
                <option value="83">MAHALLAH UTHMAN AFFAN</option>
                <option value="84">MAHALLAH AS-SIDDIQ</option>
                <option value="85">MAHALLAH AL-FARUQ</option>
                <option value="86">MAHALLAH BILAL IBN RABAH</option>
                <option value="87">MAHALLAH ALI IBN ABI TALIB</option>
                <option value="88">MAHALLAH ZUBAIR AL-AWWAM</option>
              </select>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" style="--bs-accordion-active-bg: none; --bs-accordion-active-color: none; --bs-accordion-btn-focus-box-shadow: none;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Type
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="type[]" value="Audio" {{ request('ContentType') == 'Audio' ? 'checked' : '' }} id="category-checkbox"> Audio
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="type[]" value="Photo" {{ request('ContentType') == 'Photo' ? 'checked' : '' }} id="category-checkbox"> Photo
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="type[]" value="Document" {{ request('ContentType') == 'Document' ? 'checked' : '' }} id="category-checkbox"> Document
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="type[]" value="Webpage" {{ request('ContentType') == 'Webpage' ? 'checked' : '' }} id="category-checkbox"> Webpage
                   </label>
                </div>
                <div class="form-check">
                   <label>
                    <input type="checkbox" name="type[]" value="Video" {{ request('ContentType') == 'Video' ? 'checked' : '' }} id="category-checkbox"> Video
                   </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="button-sec">
         <button type="button" class="btn1 btn btn-outline-primary" id="search-btn">Apply</button>
         <br>
         <button type="button" id="clear-btn" class="btn1 btn btn-outline-primary">Clear</button>
      </div>
    </form>
    </section>
    <br>
<!--<h5>Category</h5>
<ul style="list-style: none; padding-left: 0;"">
    @foreach ($categoryFacet as $value => $count)
    @if($count > 0)
            <li>
                <p style="margin-bottom: 0; text-decortion: none;">
                    <a href="{{ route('result', ['keyword' => $input, 'page' => 1, 'Category' => $value] + request()->except('Category')) }}" style="text-decoration: none;">
                         {{ $value }}  ({{ $count }})
                    </a>
                </p>
            </li>
    @endif
    @endforeach
</ul>-->
<br>
<h5>KCDIOM</h5>
<ul style="list-style: none; padding-left: 0;">
    @foreach ($subcategoryFacet as $value => $count)
    @if($count > 0)
            <li>
                <p style="margin-bottom: 0; text-decortion: none;">
                    <a href="{{ route('result', ['keyword' => $input, 'page' => 1, 'Subcategory' => $value]) }}" style="text-decoration: none;">
                        {{ $value }} ({{ $count }})
                    </a>
                </p>
            </li>
    @endif
    @endforeach
</ul>


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
      <!--<div class="navigate" style="display: flex; align-items: center; margin-bottom: 2rem;"><a href="/search2" style="font-size:18px; text-decoration: none; margin-right: 5px; font-size: 16px;"> Home </a> / Result </div>-->
      <div class="navigate" style="display: flex; align-items: center; margin-bottom: 2rem;">
         <a href="/search2" style="text-decoration: none; font-size: 1rem;"><i class="fa fa-home"></i> Home </a> /Result
      </div>
      <div class="resNum" style="display: flex; justify-content: space-between; align-items: center;">
      <!--<p style="color: black;">Result(s) found: <b style="font-size: 1.05rem;">{{ $resultset->getNumFound() }}</b> for <b style="font-size: 1.05rem;">{{ $input }}</b></p>-->
      <p style="color: black;">Result(s) found: <b style="font-size: 1.05rem;">{{ $resultset->getNumFound() }}</b></p>
      <form method="GET" action="{{ route('result', request()->all()) }}">
      <label for="sort">Sort by:</label>
      <!--<input type="hidden" name="keyword" value="{{ $input }}">-->
      <!--<input type="hidden" name="page" value="{{ $page }}">-->
      <!-- Add the current filters as hidden inputs -->
      @foreach(request()->all() as $name => $value)
        @if(is_array($value))
      @foreach($value as $item)
        <input type="hidden" name="{{ $name }}[]" value="{{ $item }}">
      @endforeach
      @else
        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
      @endif
      @endforeach
      <select id="sort" name="sort" onchange="this.form.submit()">
      <option style="font-size: 1rem;" value="relevance" {{ request('sort') == 'relevance' ? 'selected' : '' }}>Relevance</option>
      <option style="font-size: 1rem;" value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Category (A-Z)</option>
      <option style="font-size: 1rem;"  value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Category (Z-A)</option>
      </select>
      </form> 
      </div>

      @if (count($resultset) > 0)

      <ul style="padding-left: 0;">
        @foreach ($resultset as $document)
        @if(isset($document->URL) && isset($document->Title) && isset($document->Content) ) 

        <li class="post" style="border-radius:0%;text-overflow: ellipsis; overflow: hidden;">
          <div class="img-container">
            <source srcset="" media=(max-width: 160px)>
            @if(isset($document->img))
              <img src="{{ asset($document->img[0]) }}" class="post-thumbnail" alt="">
            @else
              <img src="{{ asset('images/uia background.jpg') }}" class="post-thumbnail"  alt="">
            @endif
          </div>
            <div class="post-text" style="width: 40rem;" >
		<a href="{{ strval($document ->URL[0]) }}" id="copy-link">
                    <?php
                        // Highlight the search keywords in the title
                        $title = preg_replace("/\b(" . implode('|', array_map('preg_quote', $keywords)) . ")\b/i", '<mark style="background-color: yellow; padding: 0;">$0</mark>', $document->Title[0]);
                        echo $title;
                    ?>
                </a>
                <span class="badge bg-secondary rounded-0">New</span>
                @if ($document->Subcategory === 'KCDIOM')
                <br><span style="font-size: 12px; font-weight: normal;">{{ $document->Category }} | {{ $document->AccessType }}</span>
                <br>
                @else
                <br><span style="font-size: 12px; font-weight: normal;">{{ $document->Category }} | {{ $document->Subcategory }} | {{ $document->AccessType }}</span>
                <br>
                @endif
                <br>
                <div class="content text-justify">
                    <p>
                        <?php
                            // Highlight the search keywords in the abstract
                            $abstract = preg_replace("/\b(" . implode('|', array_map('preg_quote', $keywords)) . ")\b/i", '<mark style="background-color: yellow; padding: 0;">$0</mark>', $document->Content[0]);
                            echo $abstract;
                        ?>
                    </p>
                </div>
            </div>
        </li>

	@endif
        @endforeach

      </ul>

      @else

      <p>No results found</p>

      @endif

        @if ($lastPage > 1)
<div class="pagination justify-content-center">
    <ul class="pagination" style="font-weight: normal;">
        @if ($page > 1)
            <li class="page-item"><a class="page-link" href="{{ route('result', ['keyword' => $input,'sort' => request('sort'), 'page' => $page-1]) }}">Previous</a></li>
        @endif
        @php
            $start = max($page - 5, 1);
            $end = min($page + 4, $lastPage);
        @endphp
        @if ($start > 1)
            <li class="page-item"><a class="page-link" href="{{ route('result', ['keyword' => $input,'sort' => request('sort'), 'page' => 1] + request()->query()) }}">1</a></li>
            @if ($start > 2)
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            @endif
        @endif
        @for ($i = $start; $i <= $end; $i++)
            <li class="page-item {{ $page == $i ? 'active' : '' }}"><a class="page-link" href="{{ route('result', ['keyword' => $input, 'sort' => request('sort'), 'page' => $i] + request()->query()) }}">{{ $i }}</a></li>
        @endfor
        @if ($end < $lastPage)
            @if ($end < $lastPage - 1)
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            @endif
            <li class="page-item"><a class="page-link" href="{{ route('result', ['keyword' => $input, 'sort' => request('sort'), 'page' => $lastPage] + request()->query()) }}">{{ $lastPage }}</a></li>
        @endif
        @if ($page < $lastPage)
            <li class="page-item"><a class="page-link" href="{{ route('result', ['keyword' => $input, 'sort' => request('sort'), 'page' => $page+1] + request()->query()) }}">Next</a></li>
        @endif
    </ul>
</div>
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

{{--<script>
    $(function() {
        // Highlight the search keywords in the search results
        var keywords = @json($keywords);
        var query = new RegExp("\\b(" + keywords.join("|") + ")\\b", "gi");
        $('mark').each(function() {
            var text = $(this).text();
            $(this).html(text.replace(query, '<strong>$&</strong>'));
        });
    });
</script>--}}

  <script>
    function validateForm() {
      var keyword = document.getElementById("searchBar").value.trim();
      if (keyword == "") {
        return false;
      }
     }
  </script>

<script>
  function clearFilters() {
    const checkboxes = document.querySelectorAll('input[type=checkbox]');
    checkboxes.forEach((checkbox) => {
      checkbox.checked = false;
    });
    const select = document.querySelector('select.form-select');
    select.selectedIndex = 0;
  }
  
  const clearBtn = document.querySelector('#clear-btn');
  clearBtn.addEventListener('click', clearFilters);
</script>

<script>
  // Get the select element
  const sortSelect = document.querySelector('#sort-select');

  // Add an event listener to the select element
  sortSelect.addEventListener('change', () => {
    // Get the selected option value
    const sortValue = sortSelect.value;

    // Reload the page with the selected sort order as a URL parameter
    window.location.href = window.location.pathname + '?sort=' + sortValue;
  });
</script>

<script>
  document.getElementById("search-btn").addEventListener("click", function() {

  var currentKeyword = document.getElementById("searchBar").value;
  document.getElementById("my-form").submit();
  document.getElementById("filter-form").submit();
});
</script>

<script>
document.getElementById("search-btn").addEventListener("click", function() {
  var currentKeyword = document.getElementById("search-input").value;
  document.getElementById("my-form").action = "{{ route('result') }}?keyword=" + currentKeyword;
  document.getElementById("my-form").submit();
});
</script>

<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

@stop
