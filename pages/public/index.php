<?php
$pageTitle = "NIIT - Port Harcourt";
$useTemplateAssets = true; 
?>

<!DOCTYPE html>
<html lang="en">
<?php include "../../includes/head.php"; ?>
<?php include "../../includes/template-css.php"; ?>

<body class="body-wrapper dark body-portfolio-agency font-heading-bdogrotesk-regular">

    <!-- custom-cursor -->
    <div class="custom-cursor">
        <img src="../../assets/images/cursor/cursor-2-xs.svg" alt="cursor" id="cursorImg">
    </div>

    <!-- Preloader -->
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>

            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>

    <!-- Scroll to top -->
    <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>

    <i class="ph ph-arrow-up"></i>
    </div>


    <!-- side toggle start -->
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
                            <span class="text">
                                <a href="tel:+2349153110525">+234-915-311-0525</a>
                            </span>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="ph ph-phone"></i></span>
                            <span class="text">
                                <a href="tel:+2348069625113">+234-806-962-5113</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->

    <!-- Header area start -->
    <header class="header-area-7">
        <div class="header-main">
            <div class="container large">
                <div class="header-area-7__inner">
                    <div class="header__logo">
                        <a href="index.html">
                            <img src="../../assets/images/logo/niit-logo.svg"class="normal-logo" alt="imageSite Logo">
                        </a>
                    </div>
                    <div class="header__nav pos-center">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="/courses">Courses</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact </a></li>
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
    <!-- Header area end -->

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div>

                <main>
                    <!-- portfolio start -->
                    <section class="portfolio">
                        <div class="swiper portfolio-activ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio__item slide-inner"
                                        data-background="../../assets/images/background/background1.png">
                                        <div class="container">
                                            <div class="portfolio__content">
                                                <h1 class="portfolio__content-title">
                                                    <a href="#">
                                                        Build Industry-Ready <br>
                                                        Tech Careers
                                                    </a>
                                                </h1>
                                                <ul class="portfolio__list">
                                                    <li><a href="#">NIIT Port Harcourt</a></li>
                                                    <li><a href="#">Global Curriculum</a></li>
                                                    <li><a href="#">Career Focused</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__item slide-inner"
                                        data-background="../../assets/images/background/background2.png">
                                        <div class="container">
                                            <div class="portfolio__content">
                                                <h1 class="portfolio__content-title">
                                                    <a href="#">
                                                    Professional Courses <br>
                                                    That Matter
                                                </a>
                                                </h1>
                                                <ul class="portfolio__list">
                                                    <li><a href="#">Software Engineering</a></li>
                                                    <li><a href="#">Data & Networking</a></li>
                                                    <li><a href="#">Digital Skills</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__item slide-inner"
                                        data-background="../../assets/images/background/backgorund3.png">
                                        <div class="container">
                                            <div class="portfolio__content">
                                                <h1 class="portfolio__content-title">
                                                     <a href="#">
                                                        Learn Today. <br>
                                                        Lead Tomorrow.
                                                    </a>
                                                </h1>
                                                <ul class="portfolio__list">
                                                    <li><a href="#">Hands-On Training</a></li>
                                                    <li><a href="#">Certified Instructors</a></li>
                                                    <li><a href="#">Career Support</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__slider__arrow d-flex justify-content-lg-end justify-content-start">
                                <button
                                    class="portfolio__slider__arrow-prev d-flex align-items-center justify-content-center">
                                    <i class="ph ph-arrow-left"></i> PREV
                                </button>

                                <button
                                    class=" portfolio__slider__arrow-next d-flex align-items-center justify-content-center">
                                    NEXT <i class="ph ph-arrow-right"></i>
                                </button>
                            </div>
                            <div class="portfolio-pagination"></div>
                        </div>
                    </section>
                    <!-- portfolio end -->

                    <section class="niit-intro">
                        <div class="container large">

                            <div class="niit-intro__top">
                            <div class="niit-intro__left">
                                <h2>Transition from enthusiast to world-class professional.</h2>
                            </div>

                            <div class="niit-intro__right">
                                <p>
                                Technology is more than just coding; it is about engineering solutions. 
                                At NIIT Port Harcourt, we provide rigorous, globally benchmarked IT training 
                                that turns raw potential into deep technical expertise.
                                </p>
                                <a href="#" class="btn-dark">Read more</a>
                            </div>
                            </div>

                            <div class="niit-intro__cards">
    
                                <div class="niit-card niit-card--muted">
                                    <h3>Without NIIT</h3>
                                    <div class="card-divider"></div> 
                                    <ul>
                                        <li>Surface-level software knowledge</li>
                                        <li>Local, outdated curriculums</li>
                                        <li>Focus on "tricks" over principles</li>
                                    </ul>
                                </div>

                                <div class="niit-card niit-card--muted">
                                    <h3>Without NIIT</h3>
                                    <div class="card-divider"></div>
                                    <ul>
                                        <li>Significant knowledge gaps</li>
                                        <li>No mentorship from experts</li>
                                        <li>Lack of professional best practices</li>
                                    </ul>
                                </div>

                                <div class="niit-card niit-card--highlight">
                                    <h3 class="header--3">With NIIT</h3>
                                    <div class="card-divider-highlight"></div>
                                    <ul>
                                        <li>Mastery of global tech standards</li>
                                        <li>Deep understanding of core logic</li>
                                        <li>Trained on enterprise-grade workflows</li>
                                    </ul>
                                </div>
                            
                            </div>

                        </div>
                    </section>

                    <section class="niit-tools">
                        <div class="container large">

                            <h3 class="niit-tools__title">Tools used in our academy</h3>

                            <div class="niit-tools__slider-wrapper">
                                <div class="swiper niit-tools-slider">
                                    <div class="swiper-wrapper">

                                    <!-- first logos-->
                                    <div class="swiper-slide"><img src="../../assets/images/tools/sublime.svg" alt="Sublime"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/aftereffects.svg" alt="After Effects"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/illustrator.svg" alt="Illustrator"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/photoshop.svg" alt="Photoshop"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/jupyter.svg" alt="Jupyter"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/m365.svg" alt="M365"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/microsoft.svg" alt="Microsoft"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/vscode.svg" alt="VS Code"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/xampp.svg" alt="XAMPP"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/laragon.svg" alt="Laragon"></div>
                                    
                                    <!-- duplicate -->
                                    <div class="swiper-slide"><img src="../../assets/images/tools/sublime.svg" alt="Sublime"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/aftereffects.svg" alt="After Effects"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/illustrator.svg" alt="Illustrator"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/photoshop.svg" alt="Photoshop"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/jupyter.svg" alt="Jupyter"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/m365.svg" alt="M365"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/microsoft.svg" alt="Microsoft"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/vscode.svg" alt="VS Code"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/xampp.svg" alt="XAMPP"></div>
                                    <div class="swiper-slide"><img src="../../assets/images/tools/laragon.svg" alt="Laragon"></div>             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="niit-impact">
                    <div class="niit-impact__overlay"></div>

                    <div class="container large">
                        <div class="niit-impact__grid">

                        <!-- LEFT: TEXT -->
                        <div class="niit-impact__content">
                            <span class="niit-impact__label">Our Impact</span>
                            <h2>
                            Training that delivers <br>
                            real-world results at scale
                            </h2>
                            <p>
                            At NIIT Port Harcourt, our programs are designed to meet global
                            industry demands — producing professionals who are ready to
                            perform in real environments, not just classrooms.
                            </p>
                        </div>

                        <!-- RIGHT: STATS -->
                        <div class="niit-impact__stats">

                            <div class="impact-card">
                            <h3>10,000+</h3>
                            <span>Students trained</span>
                            </div>

                            <div class="impact-card">
                            <h3>20+</h3>
                            <span>Industry-relevant programs</span>
                            </div>

                            <div class="impact-card">
                            <h3>95%</h3>
                            <span>Career readiness rate</span>
                            </div>

                        </div>

                        </div>
                    </div>
                    </section>

                </main>
            </div>
        </div>
    </div>




    <?php include "../../includes/footer.php"; ?>
    <?php include "../../includes/template-js.php"; ?>

    <script src="/assets/js/script.js"></script>


</body>
</html>