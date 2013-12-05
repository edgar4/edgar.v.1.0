<?php
$this->load->view('admin/template/header_admin');

$this->load->view('admin/template/nav');

$this->load->view('admin/'.$contents);



$this->load->view('admin/template/admin_footer');


?>