<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lembaga Pendidikan Pilar Nusantara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(''); ?>style/img/identitas/logosd.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/about.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/card-hover.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/wave.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/program.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/card-light.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/card-slider.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>style/css/cards-sliders.css">
    <link href="<?php echo base_url() . 'theme/css/dataTables.bootstrap4.min.css' ?>" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>


<body >

<!-- oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" -->
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <?php $this->load->view('theme/header'); ?>
            <?php $this->load->view('theme/navigation'); ?>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->

    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <?php $this->load->view($main_view); ?>
    <!-- recent_news_area_end  -->

    <!-- footer start -->
    <?php $this->load->view('theme/footer'); ?>