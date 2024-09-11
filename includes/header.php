<?php
session_start();
require_once dirname(__DIR__).'/config/config.php';

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Administrator</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css'); ?>"/>

        <!-- bidplatform/assets -->

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('/js/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="<?php echo base_url('/css/sb-admin-2.css'); ?>" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url('/fonts/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

        <script src="<?php echo base_url('/js/jquery.min.js'); ?>" type="text/javascript"></script>

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php 
                if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true):
                    // require_once dirname(__DIR__).'/includes/navbar.php';        
                endif;
            ?>
            <!-- The End of the Header -->