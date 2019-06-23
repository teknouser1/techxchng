 
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            <div class="col-md-4">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-md-12 text-center">
                
                
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
              
            </div>
          </div>
          </div>
          
        </div>
        
      </div>
    </footer>
</div> <!-- .site-wrap -->  
  

  <script src="{{ URL::asset('/frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery-ui.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/aos.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ URL::asset('/frontend/js/jquery.sticky.js') }}"></script>

  
  <script src="{{ URL::asset('/frontend/js/main.js') }}"></script>
    
<script type="text/javascript">
  
  function hideshowdive(value){

      if(value == 1){
        $("#inlineRadio1-"+value).show();
        $("#inlineRadio1-2").hide();
        $("#publish_num").hide();
      }else if(value == 2){
        $("#inlineRadio1-"+value).show();
        $("#inlineRadio1-1").hide();
        $("#publish_num").hide();
      }else {
        $("#inlineRadio1-1").hide();
        $("#inlineRadio1-2").hide();
        $("#publish_num").hide();
      }

  }

  function textboxhideshow(value){
    if(value == 1){
       $("#publish_num").show();
     }else {
        $("#publish_num").hide();
      }
  }
</script>


  </body>
</html>