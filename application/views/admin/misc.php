
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1><small>new post</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-edit"></i> Forms</li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  
  <div class="row">
    <div class="col-lg-6">
	<div id="gallery2">
		<?php if (isset($images) && count($images)):
			foreach($images as $image):	?>
			<div class="thumb2">
				<a href="<?php echo $image['url']; ?>">
					<img src="<?php echo $image['thumb_url']; ?>" />
				</a>				
			</div>
		<?php endforeach; else: ?>
			<div id="blank_gallery">Please Upload an Image</div>
		<?php endif; ?>
	</div>
	
	<div id="upload2">
		<?php
		echo form_open_multipart('gallery');
		echo form_upload('userfile');
		echo form_submit('upload', 'Upload');
		echo form_close();
		?>		
	</div>


  </div>
  <!-- /.row --> 
  
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 

