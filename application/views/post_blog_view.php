
<div class="container"> &nbsp;
  <div class="row-fluid acc-wizard">
    <div class="span9">
      <?php if(isset($blogs)): foreach($blogs as $blog):?>
      <div class="accordion" id="accordion-demo">
        <div class="accordion-group">
          <div class="accordion-heading">
            <h5><?php echo $blog->title; ?></h5>
          </div>
          <div id="prerequisites" class="accordion-body collapse in">
            <div class="accordion-inner"> <span class="red"><?php echo $blog->date;?>, <?php echo $blog->author;?> Leave a Comment</span> <span class="clearfix"></span>
           
              <div class="blog"> <?php echo $blog->post;?> </div>
               <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'edgarsite'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
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
      <?php echo $links; ?> </div>
    <?php include('includes/right-sidebar.php')?>
  </div>
</div>
