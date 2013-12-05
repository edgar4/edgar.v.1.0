<!DOCTYPE html>
<?php header('Content-type: text/html; charset=utf-8');?>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php if(isset($meta)) foreach($meta as $meta_item):?>
<title><?php echo $meta_item->title;?></title>
<meta name="description" content="<?php echo $meta_item->description;?>"/>
<meta name="keywords" content="<?php echo $meta_item->keywords;?>" />
<?php endforeach?>
<meta name="robots" content="index,follow" />
<meta name="author" lang="en" content="Edgar Chris" />
<meta name="copyright" content="© edgarchris" />
<link rel="shortcut icon" href="<?php echo base_url();?>/img/favicon.ico"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" />
<link rel="stylesheet" href="<?php echo base_url();?>js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/project.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/fontawesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-extension.css" />
<link rel="stylesheet" href="<?php echo base_url();?>js/touchTouch/assets/touchTouch/touchTouch.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/flat.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700|Lato:100,300,400"/>
<link rel="author" href="https://plus.google.com/u/0/+edgarchris"/>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-validate/style.css"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tinymce/tinymce.min.js"></script>
<!--[if lte IE 6]>  
<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">  
<![endif]-->  
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
 <!--[if lt IE 9]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
