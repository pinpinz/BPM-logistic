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

        .zoom-out {
  animation: zoom-out 1s;
}

@keyframes zoom-out {
  from {
    transform: scale(0.9);
  }
  to {
    transform: scale(1);
  }
}

nav ul li a.active {
  border-bottom: 1px solid #ffff;
}

.slideshow {

}

.slideshow li {
  opacity: 0;
  animation-name: slide;
  animation-duration: 5s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

.slideshow li:nth-child(1) {
  animation-delay: 0s;
}

.slideshow li:nth-child(2) {
  animation-delay: 1s;
}

.slideshow li:nth-child(3) {
  animation-delay: 2s;
}

.slideshow li:nth-child(4) {
  animation-delay: 3s;
}

.slideshow li:nth-child(5) {
  animation-delay: 4s;
}

.slideshow li:nth-child(6) {
  animation-delay: 5s;
}




@keyframes slide {
  0% {
    opacity: 0;
  } 
  100% {
    opacity: 1;
  }
}


/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}


/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
}

 /* Mengubah tampilan radio button yang dipilih */
    .custom-radio
    {
      opacity: 0;
    }
    .custom-radio:checked + .checkmark {
      background-color: #fdce28;
    }

    /* Menambahkan gaya kustom pada radio button */
    .checkmark {
      display: inline-block;
      width: 15px;
      height: 15px;
      background-color: #fff;
      border: 1px solid #999;
      border-radius: 50%;
      transition: background-color 0.3s ease;
    }

    </style>
    
</head>
    <body class="realtive ">

        <?php include 'navbar.php';?>
    

        <div class="site-content relative px-0 " style="max-width: 100vw; overflow-x: hidden">

        