<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
    <style>
    </style>
</head>
<body>


<div class="col-lg-12">
    <?php echo form_open_multipart('welcome/login', 'id="loginForm" class="loginForm" role="form"'); ?>
    <div class="form-group">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
    </div>
    <?php
        if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
        }
    ?>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="login">
            </div>
        </div>
    <?php echo form_close(); ?>
</div>

</body>
</html>