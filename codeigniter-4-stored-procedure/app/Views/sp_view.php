<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
        <title>CodeIgniter 4 MySQL Stored Procedure Example</title>

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
            <h1>CodeIgniter Stored Procedure Example</h1>

            <div id="body">
                <?php
					if(isset($errors)):
				?>
					<ul style="list-style: none; color: red;">
						<?php foreach ($errors as $error) : ?>
						<li><?= esc($error) ?></li>
						<?php endforeach ?>
					</ul>
				<?php
					endif;
				?>
				
				<?php
					if(isset($success)):
				?>
					<ul style="list-style: none; color: green;">
						<li><?= esc($success) ?></li>
					</ul>
				<?php
					endif;
				?>

                <?= form_open('UserController') ?>

                <h5>Full Name</h5>
                <input type="text" name="name" value="" size="50" />

                <h5>Email Address</h5>
                <input type="text" name="email" value="" size="50" />

                <h5>Phone No.</h5>
                <input type="text" name="phone" value="" size="30" />

                <h5>Contact Address</h5>
                <textarea name="address" rows="5" cols="50"></textarea>

                <p><input type="submit" name="submit" value="Submit"/></p>
                
                <?php echo form_close(); ?>
            </div>

        </div>

    </body>
</html>