
<div class="container">
  <div class="row">
    <div class="span12">
    
      <?php if(isset($projects)): foreach($projects as $project):?>
      <div class="span7">
      &nbsp;
      <div class="browser">
      <div class="browser-top">
<a href="<?php echo $project->url;?>"><?php echo $project->url;?></a>
</div>
        
        <img src="<?php echo base_url().'images/'.$project->image;?>" width="732" height="562" />
    </div>
      </div>
      <div class="span4 offest-1">
        <div class="item_text">
          <h3><?php echo $project->title;?></h3>
          <div class="clear"></div>
          <br/>
          <h6>Overview:</h6>
          <div class="clear"></div>
          <p><?php echo $project->overview;?> </p>
          <h6>My Contribution:</h6>
          <ul>
            <?php echo $project->contribution;?>
          </ul>
        
          <h6>Client: <span>Client name</span></h6>
 

						<div class="isotope-actions">
							<a href="#"><i class="icon-eye-open"></i><br />View</a>
						</div>
						<div class="isotope-actions">
							<a href="#"><i class="icon-calendar"></i><br />Dates</a>
						</div>
						<div class="isotope-actions"v>
							<a href="#"><i class="icon-info-sign"></i><br />Info</a>
						</div>
                        <div class="divider"></div>
          <div class="close_item_info">&nbsp;</div>
        </div>
      </div>
      <!-- end div #iit_2 --> 
  
    <?php endforeach;?>
    <?php else:?>
    <h2>no records were found</h2>
    <?php endif;?>
    <span class="clearfix"></span>
   <div class="row">
   &nbsp;
   <?php 
 
   echo $links; ?>
   </div>
  </div>
</div>
</div>
