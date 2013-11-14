<!-- set up the modal to start hidden and fade in and out -->

<div id="myModal" class="modal hide fade">

<div class="modal-header lead well">
<a href="#" class="btn " data-dismiss="modal">X</a>
</div>
<!-- dialog contents -->
<div class="modal-body ">
<?php if ($cart = $this->cart->contents()): ?>
<div class="text-head-shop">
<?php
              $attributes = array('class' => 'form SignupForm ', 'id' => 'contact-form');
							echo Form_open('shop/checkout',$attributes);
							?>
<fieldset>
  <legend>Confirm Purchase</legend>
  <table>
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Option</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <?php foreach ($cart as $item): ?>
    <tr>
      <td><?php echo $item['name']; ?></td>
      <td><?php if ($this->cart->has_options($item['rowid'])) {
						foreach ($this->cart->product_options($item['rowid']) as $option => $value) {
							echo $option . ": <em>" . $value . "</em>";
						}
						
					} ?></td>
      <td>$<?php echo $item['subtotal']; ?></td>
      <td class="remove"><?php echo anchor('shop/remove/'.$item['rowid'],'X'); ?></td>
    </tr>
    <?php endforeach; ?>
    <tr class="total">
      <td colspan="2"><strong>Total</strong></td>
      <td>$<?php echo $this->cart->total(); ?></td>
    </tr>
  </table>
  <br/>
  &nbsp;<br/>
  &nbsp;
</fieldset>
<fieldset>
  <legend>Enter your details</legend>
  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('name'). "</div>";?>
    <div class="controls">
      <label class="control-label" for="name">First Name:</label>
      <?php
                        $name = array(
              'name'        => 'name',
              'id'          => 'name',
              'placeholder'   => 'enter your full name',
              'class'        => 'span3',
              'type'       => 'text',
			  'value'=> set_value('name'));
							echo form_input($name);
							?>
    </div>
  </div>
   <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('name'). "</div>";?>
    <div class="controls">
      <label class="control-label" for="name">Last Name:</label>
      <?php
                        $name = array(
              'name'        => 'last',
              'id'          => 'name',
              'placeholder'   => 'enter your last name',
              'class'        => 'span3',
              'type'       => 'text',
			  'value'=> set_value('name'));
							echo form_input($name);
							?>
    </div>
  </div>
  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('email'). "</div>";?>
    <div class="controls">
      <label class="control-label" for="email">Email:</label>
      <?php
                        $email = array(
              'name'        => 'email',
              'id'          => 'email',
              'placeholder'   => 'put your Email address here',
              'class'        => 'span3',
              'type'       => 'text',
			  'value'=> set_value('email')
            );
							
							
							echo form_input($email);
							
							?>
                            
    </div>
  </div>
  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('phone'). "</div>";?>
    <div class="controls">
      <label class="control-label" for="phone">Phone:</label>
      <?php
                        $phone = array(
              'name'        => 'phone',
              'id'          => 'phone',
              'placeholder'   => 'phone is a fast way to reach you ,whats your number?',
              'class'        => 'span3',
              'type'       => 'text',
			  'value'=> set_value('phone')
			  
            );
							
							
							echo form_input($phone);
							?>
    </div>
  </div>
  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('city'). "</div>";?>
    <div class="controls">
      <label class="control-label" for="city">City</label>
      <?php
                        $city = array(
              'name'        => 'city',
              'id'          => 'city',
              'placeholder'   => 'your current region of work/ residence',
              'class'        => 'span3',
              'type'       => 'text',
			  'value'=> set_value('city')
            );
							
							
							echo form_input($city);
							
							?>
    </div>
  </div>
</fieldset>
<fieldset>
<?php foreach ($cart as $item): ?>
  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('email'). "</div>";?>
    <div class="controls">
      <label class="control-label" for="email">Email:</label>
      <?php
                        $rowid = array(
              'name'        => 'row_id',
              'id'          => 'email',
              'placeholder'   => 'put your Email address here',
              'class'        => 'span3',
              'type'       => 'hidden',
			  'value'=> $item['rowid']
            );
							
							
							echo form_input($rowid);
							
							?>
                           <?php endforeach;?>
    </div>
  </div>
  <legend>Thats it we are done !!</legend>
  <div class="control-group">
  <div class="controls">
</fieldset>
<br/>
&nbsp;<br/>
&nbsp;
<center>
<input id="SaveAccount" type="submit" value="Proceed to pay " class="btn btn-large btn-success " />
<form>
<?php endif; ?>
</div>
</div>
<!-- dialog buttons -->
<div class="modal-footer"></div>
</div>
<!--end modal-->

