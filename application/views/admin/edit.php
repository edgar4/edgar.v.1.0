<div id="myModal" class="modal modal-open  fade">
  <div class="modal-header lead well">
    <center>
      choose an image
    </center>
  </div>
  <!-- dialog contents -->
  <div class="modal-body modal-content ">
    <div id="gallery">
      <?php if (isset($images) && count($images)):
			foreach($images as $image):	?>
      <div class="thumb">
        <?php foreach($posts as $post)?>
        <a href="<?php foreach($posts as $post){echo $post->id.'?image='.
				$image['file'];} ?>"> <img src="<?php echo $image['thumb_url']; ?>"  width="150" height="100"/> </a> </div>
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
      <?php foreach($posts as $post):?>
<?php echo form_open_multipart('admin/updated/'.$post->id);?>
    
      <div class="form-group"> <span class="Error"><?php echo form_error('title');?></span>
        <label>Title</label>
        <input class="form-control" placeholder="Enter text" name="title" value="<?php echo $post->title;?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('category');?></span>
        <label>Category</label>
        <input class="form-control" placeholder="Enter text" name="category" value="<?php echo  $post->category;?>">
      </div>
      <div class="form-group"> <span class="Error"><?php echo form_error('thumbnail');?></span>
        <label>Insert image</label>
       <input type="text" name="image" class="form-control" value="
        <?php if(isset($_GET['image'])){echo trim($_GET['image'], ' ');}else{echo trim($post->image);}?>" />
        <br />
        <a href="#myModal" class="btn  btn-default"  data-toggle="modal"
        <input type="button" class="btn btn-default" value="choose image" >
        choose another image</a>
      </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group"> <span class="Error"><?php echo form_error('date');?></span>
          <label>Date</label>
          <input class="form-control" placeholder="Enter text" name="date" value="<?php echo  $post->date;?>">
        </div>
        <div class="form-group"> <span class="Error"><?php echo form_error('author');?></span>
          <label>Author</label>
          <input class="form-control" placeholder="Enter text" name="author" value="<?php echo  $post->author;?>">
        </div>
        <div class="form-group">
          <label for="disabledSelect">Public Url Segment</label>
          <input class="form-control" id="disabledInput" type="text" value="<?php echo base_url().'blog/post/'.$post->public_url;?>"  disabled>
        </div>
      </div>
      <span class="clearfix"></span>
      <div class="form-group"> <span class="Error"><?php echo form_error('post');?></span>
        <label>Create Post</label>
        <textarea class="form-control" rows="3" id="elm1" name="post" ><?php echo  $post->post;?></textarea>
        <?php endforeach;?>
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

