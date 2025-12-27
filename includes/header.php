<!DOCTYPE html>
<html lang="en">
<?php 
// Since header.php is in the same folder as these, we just include them directly
include "head.php"; 
include "template-css.php"; 
?>

<body class="body-wrapper dark body-portfolio-agency font-heading-bdogrotesk-regular">

    <div class="custom-cursor">
        <img src="../../assets/images/cursor/cursor-2-xs.svg" alt="cursor" id="cursorImg">
    </div>

    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
        <i class="ph ph-arrow-up"></i>
    </div>

    <aside class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-header">
                    <div class="offset-logo">
                        <a href="index.html">
                            <img src="../../assets/images/logo/niit-logo.svg" alt="site logo">
                        </a>
                    </div>
                    <button id="side-info-close" class="side-info-close">
                        <i class="ph ph-x"></i>
                    </button>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-widget-box">
                    <h2 class="title">Reach Out</h2>
                    <div class="contact-meta">
                        <div class="contact-item">
                            <span class="icon"><i class="ph ph-map-pin"></i></span>
                            <span class="text">1 Kaduna Street, D-line, Port Harcourt 500101, Rivers</span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="ph ph-envelope-simple"></i></span>
                            <span class="text"><a href="mailto:niitportharcourtenquiries@gmail.com">niitportharcourtenquiries@gmail.com</a></span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="ph ph-phone"></i></span>
                            <span class="text"><a href="tel:+2349153110525">+234-915-311-0525</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <header class="header-area-7">
        <div class="header-main">
            <div class="container large">
                <div class="header-area-7__inner">
                    <div class="header__logo">
                        <a href="index.html">
                            <img src="../../assets/images/logo/niit-logo.svg" class="normal-logo" alt="imageSite Logo">
                        </a>
                    </div>
                    <div class="header__nav pos-center">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="/courses" class="<?= ($current_page == 'courses') ? 'active' : '' ?>">Courses</a></li>
                                <li><a href="/diploma" class="<?= ($current_page == 'diploma') ? 'active' : '' ?>">Diploma</a></li>
                                <li><a href="/about" class="<?= ($current_page == 'about') ? 'active' : '' ?>">About</a></li>
                                <li><a href="/contact" class="<?= ($current_page == 'contact') ? 'active' : '' ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__navicon">
                        <button class="side-toggle">
                            <i class="ph ph-squares-four"></i>
                            <span>Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="has-smooth" id="has_smooth"></div>
    
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div>
                <main>