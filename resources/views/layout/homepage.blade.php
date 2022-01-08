
<!DOCTYPE html>
<html lang="en">

  <head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title></title>

<style>
body {
    min-width: 1380px; 
}
</style>

  </head>
  @section('homepage')  
  <link rel="stylesheet" href="/css/mainsite.css" type="text/css">
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('client_homepage')}}" class="logo"> <img src="/TentacitV1.1.png" class="hover-logo " style="width: 250px; height:100px; margin-top:-23px; margin-left: -160px;">  
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="category.html">Open Social</a></li>
              <li><a href="{{route('client_aboutusinfo')}}">About Us</a></li>
              <li><a href="{{route('client_contactinfo')}}">Contact Us</a></li> 
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>Work with cool music artists</h6>
            <h2>Build the Music Brand of your Dreams</h2>
          </div>
        </div>
    
     <!-- SEARCH BAR _!-->
    
  
     <!--END OF SEARCH BAR!-->
        
        <div class="col-lg-10 offset-lg-1" >
          <ul class="categories">
            <li><a href="{{route('client_memberlist')}}"><span class="icon"><img src="/artists.png" alt="Home" class="w3-round"></span>  Artists</a></li>
           
            <li><a href="{{route('client_musiclistingshowdata')}}"><span class="icon"><img src="/music.png" alt="Vehicle"></span> Music Library</a></li>
           <li><a href="#"><span class="icon"><img src="/exclamation.png  " alt="Travel"></span> Guidelines and Usage</a></li>
          </ul>
        </div>
      </div>  
    </div>
  </div>


  

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="/TentacitV1.1.png" alt="Plot Listing">
            </div>
            <p><!--a little message here><--!--></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Listing</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p><!--Address Here!--></p>
            <div class="row">
              <div class="col-lg-6">
              <a href="#">Desk Fax#</a>
              </div>
              <div class="col-lg-6">
                <a href="#">Manager mobile #</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2021 Tentacit Records., All Rights Reserved.
            <br>
          </div>
        </div>
      </div>
    </div>
  </footer>



</body>

</html>
@endsection
