<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edgar Chris | Code is my religion</title>

<!-- Included Bootstrap CSS Files -->
<link rel="stylesheet" href="<?php echo base_url();?>js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>js/bootstrap/css/bootstrap-responsive.min.css" />

<!-- Includes FontAwesome -->
<link rel="stylesheet" href="<?php echo base_url();?>css/fontawesome/css/font-awesome.css" />

<!-- Included Bootstrap Customization CSS Files -->
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-extension.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/carousel-custom-01.css" />
<link rel="stylesheet" href="<?php echo base_url();?>js/touchTouch/assets/touchTouch/touchTouch.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" />
<link href="<?php echo base_url();?>css/acc-wizard.min.css" rel="stylesheet">
<!-- Included Isotope CSS  basic file -->	
	<link rel="stylesheet" href="<?php echo base_url();?>css/isotope.css" />
<script src="<?php echo base_url();?>js/jquery-validate/style.css"></script>
  <script src="<?php echo base_url();?>js/cdn-js.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url();?>js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    
    height: 300,
	paste_data_images: true,
	paste_as_text: true,
	  plugins: "save",
    toolbar: "save",
    save_enablewhendirty: true,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 });
</script>
</head>