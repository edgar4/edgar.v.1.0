
<div class="container">
  <div class="row">
    <div class="span6">
      <div id="main ">
         <?php
              $attributes = array('class' => 'form SignupForm ', 'id' => 'contact-form');
							
							
							echo Form_open('edgar/descProject',$attributes);
						
	
							?>
          <fieldset>
            <legend>tell me about your self</legend>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('name'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="name">Name:</label>
                <?php
                        $name = array(
              'name'        => 'name','name'        => 'name',
              'id'          => 'name',
              'placeholder'   => 'i love to know your name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('name'));
							
							
							echo form_input($name);
							
							?>
              </div>
            </div>
                    <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('last'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="name">Last Name:</label>
                <?php
                        $last = array(
              'name'        => 'last',
              'id'          => 'name',
              'placeholder'   => 'type your last name here',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('last'));
							
							
							echo form_input($last);
							
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
              'class'        => 'span6',
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
              'class'        => 'span6',
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
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('city')
            );
							
							
							echo form_input($city);
							
							?>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>Ok so whats the project about </legend>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('aim'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="aim">main aim of project </label>
                <?php
                        $aim = array(
              'name'        => 'aim',
              'id'          => 'name',
              'placeholder'   => 'aim of project',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('aim'));
							
							
							echo form_input($aim);
							
							?>
              </div>
            </div>
         
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('target'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="target">Target audience(s) </label>
                <?php
                        $target = array(
              'name'        => 'target',
              'id'          => 'phone',
              'placeholder'   => 'target audience ',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('target')
			  
            );
							
							
							echo form_input($target);
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('message'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="message">whats the project about in detail</label>
                <?php
                        $message = array(
              'name'        => 'message',
              'id'          => 'email',
              'placeholder'   => 'this is where you tell me all about the project',
              'class'        => 'span6',
              'rows'       => '6',
			  'value'=> set_value('message')
            );
							
							
							echo form_textarea($message);
							
							?>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>pick a budget </legend>
            <label for="type of business">Type of business</label>
            <select id="typeofbusiness" name="bussinessType">
              <option value="bussines">Bussines</option>
              <option value="technology">Technology</option>
              <option value="food">Food</option>
              <option value="finance">Finance</option>
              <option value="beauty">Beauty</option>
              <option value="other">Other</option>
            </select>
          <!--  <label for="platform">What type of platform do you want?</label>
            <select id="platform" name="platform">
              <option value="null">I dont know about Platforms</option>
              <option value="cms">CMS Capable </option>
              <option value="static">Static</option>
              <option value="custom">Custom platform</option>
            </select>-->
            
              <label for="budget">Pick a Package </label>
<ol id="selectable">
<?php echo"<div class=\"error\">".  form_error('budget'). "</div>";?>

	<li class="ui-widget-content"><input type="radio" name="budget" id="radio1" value="15000"/> Star Starter Pack </li>
	<li class="ui-widget-content"><input type="radio" name="budget" id="radio2" value="25000"/> Starndard Pack</li>
	<li class="ui-widget-content"><input type="radio" name="budget" id="radio3" value="35000"/> Pro Biz Pack  </li>
	<li class="ui-widget-content"><input type="radio" name="budget" id="radio4" value="45000"/> Golden Star Pack</li>
	<li class="ui-widget-content"><input type="radio" name="budget" id="radio5" value="65000"/></li>

</ol>
           
          
            
        
          </fieldset>
          <fieldset>
            <legend>Thats it we are done !!</legend>
             <div class="control-group">

        <label for="message-long">Click on the big Green Button !!!</label>
  
        <div class="controls">
  
        </div>
      </div>
          </fieldset>
          <input id="SaveAccount" type="submit" value="Submit project " class="btn btn-large btn-success pull-right" />
        
      </div>
    </div>
    <div class="span5 offset1">
      <div class="address">
        <div class="pad">
        
          <p id="feedback">
<span id="select-result"><legend>Your Project will be handled with the Best</legend></span>
</p>

        </div>
        <div class="social">
     <?php echo"<div class=\"error\">".  form_error(). "</div>";?>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
