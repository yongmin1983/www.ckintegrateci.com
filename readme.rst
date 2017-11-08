###################
What is This
###################

This is a example to show people who want to integrate CodeIgniter, CKeditor and CKfinder. And This is possible to go access CI session function from outside of CI system.

*******************
Release Information
*******************

CodeIgniter 3.1.6. This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

CKEditor 4.7.3. Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
http://ckeditor.com - See LICENSE.md for license information. CKEditor is a text editor to be used inside web pages. It's not a replacement
for desktop text editors like Word or OpenOffice, but a component to be used aspart of web applications and websites.

CKFinder 3.4.2 for PHP. CKFinder is made from two parts: the client side part and the server side connector(s).The client side part is common across all distributions (PHP and ASP.NET, Java in the future), while the server side parts are different for each language, that&#39;s why there are multiple documentation websites available.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

1, Download CodeIgniter 3.1.6, CKEditor 4.7.3, CKFinder 3.4.2.

2, Create a folder Vendors which is same folder level as application. Copy Folder "ckeditor" and "ckfinder" to vendors folder.

3, Change index.php file which is in same folder level as application and system.

    3.1: $system_path = dirname(__FILE__).'/system'; It was: $system_path = 'system'

    3.2: $application_folder = dirname(__FILE__).'/application'; It was: $application_folder = 'application'

4, CodeIgniter: application/config/autoload.php

    4.1: $autoload['helper'] = array('url', 'cookie', 'form'); // add: 'url', 'cookie', 'form'

    4.2: $autoload['libraries'] = array('session'); // add: 'session'

5, CodeIgniter: application/config/config.php

    5.1: Config base_url:
    switch($_SERVER["HTTP_HOST"]){
        case "localhost":
            $config['base_url'] = 'http://localhost/www.ckintegrateci.com/';
            break;
        default:
            $config['base_url'] = 'http://localhost/www.ckintegrateci.com/';
            break;
    }

6, CK finder: ckfinder/config.php

    6.1: Get CI Session data, check Login condition:
        switch($_SERVER["HTTP_HOST"]){
            case "localhost":
                $serverRootIndex= ($_SERVER['DOCUMENT_ROOT'].'/www.ckintegrateci.com/index.php');
                break;
        }
        ob_start();
        include($serverRootIndex);
        ob_end_clean();

        $config['authentication'] = function () {
            $CI = &get_instance(); // load CI, and use CI function to fetch and check login condition
            $CI->load->library('session');
            if($CI->session->userdata('is_user_login') && $CI->session->userdata('is_user_login') === 'administrator'){
                return TRUE;
            }
            return FALSE;
        };

    6.2 User have to login before access to base_url('vendors/ckfinder/ckfinder.html')

7, CI controller: welcome.php. Create a function and register session when user login

    7.1 Login and Session register function
        if(isset($_POST) && !empty($_POST)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($username === 'admin' && $password === 'admin'){
                $this->session->set_userdata('is_user_login', 'administrator');
                redirect('welcome');
            }else{
                $this->session->set_flashdata('msg', 'Incorrect username and password');
                $this->load->view('login');
            }
        }else{
	        $this->load->view('login');
        }
    7.2 User have to login to get CK editor page.

8, Load CK editor into page:

    8.1 JS:
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




*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.
