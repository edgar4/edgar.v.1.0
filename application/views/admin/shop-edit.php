
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1> <small>product to edit</small></h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>admin"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="icon-file-alt"></i>shop</li>
        <li>  <?php if(isset($products)):foreach($products as $product){
	    if($this->uri->segment(3)==$product->id){
	  echo'<span class="Error"> '. $product->name . '  modified</span>';
	  
  }
   }
 
  
  ?>
  </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <div class="table-responsive">
    <ul>
    <?php foreach($products as $product):?>
    <li>
    <div class="image"><?php echo img(array(
				'src' => trim('images/shop/'.$product->image,' '),
				'alt' => $product->name,
				'height' => 200,
				'width' => 295,
			)); ?></div>
            &nbsp;
            <div class="name">
            <?php echo $product->name;?>
            </div>
            &nbsp;
     <div class="buttons"><a href="<?php echo base_url().'admin/selectedProduct/'. $product->id;?>" class="btn btn-default">Edit</a>&nbsp;<a href="<?php echo base_url().'admin/shopDelete/'. $product->id;?>" class="btn btn-danger">delete</a></div>
   </li>
   <?php endforeach;?>
    </ul>
    <?php else:?>
    <h1>nothing to edit</h1>
    <?php endif?>

 
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper --> 
