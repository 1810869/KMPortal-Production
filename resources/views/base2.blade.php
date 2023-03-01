<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/base2.css">
    @yield('search2-css')
    @yield('contact-us-css')
    @yield('result2-css')
    
    <!--Script-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


    <title>KM Portal</title>
</head>
<body>

    <div class="search-bg">

        <nav class="navbar bg-light d-flex justify-content-around" style="box-shadow: none; background-color: transparent;">
            <div class="iium-logo d-flex flex-row flex-wrap">
                <a href="https://www.iium.edu.my/v2/"><img src="/images/logo 40th.png" alt="" id="vid"></a>
            </div>
            <div class="soc-med d-flex flex-row-reverse">
                <div class="contact-us"><a  href="/contact"><p>Contact Us</p></a></div>
                <div class="quote-png"><a href="" style="padding: 0;"><img src="/images/connectivity.png" alt=""></a></div>
                <div class="sidemenu-btn"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></div>
             </div>
        </nav>
        
        @yield('search2-container')

    </div>

    @yield('contact-us')
    @yield('result2')
    @yield('dump')

    <div id="mySidenav" class="sidenav">
       
        <h1>KM Portal</h1>
        <a href="/contact"><i class="fa fa-phone" style="font-size:20px; padding-right: 7px;"></i>Contact Us</a>
        <a href="#"><i class="fas fa-hashtag" style="font-size:20px; padding-right: 7px;"></i>Our Social Media</a>
        <a href="https://www.youtube.com/channel/UCXWukxhJoZmw0k83NbdSl1w?sub_confirmation=1" class="sidenav-socmed"><i class='fas fa-angle-double-right' style=' padding-right: 7px;'></i>YouTube</a>
        <a href="https://twitter.com/LibIIUM" class="sidenav-socmed"><i class='fas fa-angle-double-right' style=' padding-right: 7px;'></i>Twitter</a>
        <a href="https://www.facebook.com/iiumlibrary" class="sidenav-socmed"><i class='fas fa-angle-double-right' style=' padding-right: 7px;'></i>Facebook</a>
        <a href="https://www.instagram.com/iiumlib" class="sidenav-socmed"><i class='fas fa-angle-double-right' style=' padding-right: 7px;'></i>Instagram</a>

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close Tab</a>
        
    </div>

    <footer class="footer1 bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            &copy; International Islamic University Malaysia, <script type="text/javascript">document.write( new Date().getFullYear() );</script>
        </div>
        <!-- Copyright -->
    </footer>

    <script>


        function openNav() {
          document.getElementById("mySidenav").style.width = "300px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }

        $('body').on('click', function(){
  if( parseInt( $('#mySidenav').css('width') ) > 0 ){
    closeNav();
  }
});
        </script>
    
</body>
</html>