
<div class="container"> &nbsp;
  <div class="row-fluid acc-wizard">
    <div class="span9">
      <?php if(isset($blogs)): foreach($blogs as $blog):?>
      <div class="accordion" id="accordion-demo">
        <div class="accordion-group">
          <div class="accordion-heading">
            <h5><a class="accordion-toggle" href="<?php echo base_url(). 'blog/post/'.$blog->public_url; ?> "> <?php echo $blog->title; ?></a> </h5>
          </div>
          <div id="prerequisites" class="accordion-body collapse in">
            <div class="accordion-inner"> <span class="red"><a href=""><i class="icon-calendar"></i><?php echo $blog->date;?></a>,&nbsp; <a href=""><i class="icon-edit"></i><?php echo $blog->author;?></a>&nbsp;  <a href="<?php echo base_url(). 'blog/post/'.$blog->public_url; ?>"><i class="icon-comments"></i>Leave a Comment</a></span> <span class="clearfix"></span>
              <div class="blog-icon"> <img src="<?php echo base_url(). 'images/blog/' .trim($blog->thumbnail)?>" alt="<?php echo $blog->title?>" /></div>
              <div>
                <?php $string = strip_tags($blog->post);

if (strlen($string) > 500) {

    $stringCut = substr($string, 0, 400);
    $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...  <br />";
               
}
echo $string;?>
<br />&nbsp;
 <a class="btn btn-default pull-right" href="<?php echo base_url(). 'blog/post/'.$blog->public_url; ?>">Read More</a>
              </div>
              <span class="clearfix"></span> </div>
            <!--/.accordion-inner --> 
          </div>
          <!-- /#addwizard --> 
        </div>
        <!-- /.accordion-group --> 
      </div>
      <?php endforeach;?>
      <?php else:?>
      <h2>no records were found</h2>
      <?php endif;?>
         <?php echo $links; ?>
    </div>
<?php include('includes/right-sidebar.php')?>
 
 
  </div>
</div>
