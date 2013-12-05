
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1> <small>project to edit</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="icon-file-alt"></i> projects</li>
        <li>  <?php
   foreach($projects as $project){
	    if($this->uri->segment(3)==$project->id){
	  echo'<span class="Error"> '. $project->title . '  has been updated</span>';
	  
  }
   }
 
  
  ?></li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <div class="table-responsive">
    
    <table class="table table-bordered table-hover tablesorter">
      <thead>
      
        <tr>
          <th>Post action</th>
          <th>Project Title</th>
          <th>Project overview</th>
          <th>Thumbnail</th>
          <th>client</th>
        
        </tr>
      </thead>
      <tbody>
      <?php foreach($projects as $project) :?>
        <tr><td><a href="<?php echo base_url().'admin/showEdit/'. $project->id;?>">Edit</a></td>
        
          <td><?php echo $project->title;?></td>
          <td><?php echo $project->overview;?></td>
          <td><img src="<?php echo base_url().'images/'.trim($project->image);?>" width="150" height="100"/></td>
          <td><?php echo  $project->client;?></td>
          
        </tr>
        <?php endforeach;?>
      </tbody>
      
    </table>
  <?php
   foreach($projects as $project){
	    if($this->uri->segment(3)==$project->id){
	  echo'<span class="Error"> '. $project->title . '  has been updated</span>';
	  
  }
   }
 
  
  ?>
  </div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 
