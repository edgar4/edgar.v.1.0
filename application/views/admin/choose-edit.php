
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1> <small>choose article to edit</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="icon-file-alt"></i>     <?php
   foreach($posts as $post){
	    if($this->uri->segment(3)==$post->id){
	  echo'<span class="Error"> '. $post->title . '  has been updated</span>';
	  
  }
   }
 
  
  ?> </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover tablesorter">
      <thead>
        <tr>
          <th>Post action</th>
          <th>Post Title</th>
          <th>Post Author</th>
          <th>Description</th>
          <th>public url</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($posts as $post) :?>
        <tr>
          <td><a href="<?php echo base_url().'admin/update/'. $post->id;?>">Edit</a></td>
          <td><?php echo $post->title;?></td>
          <td><?php echo $post->author;?></td>
          <td><?php $string = strip_tags($post->post);

if (strlen($string) > 500) {

    $stringCut = substr($string, 0, 50);
    $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...  <br />";
               
}
echo $string;?></td>
          <td><a href="<?php echo base_url().'blog/post/'. $post->public_url;?>" target="_blank">View post publicly</a></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>

  </div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 
