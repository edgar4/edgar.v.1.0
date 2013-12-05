
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
      <?php
		echo form_open_multipart('admin/do_upload');?>
      <div class="form-group"> <span class="Error"><?php echo form_error('title');?></span>
        <label>Title</label>
        <input class="form-control" placeholder="Enter text" name="title" value="<?php echo set_value('title');?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('category');?></span>
        <label>Project Url</label>
        <input class="form-control" placeholder="Enter text" name="category" value="<?php echo set_value('category');?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('userfile');?></span>
        <label>Insert image</label>
  <input type="file" name="userfile" value="<?php echo set_value('userfile');?>"/>
  
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group"> <span class="Error"><?php echo form_error('date');?></span>
        <label>Year</label>
        <input class="form-control" placeholder="Enter text" name="date" value="<?php echo set_value('date');?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('author');?></span>
        <label>Clent</label>
        <input class="form-control" placeholder="Enter text" name="author" value="<?php echo set_value('author');?>">
      </div>
      <div class="form-group">
      <span class="Error"><?php echo form_error('contribution');?></span>
        <label for="disabledSelect">Contribution</label>
        <textarea class="form-control"  value="<?php echo set_value('author');?>" name="contribution"  ></textarea>
      </div>
    </div>
    <span class="clearfix"></span>
    <div class="form-group"> <span class="Error"><?php echo form_error('post');?></span>
      <label>Overview</label>
      <textarea class="form-control height" rows="25" id="elm1" name="post"  ><?php echo set_value('post');?></textarea>
    </div>
    <button type="submit" class="btn btn-default" name="upload">Post</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
    <?php 	echo form_close(); ?>
  </div>
  <!-- /.row --> 
  
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 

