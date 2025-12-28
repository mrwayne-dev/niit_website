<?php
$pageTitle = "NIIT - Port Harcourt";
$useTemplateAssets = true; 
$current_page = "diploma";
?>

<!DOCTYPE html>
<html lang="en">
<?php include "../../includes/header.php"; ?>

                    <!-- portfolio start -->
                    <section class="portfolio diploma-hero">
                        <div class="diploma-hero__overlay"></div>

                        <div class="container">
                            <div class="diploma-hero__content">
                            <h1>NIIT Diploma Programmes</h1>
                            <p>Industry-ready diplomas designed for real-world impact.</p>
                            </div>
                        </div>
                    </section>
                    <!-- portfolio end -->

                    <section class="diploma-split">
                    <!-- LEFT DIPLOMA -->
                        <a href="/diploma/software-engineering" class="diploma-split__item left">
                            <div class="diploma-split__overlay"></div>
                            <div class="diploma-split__content">
                            <h2>MMS Software Engineering</h2>
                            <p>Deep technical training for modern software careers.</p>
                            <span class="diploma-split__cta">Explore programme →</span>
                            </div>
                        </a>

                        <!-- RIGHT DIPLOMA -->
                        <a href="/diploma/multimedia" class="diploma-split__item right">
                            <div class="diploma-split__overlay"></div>
                            <div class="diploma-split__content">
                            <h2>MMS Infrastructure Engineering</h2>
                            <p>Creative technology for digital media professionals.</p>
                            <span class="diploma-split__cta">Explore programme →</span>
                            </div>
                        </a>
                    </section>

    <?php include "../../includes/footer.php"; ?>
</body>
</html>