
<div class="container">
  <div class="row">
    <div class="span12">
    
      <?php if(isset($projects)): foreach($projects as $project):?>
      <div class="span6">
        <div class="item_slider gallery">
          <ul class="gallery-inner">
            <li class="photos"><img src="<?php echo base_url()?>img/project/project.png" width="400" height="292" /></li>
          </ul>
        </div>
      </div>
      <div class="span5 offest-1">
        <div class="item_text">
          <h3><?php echo $project->title;?></h3>
          <div class="clear"></div>
          <br/>
          <h4>Overview:</h4>
          <div class="clear"></div>
          <p><?php echo $project->overview;?> </p>
          <h4>My Contribution:</h4>
          <ul>
            <?php echo $project->contribution;?>
          </ul>
        
          <h5>Client: <span>Client name</span></h5>
 

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
   <?php 
 
   echo $links; ?>
   </div>
  </div>
</div>
</div>
