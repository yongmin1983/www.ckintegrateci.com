###################
What is This
###################

This is a example to show people who want to integrate CodeIgniter, CKeditor and CKfinder.

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
