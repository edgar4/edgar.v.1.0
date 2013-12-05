<div id="myModal" class="modal modal-open  fade">
<div class="modal-header lead well"><center>choose an image</center></div>
    <!-- dialog contents -->
    <div class="modal-body modal-content ">
    	<div id="gallery">
		<?php if (isset($images) && count($images)):
			foreach($images as $image):	?>
			<div class="thumb">
            <?php foreach($projects as $project)?>
				<a href="<?php foreach($projects as $project){echo $project->id.'?image='.
				$image['file'];} ?>">
             
					<img src="<?php echo $image['thumb_url']; ?>"  width="150" height="100"/>
				</a>				
			</div>
		<?php endforeach; else: ?>
			<div id="blank_gallery">Please Upload an Image</div>
		<?php endif; ?>
	</div>
    </div>
    <!-- dialog buttons -->
    <div class="modal-footer"><a href="#" class="btn btn-default " data-dismiss="modal">X</a></div>
</div>
<!--end modal-->
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1><small>add project</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-edit"></i> Forms</li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-6">
    <?php foreach($projects as $project):?>
      <?php
		echo form_open_multipart('admin/editProject/'.$project->id);?>
      <div class="form-group"> <span class="Error"><?php echo form_error('title');?></span>
        <label>Title</label>
        <input class="form-control" placeholder="Enter text" name="title" value="<?php echo $project->title;?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('category');?></span>
        <label>Project Url</label>
        <input class="form-control" placeholder="Enter text" name="category" value="<?php echo $project->url;?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('userfile');?></span>
        <label> current image name </label>
        <input type="text" name="image" class="form-control" value="
        <?php if(isset($_GET['image'])){echo $_GET['image'];}else{echo $project->image;}?>" />
         <br />
        <a href="#myModal" class="btn  btn-default"  data-toggle="modal"<input type="button" class="btn btn-default" value="choose image" >choose another image</a>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group"> <span class="Error"><?php echo form_error('date');?></span>
        <label>Year</label>
        <input class="form-control" placeholder="Enter text" name="date" value="<?php echo $project->year;?>"/>
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('author');?></span>
        <label>Client</label>
        <input class="form-control" placeholder="Enter text" name="author" value="<?php echo $project->client;?>">
      </div>
      <div class="form-group">
      <span class="Error"><?php echo form_error('contribution');?></span>
        <label for="disabledSelect">Contribution</label>
        <textarea class="form-control"  value="" name="contribution"  ><?php echo $project->contribution;?></textarea>
      </div>
    </div>
    <span class="clearfix"></span>
    <div class="form-group"> <span class="Error"><?php echo form_error('post');?></span>
      <label>Overview</label>
      <textarea class="form-control height" rows="25" id="elm1" name="post"  ><?php echo $project->overview;?></textarea>
    </div>
    <button type="submit" class="btn btn-default" name="upload">Post</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
    <?php 	echo form_close(); ?>
    <?php endforeach;?>
  </div>
  <!-- /.row --> 
  
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 

