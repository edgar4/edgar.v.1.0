    <div class="span3" style="padding-left: 2em;">
   &nbsp;
  
      <ul class="wizard-sidebar">
         
        <li class="disabled">Categories</li>
        <hr class="divider" />
         <?php foreach($blogs as $blog):?>
        
        <li ><a href=""><?php echo $blog->category;?></a></li>
        <?php endforeach;?>
        <hr class="divider" />
      </ul>
       
         <div class="fb-like-box" data-href="https://www.facebook.com/SleekChrisInc" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
         
         
    </div>