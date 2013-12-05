
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
      <?php
		echo form_open_multipart('admin/addPost');?>
      <div class="form-group"> <span class="Error"><?php echo form_error('title');?></span>
        <label>Title</label>
        <input class="form-control" placeholder="Enter text" name="title" value="<?php echo set_value('title');?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('category');?></span>
        <label>Category</label>
        <input class="form-control" placeholder="Enter text" name="category" value="<?php echo set_value('category');?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('userfile');?></span>
        <label>Insert image</label>
        <input type="file" name="userfile" value="<?php echo set_value('userfile');?>"/>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group"> <span class="Error"><?php echo form_error('date');?></span>
        <label>Date</label>
        <input class="form-control" placeholder="Enter text" name="date" value="<?php echo set_value('date');?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('author');?></span>
        <label>Author</label>
        <input class="form-control" placeholder="Enter text" name="author" value="<?php echo set_value('author');?>">
      </div>
      <div class="form-group">
        <label for="disabledSelect">Public Url Segment</label>
        <input class="form-control" id="disabledInput" type="text" value=""  disabled>
      </div>
    </div>
    <span class="clearfix"></span>
    <div class="form-group"> <span class="Error"><?php echo form_error('post');?></span>
      <label>Create Post</label>
      <textarea class="form-control" rows="3" id="elm1" name="post" ><?php echo set_value('post');?></textarea>
    </div>
    <button type="submit" class="btn btn-default">Post</button>
    <button type="reset" class="btn btn-default">Reset Button</button>
    </form>
  </div>
  <!-- /.row --> 
  
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 

