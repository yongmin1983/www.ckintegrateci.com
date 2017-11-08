<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
        <?php echo form_open_multipart('contentUpload', 'id="" class=""');?>
        <textarea title="" name="newsContent" id="newsContent" rows="10" cols="80" style="visibility: hidden;">

        </textarea>

        <input title="" class="" type="submit" value="upload">
        <?php echo form_close(); ?>

        <div style="clear:both;"></div>
        <div style="margin-top: 30px;"></div>
        <?php echo "<div>\$_SESSION['is_user_login'] = ".$this->session->userdata('is_user_login').'</div>'; ?>
        <div><a href="<?php echo base_url('index.php/welcome/logout'); ?>"><button>Log Out</button></a></div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<!-- CK editor -->
<script type="text/javascript" src="<?php echo base_url('vendors/ckeditor/ckeditor.js'); ?>"></script>
<!-- CK finder -->
<script type="text/javascript" src="<?php echo base_url('vendors/ckfinder/ckfinder.js'); ?>"></script>
<script>
    var editor = CKEDITOR.replace( 'newsContent', {
        height:500,
        removePlugins : 'resize',
        filebrowserBrowseUrl        : '<?php echo base_url('vendors/ckfinder/ckfinder.html'); ?>',
        filebrowserImageBrowseUrl   : '<?php echo base_url('vendors/ckfinder/ckfinder.html?type=Images'); ?>',
        filebrowserFlashBrowseUrl   : '<?php echo base_url('vendors/ckfinder/ckfinder.html?type=Flash'); ?>',
        filebrowserUploadUrl        : '<?php echo base_url('vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'); ?>',
        filebrowserImageUploadUrl   : '<?php echo base_url('vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'); ?>',
        filebrowserFlashUploadUrl   : '<?php echo base_url('vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'); ?>'
    });
    CKFinder.setupCKEditor( editor, '../' );
</script>

</body>
</html>