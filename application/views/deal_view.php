        
 <!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal hide fade">
<div class="modal-header lead well"><small class="centre alert alert-danger">Amount Paid in advance is deductable from total project cost</small></div>
    <!-- dialog contents -->
    <div class="modal-body ">
       <?php if(isset($records)): foreach($records as $row):?>
<?php echo Form_open('checkout/pesa')?>
	<table>
		<tr>
		<td>Amount to be paid:</td>
        <td>
        <?php echo "<h5>". $row->budget /4 ."/=</h5>"; ?>
            <input type="hidden" name="amount" value="<?php echo $row->budget /4 ; ?>" placeholder="" />
               <?php echo"recomended amount Ksh ". $row->budget / 4 . "/= as per your total budget estimate of Ksh " .$row->budget ."/= " ; ?>
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
            <?php echo $row->bussinesType ?>
            <input type="hidden" name="type" value="MERCHANT" readonly="readonly" />
			
			</td>
		</tr>
		<tr>
			<td>Description:</td>
            
			<td>
            <?php echo $row->projectdetail ?>
            <input type="hidden" name="description" value="<?php echo $row->bussinesType ?>" /></td>
		</tr>
		<tr>
			<td>Reference:</td>
			<td>
            <?php echo $row->id ?>
            <input type="hidden" name="reference" value="<?php echo $row->id ?>" />
			(this is a unique Order ID )
			</td>
		</tr>
		<tr>
			<td>Client's First Name:</td>
			<td>
            <?php  echo $row->name ?>
            <input type="hidden" name="first_name" value="<?php  echo $row->name ?>" /></td>
		</tr>
		<tr>
			<td>Clients's Last Name:</td>
			<td>
            <?php echo $row->lastName ?>
            <input type="hidden" name="last_name" value="<?php echo $row->lastName ?>" /></td>
		</tr>
		<tr>
			<td>client's Email Address:</td>
			<td>
            <?php  echo $row->email ?>
            <input type="hidden" name="email" value="<?php  echo $row->email ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
            <br/>
            <input type="submit" value="Make Payment"  class="btn btn-default"/></td>
		</tr>
	</table>
     <?php endforeach;?>
      
      <?php else:?>
      <h2>we have no records of your project submission</h2>
      
      <?php endif;?>
</form>

    </div>
    <!-- dialog buttons -->
    <div class="modal-footer"><a href="#" class="btn btn-primary" data-dismiss="modal">X</a></div>
</div>
<!--end modal-->
<div class="container">
  <div class="row">
    <div class="span6">
      <p class="alert alert-info"><small> <i>your Project has been submitted and a copy sent to your email</i> <br/><p>this is a secure platform and you can make advance payment at this point <?php echo anchor('sandbox','Or  Browse My Work');?></p> </small></p>
      
      <span class="btn btn-large btn-success"><?php
	  $css= array(
	  'class'=> 'anchorone',
	  'data-toggle'=> 'modal'
	  
	  
	  );
	   echo anchor('checkout/#myModal',' Proceed to Make Advance Payment',$css)?></span>
       <br/> &nbsp; <br/> &nbsp; <br/> &nbsp; 
      <span class="">
      <?php echo anchor('sandbox',' Browse My Work');?>
      </span>
       </div>
    <div class="span6 ">
      <div class="address">
      <br/> 
      
      <div class="well">

    
         <?php if(isset($records)): foreach($records as $row):?>
         
<table class="small">
	<thead>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
        <th>Platform</th>
		<th>Bussines type</th>
		<th>Budget</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo $row->name .'  '. $row->lastName ?></td>
		<td><?php echo $row->email ?></td>
		<td><?php echo $row->phone ?></td>
        <td><?php // echo $row->platform ?></td>
		<td><?php echo $row->bussinesType ?></td>
		<td><?php echo $row->budget ?></td>
	</tr>
	</tbody>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <thead>
  <tr>
    <th>Project Description</th>
  </tr>
  </thead>
  <tbody
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php echo $row->projectdetail ?></td>
  </tr>
  </tbody>
</table>

</table>

	  <?php endforeach;?>
      
      <?php else:?>
      <h2>no records were found</h2>
      
      <?php endif;?>
</div> <!--well-->
      </div>
    </div>
  </div>
</div>
