
	
	<div class="container">


   <?php if(isset($records)): foreach($records as $row):?>
      <?php  foreach ($row as $item) echo "<h2>".$item->email."</h2>"?>
        <?php  foreach ($row as $item) echo "<h2>".$item->lastname."</h2>"?>
          <?php  foreach ($row as $item) echo "<h2>".$item->name."</h2>"?>
         
    
	  <?php endforeach;?>
      
      <?php else:?>
      <h2>no records were found</h2>
      
      <?php endif;?>
	</div>

