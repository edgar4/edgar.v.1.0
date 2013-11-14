<?php $callback_url_ed = base_url()."shop/update"; ?>

<div class="container">
  <div class="row">
    <div class="span6">
      <h4 class="lead"></h4>
      <?php if ($cart = $this->cart->contents()): ?>
      <?php
include_once('OAuth.php');
//pesapal params
$token = $params = NULL;
/*
PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your developement and 
when you are ready to go live change to https://www.pesapal.com.
*/
$consumer_key = 'S6SilOFxP4mU5WVoM7o6zqASte05bT9l';//Register a merchant account on
                   //demo.pesapal.com and use the merchant key for testing.
                   //When you are ready to go live make sure you change the key to the live account
                   //registered on www.pesapal.com!
$consumer_secret = '4uqUNOkZRcfGVwiFzVX7Tj/hVKU=';// Use the secret from your test
                   //account on demo.pesapal.com. When you are ready to go live make sure you 
                   //change the secret to the live account registered on www.pesapal.com!
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'http://demo.pesapal.com/api/PostPesapalDirectOrderV4';//change to      
                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

//get form details
$amount = $this->cart->total();
$amount = number_format($amount, 2);//format amount to 2 decimal places
foreach ($cart as $item){
$desc = $item['name'];

$type = 'merchant'; //default value = MERCHANT
$reference = $item['rowid'];
}       //unique order id of the transaction, generated by merchant
$first_name = $_POST['name'];
$last_name = $_POST['last'];
$email = $_POST['email'];
$phonenumber = $_POST['email'];//ONE of email or phonenumber is required

$callback_url =$callback_url_ed;  //redirect url, the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//display pesapal - iframe and pass iframe_src
?>
      <iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
      <p>Browser unable to load iFrame</p>
      </iframe>
    </div>
    <div class="span6 ">
      <div class="address">
        <h4 class="lead"><small>Your details of payment are has below </small></h4>
        <div class="well">
          <div id="cart">
            <table>
              <caption>
              <?php echo $_POST['name'] .'  Please pay for this items';?>
              </caption>
              <thead>
                <tr>
                  <th>Item Name</th>
                  <th>Option</th>
                  <th>Price</th>
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
              </tr>
              <?php endforeach; ?>
              <tr class="total">
                <td colspan="2"><strong>Total</strong></td>
                <td>$<?php echo $this->cart->total(); ?></td>
              </tr>
            </table>
          </div>
          <?php else:?>
         <h2>Ouch!!!! nothing to see here</h2>
          <?php endif; ?>
        </div>
        <!--well--> 
  
      </div>
    </div>
    
  </div>
</div>