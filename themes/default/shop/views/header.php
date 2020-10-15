<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?= $page_title; ?></title>
        <meta name="description" content="<?= $page_desc; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?= $assets; ?>images/favicon.png">

        <link href="<?= $assets; ?>css/animate.css" rel="stylesheet">

        <link href="<?= $assets; ?>css/slick.css" rel="stylesheet">

        <link href="<?= $assets; ?>css/LineIcons.css" rel="stylesheet">

        <link href="<?= $assets; ?>css/bootstrap.min.css" rel="stylesheet">

        <link href="<?= $assets; ?>css/default.css" rel="stylesheet">

        <link href="<?= $assets; ?>css/style.css" rel="stylesheet">

        <meta property="og:url" content="<?= isset($product) && !empty($product) ? site_url('product/' . $product->slug) : site_url(); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $page_title; ?>" />
        <meta property="og:description" content="<?= $page_desc; ?>" />
        <meta property="og:image" content="<?= isset($product) && !empty($product) ? base_url('assets/uploads/' . $product->image) : base_url('assets/uploads/logos/' . $shop_settings->logo); ?>" />
    </head>
    <body>
        <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
          <![endif]-->
        <section class="header_area">
            <div class="header_navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="index.html">
                                    <img src="<?= $assets; ?>images/logo.svg" alt="Logo">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="page-scroll" href="#home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#about">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#gallery">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#menu">Menu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#upcoming">Updates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div> 
                            </nav> 
                        </div>
                    </div> 
                </div> 
            </div>  
        </section>