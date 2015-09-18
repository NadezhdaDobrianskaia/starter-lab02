<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Simple Image Gallery</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/lightbox.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <span class="myhead">Simple Image Gallery</span>
                <span class="mynav">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </span>
            </div>
            <div class="alone"></div>
            <div id="content">
                <table cols="3" class="gallery">
                    <tr>
                        <td class="oneimage">
                            <a href="./data/Katmai_Crater_1980.jpg" data-lightbox="gallery" data-title="Katmai Crater - Mount Katmai, Alaska ... Posted 2014.05.05 by donald, in landscape"><img src="./data/thumb/Katmai_Crater_1980.jpg"/></a>
                        </td>
                        <td class="oneimage">
                            <a href="./data/Caledonian_orogeny_fold_in_King_Oscar_Fjord.jpg" data-lightbox="gallery" data-title="Caledonian orogeny fold in King Oscar Fjord ... Posted 2014.05.04 by mickey, in landscape"><img src="./data/thumb/Caledonian_orogeny_fold_in_King_Oscar_Fjord.jpg"/></a>
                        </td>
                        <td class="oneimage">
                            <a href="./data/Lands_End_Cape_Cornwall.jpg" data-lightbox="gallery" data-title="Land's End, Cape Cornwall and the Brisons ... Posted 2014.05.04 by mickey, in landscape"><img src="./data/thumb/Lands_End_Cape_Cornwall.jpg"/></a>
                        </td>
                    </tr>
                </table>
                <h1>This is just a simple image gallery :)</h1>
                <p>The images above are the three most recently posted.</p>
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2014,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
        <script type="text/javascript" src="js/lightbox.min.js"></script> 
    </body>    
<!--    
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
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
-->
</html>