
<div class="free">
  <footer id="footer" class="vspace20">
    <div class="container" >
      <div class="row">
        <div class="span4">
          <h4>About me</h4>
          <div class="divider"></div>
          <blockquote>Edgar chris is a passionate web application developer and occasional graphics designer.<br />
            He has an eye for good design and clean code </blockquote>
            
             <p><i class="icon-map-marker"></i>&nbsp;Nairobi ,Kenya</p>
          <p><i class="icon-phone"></i>&nbsp;Phone: 0735048886,0717113886</p>
          <p><i class="icon-envelope"></i>&nbsp;Email: info@edgar.co.ke</p>
          <p><i class="icon-globe"></i>&nbsp;Web: http://www.edgar.co.ke</p>
        </div>
        <div class="span4">
          <h4>tweets</h4>
          
         
        </div>
        <div class="span4">
          <h4>Newsletter</h4>
          <p>i occassionally give out awesome freebies subscribe and find out</p>
          <form class="form-newsletter">
            <div class="input-append">
              <input type="email" class="span2" placeholder="your email">
              <button type="submit" class="btn btn-large">Subscribe</button>
            </div>
          </form>
          <h4>Follow me  on Socials</h4>
          <p> <a href="#" class="round"><img src="<?php echo base_url();?>img/socials/facebook.png" alt="facebook" height="32" width="32" /></a> <a href="#" class="round"><img src="<?php echo base_url();?>img/socials/twitter.png" alt="twitter" height="32" width="32" /></a> <a href="#" class="round"><img src="<?php echo base_url();?>img/socials/github.png" alt="" height="32" width="32" /></a> <a href="#" class="round"><img src="<?php echo base_url();?>img/socials/linkedin.png" alt="linkedin" height="32" width="32" /></a> </p>
        </div>
      </div>
    </div>
  </footer>
  <div class="row socialbar">
    <div class="span6">
      <p>&copy; Copyright 2013 Sleekchris.&nbsp;<a href="#">Privacy</a>&nbsp;&amp;&nbsp;<a href="#">Terms and Conditions</a></p>
    </div>
  </div>
  <a class="scrolltotop" href="#"><span>up</span></a> 
  <script src="<?php echo base_url();?>js/jquery-1.8.3.min.js" type="text/javascript"></script> 
  <script src="<?php echo base_url();?>js/bootstrap/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url();?>js/jquery-validate/assets/js/jquery.validate.min.js"></script> 
  <script>    
    $("#myModal").modal({                  
      "backdrop"  : "static",
      "keyboard"  : true,
      "show"      : false                     
    });
   $("#myModal").on("show", function() {    
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   
            $("#myModal").modal('hide');     
        });
    });
</script> 
  <!--js validatio--> 
  <script src="<?php echo base_url();?>js/init-jquery-validate-contact.js"></script> 
  <!--js validation--> 
  <script src="<?php echo base_url();?>js/holder.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
  <!--js ui--> 
  <script src="<?php echo base_url();?>js/jquery.infinitescroll.min.js"></script> 
  <script src="<?php echo base_url();?>js/bootbox.min.js"></script> 
  <script src="<?php echo base_url();?>js/jquery-validate/script.js"></script> 
  <!--form--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url();?>js/formToWizard.js"></script> 
  <!--form--> 
  <script src="<?php echo base_url();?>js/ui/jquery.ui.core.js"></script> 
  <script src="<?php echo base_url();?>js/ui/jquery.ui.widget.js"></script> 
  <script src="<?php echo base_url();?>js/ui/jquery.ui.mouse.js"></script> 
  <script src="<?php echo base_url();?>js/ui/jquery.ui.selectable.js"></script> 
  <!--js ui--> 
  <script type="text/javascript" src="<?php echo base_url();?>js/ui/divs.js"></script> 
  <script type="text/javascript" src="<?php echo base_url();?>js/functions.js">> </script> 
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/greensock/TweenMax.min.js"></script> 
<script>window.jQuery || document.write('<script src="_/js/jquery-1.9.1.min.js"><\/script>')</script> 
<script src="<?php echo base_url();?>js/jquery.superscrollorama.js"></script>
</body></html>