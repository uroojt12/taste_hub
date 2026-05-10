<?php

$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);



if ($_SERVER['HTTP_HOST'] != 'localhost') {



    $baseurl = "http://herosolutions.com.pk/urooj/taste_hub/";
} else {



    $baseurl = "http://localhost/taste_hub/";
}



?>







<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="title" content="Taste_Hub">

<meta name="description" content="Taste_Hub">

<meta property="og:type" content="website">

<meta property="og:url" content="<?= $baseurl ?>">

<meta property="og:title" content="Taste_Hub">

<meta property="og:description" content="Taste_Hub">

<meta property="og:image" content="<?= $baseurl ?>images/logo.png">

<meta property="twitter:card" content="thumbnail">

<meta property="twitter:url" content="<?= $baseurl ?>">

<meta property="twitter:title" content="Taste_Hub">

<meta property="twitter:description" content="Taste_Hub">

<meta property="twitter:image" content="<?= $baseurl ?>images/logo.png">

<!-- Css files -->



<!-- Bootstrap Css -->



<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/bootstrap.css">



<!-- commonCss Css -->


<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/all.css">
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/owl.carousel.min.css">
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/owl.theme.default.min.css">
<!-- Main Css -->


<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/App.css">
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/style.css?v-0.2">



<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/responsive.css">