<div class="vspace40">
<div class="container">
<div class="row">
<div class="span9">
  <div class="hero-unit btn-info">
    <h2 class="">Site Templates and Themes </h2>
    <p class="">Browse by Category</p>
    <p><a href="#" class="btn btn-default btn-large">Themes »</a> <a href="#" class="btn btn-default btn-large">Plugins»</a> <a href="#" class="btn btn-default btn-large">Apps »</a> </p>
  </div>
  <ul class="thumbnails">
    <?php foreach ($products as $product): ?>
    <li class="span3"> <?php echo form_open('shop/add'); ?>
      <div class="thumbnail"><?php echo img(array(
				'src' => 'img/shop/' . $product->image,
				'class' => 'thumb',
				'alt' => $product->name
			)); ?>
        <div class="caption">
          <h5><?php echo $product->name; ?></h5>
          <p>Ksh <?php echo $product->price; ?></p>
          <?php if ($product->option_name): ?>
          <?php echo form_label($product->option_name, 'option_'. $product->id); ?> <?php echo form_dropdown(
						$product->option_name,
						$product->option_value,
						NULL,
						'id="option_'. $product->id.'"'
					); ?>
          <?php endif; ?>
          <a class="btn btn-info" href="#">View</a>
          <?php $attr= array('class'=> 'btn btn-danger'); echo form_submit($attr,'Add to Cart'); ?>
        </div>
      </div>
      <?php echo form_hidden('id', $product->id); ?> <?php echo form_close(); ?> </li>
    <?php endforeach; ?>
  </ul>
  <div class="pagination">
    <ul>
      <li class"disabled"><span>Prev</span></li>
      <li class"disabled"><span>1</span></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </div>
</div>
<div class="span3">
<?php if ($cart = $this->cart->contents()): ?>
<div class="well">
  <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-shopping-cart"></i> Total cost - $<?php echo $this->cart->total(); ?> <b class="caret"></b></a> </a>
    <div class="dropdown-menu well" role="menu" aria-labelledby="dLabel">
      <table>
        <caption>
        Shopping Cart
        </caption>
        <thead>
          <tr>
            <th>Item Name</th>
            <th>Option</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <?php foreach ($cart as $item): ?>
        <tr>
          <td><?php echo $item['name']; ?></td>
          <td><?php if ($this->cart->has_options($item['rowid'])) {
						foreach ($this->cart->product_options($item['rowid']) as $option => $value) {
							echo $option . ": <em>" . $value . "</em>";
						}
						
					} ?></td>
          <td>$<?php echo $item['subtotal']; ?></td>
          <td class="remove"><?php echo anchor('shop/remove/'.$item['rowid'],'X'); ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="total">
          <td colspan="2"><strong>Total</strong></td>
          <td>$<?php echo $this->cart->total(); ?></td>
        </tr>
      </table>
      &nbsp;
      <center>
        <a href="#myModal" class="btn  btn-primary"  data-toggle="modal">Checkout</a>
      </center>
    </div>
    &nbsp; </div>
</div>
<div class="well">
<form class="form login-form">
  <h2>Sign in</h2>
  <div>
    <label>Username</label>
    <input id="Username" name="Username" type="text" />
    <label>Password</label>
    <input id="Password" name="Password" type="password" />
    <label class="checkbox inline">
      <input type="checkbox" id="RememberMe" value="option1">
      Remember me </label>
    <br />
    <br />
    <button type="submit" class="btn btn-info">Login</button>
  </div>
  <br />
  <a href="grid7a.html">register</a>&nbsp;&#124;&nbsp;<a href="#">forgot password?</a>
</form>
</div>
</div>
</div>
<?php else:?>
<div class="well">
  <ul class="nav nav-list">
    <li class="nav-header">Sidebar</li>
    <li class="active"> <a href="#">Link</a> </li>
    <li> <a href="#">Link</a> </li>
    <li> <a href="#">Link</a> </li>
    <li class="nav-header">Sidebar</li>
    <li> <a href="#">Link</a> </li>
    <li> <a href="#">Link</a> </li>
    <li> <a href="#">Link</a> </li>
    <li class="nav-header">Sidebar</li>
    <li> <a href="#">Link</a> </li>
    <li> <a href="#">Link</a> </li>
    <li> <a href="#">Link</a> </li>
  </ul>
</div>
<div class="well">
  <form class="form login-form">
    <h2>Sign in</h2>
    <div>
      <label>Username</label>
      <input id="Username" name="Username" type="text" />
      <label>Password</label>
      <input id="Password" name="Password" type="password" />
      <label class="checkbox inline">
        <input type="checkbox" id="RememberMe" value="option1">
        Remember me </label>
      <br />
      <br />
      <button type="submit" class="btn btn-success">Login</button>
    </div>
    <br />
    <a href="grid7a.html">register</a>&nbsp;&#124;&nbsp;<a href="#">forgot password?</a>
  </form>
</div>
</div>
<?php endif; ?>
</div>
</div>
</div>
