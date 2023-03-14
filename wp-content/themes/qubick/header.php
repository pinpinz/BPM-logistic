<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- <title>
        <?php 
            // if(isset($page_title)){
            //     echo $page_title;
            // }
        ?>
        [PAGE TITILE]
    </title> -->

    <?php wp_head(); ?>

    <style>

                @font-face {
        font-family: 'Brandon';
        src: url(<?php echo get_stylesheet_directory_uri(); ?>/font/regular.otf) format('truetype');
        font-weight: normal;
        font-style: normal;
        }

        body,h1,h2,p {
        font-family: 'Brandon';
        }
    </style>
    
</head>
    <body class="realtive">

        <?php include 'navbar.php';?>
    

        <div class="site-content relative px-10 " style="max-width: 100vw; overflow-x: hidden">

        