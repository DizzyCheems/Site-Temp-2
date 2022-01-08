
@section ('songs')
  <section class="wrapper" >
    <div class="container-fostrap" >
     
        <div class="content" >    
            <div class="container" >
                <div class="row">
        
                    <div class="col-xs-12 col-sm-4">
                        <div class="card"  style="width: 20rem; ">
                            <a class="img-card" href="">
                            <img src="/image/20211023223600.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href=""> Love Mee Too 
                                  </a>
                                </h4>
                                <h5 class="card-title">
                                    <a href=""> Razaec
                                  </a>
                                </h5>
                                <p class="">
                                November 16, 2021 
                                </p>  
                                <p style="font-weight:bold; font-size:26px;" > 
                                Orchestral
                            <!--    <a class="btn btn-small btn-primary" style=" left:20px;position:relative; width:170px;" href="{{route('client_play')}}">Download</a> !-->

                                </p>
                    
                                <!-- Trigger/Play button-->
                                <img src="/play-button.png" style="width: 50px; height:50px;" 
                                 type="button"  class="modal-button" data-target="play-song" 
                                  href="#myModal1" type="button">
                            </div>
                            <div class="card-read-more">
                                <a href="#" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>  
<!--MODAL!-->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header" style="background-image: url('/ios13DarkPreview-768x432.png');
    background-repeat:no-repeat;   background-size: cover;"> 
      <span class="close">&times;</span>
      <h2 style="color:azure;">Love Mee Too</h2>
    </div>
      
    <div class="modal-body" style="background-image: url('albumbg/ultraviolet.jpg');
    background-repeat:no-repeat;   background-size: cover; " >
      <h2 style="margin-left:80px; color:white;">Love Mee Too</h2>
      <h2 style="margin-left:80px; color:white;">Razaec</h2>

<img src="/image/20211023223600.jpg" style="width:300px; height:300px; margin-left:80px; border-radius:3px; border:solid;"  />

<!-- Audio player !-->
<div class="audio-player" style="margin: 0 auto; width: 550px; margin-left:400px; margin-top:30px;" >
  <div class="timeline">
    <div class="progress"></div>
  </div>
  <div class="controls">
    <div class="play-container">
      <div class="toggle-play play">
    </div>
    </div>
    <div class="time">
      <div class="current">0:00</div>
      <div class="divider">/</div>
      <div class="length"></div>
    </div>
    <div class="name">Love Mee Too</div>
<!--     credit for icon to https://saeedalipoor.github.io/icono/ -->
    <div class="volume-container">
      <div class="volume-button">
        <div class="volume icono-volumeMedium"></div>
      </div>
      
      <div class="volume-slider">
        <div class="volume-percentage"></div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
        
  <script  src="js/player.js"></script>
           
    		</div>
		
<!-- Analytics -->
<!-- End of Audio Control Parameter -->
    <div class="modal-footer" style="background-image: url('/ios13DarkPreview-768x432.png');
    background-repeat:no-repeat;   background-size: cover;"> 
      <h3> Orchestral</h3>
    </div>
  </div>

</div>
<!--END of Paramenter!-->


            
                
                
<script>  // Get the button that opens the modal
var btn = document.querySelectorAll("button.modal-button");

// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}</script>
</html>
@ensection