<?php
require_once __DIR__ . '/../../../config/constants.php';

$pageTitle = "NIIT - Port Harcourt";
$useTemplateAssets = true; 
$current_page = "diploma";
$navbar_mode = "dark";
?>

<!DOCTYPE html>
<html lang="en">
<?php include INCLUDES_PATH . '/header.php'; ?>

    <section class="course-intro">
        <div class="container large">

            <!-- status pill -->
            <div class="course-status-wrap">
                <div class="course-status">
                    <span class="status-dot"></span>
                    <span>Registration is ongoing</span>
                </div>
            </div>


            <!-- title -->
            <h1 class="course-title">MMS Software Engineering</h1>

            <!-- description -->
            <p class="course-description">
            MMS Software Engineering is a dynamic 2-year intensive diploma program designed to make students job-ready by blending core technical expertise, 
            professional skills, and contemporary abilities alongside their graduation degree.
            </p>
            <div class="course-contents-cta">
            <button class="btn-course-contents" id="openCourseModal">
                View course contents
            </button>
            </div>


            <!-- image -->
            <div class="course-hero-media">
            <img
                src="/assets//images//background/backgorund3.png"
                alt="MMS Software Engineering"
            />
            </div>

        </div>
    </section>  

    <section class="course-details">
        <div class="container large">

            <!-- TOP GRID -->
            <div class="course-details__grid">

            <!-- LEFT META -->
            <div class="course-meta">
                <div class="course-meta__item">
                <span class="label">Category</span>
                <strong>Physical / Live Classes</strong>
                </div>

                <div class="course-meta__item">
                <span class="label">Study days</span>
                <strong>Monday · Tuesday</strong>
                </div>

                <div class="course-meta__item">
                <span class="label">Start Date</span>
                <strong>1st September</strong>
                </div>

                <a href="#" class="course-enroll-btn">Enroll now</a>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="course-learn">
                <h2>What you will learn</h2>

                <ul class="course-learn__list">
                <li>
                    <strong>Design Principles:</strong>
                    Learn the core principles of UX & UI, including UX laws and structure.
                </li>

                <li>
                    <strong>Sketches & Wireframes:</strong>
                    Master ideation, wireframing, and iterative design workflows.
                </li>

                <li>
                    <strong>Design Components:</strong>
                    Build reusable UI components and scalable design systems.
                </li>

                <li>
                    <strong>Advanced Features:</strong>
                    Learn Auto Layout, constraints, and responsive logic.
                </li>

                <li>
                    <strong>Prototyping:</strong>
                    Create interactive prototypes to simulate real user flows.
                </li>
                </ul>
            </div>

            </div>

            <!-- STATS CARDS -->
            <div class="course-stats">

            <div class="course-stat-card">
                <h3>₦60,000</h3>
                <span>Tuition Fee</span>
            </div>

            <div class="course-stat-card">
                <h3>3 Months</h3>
                <span>3x classes a week</span>
            </div>

            <div class="course-stat-card">
                <h3>3 Months</h3>
                <span>Extra Mentorship Duration</span>
            </div>

            </div>

        </div>
    </section>
    <section class="niit-faq">
                        <div class="container large">

                            <div class="niit-faq__header">
                            <span class="niit-faq__label">
                                <i class="ph ph-star-four"></i> FAQs
                            </span>
                            <h2>Common Questions</h2>
                            </div>

                            <div class="niit-faq__list">

                            <!-- ITEM -->
                            <div class="faq-item">
                                <button class="faq-question">
                                <span>Can I use NIIT courses for professional certification?</span>
                                <i class="ph ph-plus"></i>
                                </button>
                                <div class="faq-answer">
                                <p>
                                    Yes. NIIT programs are industry-aligned and designed to prepare
                                    students for real-world professional certifications and careers.
                                </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-question">
                                <span>Are classes physical or online?</span>
                                <i class="ph ph-plus"></i>
                                </button>
                                <div class="faq-answer">
                                <p>
                                    Classes are instructor-led and held physically at NIIT Port Harcourt,
                                    with guided hands-on sessions.
                                </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <button class="faq-question">
                                <span>Do I need prior tech experience?</span>
                                <i class="ph ph-plus"></i>
                                </button>
                                <div class="faq-answer">
                                <p>
                                    No prior experience is required. Our courses are structured to take
                                    beginners to industry-ready professionals.
                                </p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <button class="faq-question">
                                <span>Do I need prior tech experience?</span>
                                <i class="ph ph-plus"></i>
                                </button>
                                <div class="faq-answer">
                                <p>
                                    No prior experience is required. Our courses are structured to take
                                    beginners to industry-ready professionals.
                                </p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <button class="faq-question">
                                <span>Do I need prior tech experience?</span>
                                <i class="ph ph-plus"></i>
                                </button>
                                <div class="faq-answer">
                                <p>
                                    No prior experience is required. Our courses are structured to take
                                    beginners to industry-ready professionals.
                                </p>
                                </div>
                            </div>

                            </div>
                        </div>
                    </section>





                    

    <?php include INCLUDES_PATH . '/footer.php'; ?>
<div class="course-modal" id="courseModal">
  <div class="course-modal__backdrop"></div>

  <div class="course-modal__panel">
    <button class="course-modal__close" id="closeCourseModal">
      <i class="ph ph-x"></i>
    </button>

    <h2 class="course-modal__title">Course Contents</h2>

    <div class="course-modal__content">

      <div class="course-semester">
        <h3>Semester 1</h3>
        <ul>
          <li>Logic building and effective problem solving</li>
          <li>RDBMS Essentials & T-SQL Programming</li>
          <li>Programming with Python</li>
        </ul>
      </div>

      <div class="course-semester">
        <h3>Semester 2</h3>
        <ul>
          <li>Programming in Java</li>
          <li>Developing web applications using Servlets & JSP</li>
          <li>Automated Testing using JUnit</li>
        </ul>
      </div>

      <div class="course-semester">
        <h3>Semester 3</h3>
        <ul>
          <li>Android mobile app development</li>
          <li>JSF, Hibernate & Spring (Java EE)</li>
          <li>Source control with Git & GitHub</li>
        </ul>
      </div>

      <div class="course-semester">
        <h3>Semester 4</h3>
        <ul>
          <li>Responsive Web Design (HTML5 & jQuery)</li>
          <li>REST APIs, AngularJS & React</li>
          <li>Test-Driven Development</li>
        </ul>
      </div>

      <div class="course-semester">
        <h3>Semester 5</h3>
        <ul>
          <li>Cloud deployment with Google App Engine</li>
          <li>DevOps fundamentals</li>
          <li>Project 1 – E-commerce Portal</li>
          <li>Project 2 – Collaboration Platform</li>
        </ul>
      </div>

    </div>
  </div>
</div>

</body>
</html>