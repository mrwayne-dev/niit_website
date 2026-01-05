<?php
require_once __DIR__ . '/../../config/constants.php';

$pageTitle = "NIIT - About Us";
$useTemplateAssets = true; 
$current_page = "about";
$navbar_mode = "dark";
?>

<!DOCTYPE html>
<html lang="en">
<?php include INCLUDES_PATH . '/header.php'; ?>

<section class="about-intro">
  <div class="container large">
    <div class="about-intro__grid">

      <!-- LEFT: STATEMENT -->
      <div class="about-intro__headline">
        <h1>
          NIIT was founded with a singular focus:
          <span>empower you to build a future-ready career.</span>
        </h1>
      </div>

      <!-- RIGHT: COPY -->
      <div class="about-intro__content">
        <p>
          At NIIT Port Harcourt, we believe technology education should be
          practical, industry-driven, and deeply human. Our programs are
          designed to bridge the gap between academic learning and real-world
          application.
        </p>

        <p>
          Through hands-on training, experienced instructors, and globally
          relevant curricula, we prepare students not just to get jobs — but to
          thrive in fast-evolving digital careers.
        </p>

        <strong>Welcome to learning with purpose.</strong>
      </div>

    </div>
  </div>
</section>

<section class="about-awards">
  <div class="container large">
    <div class="about-awards__grid">

      <!-- LEFT -->
      <div class="about-awards__title">
        <h2>Awards</h2>
      </div>

      <!-- RIGHT -->
      <div class="about-awards__cards">

        <div class="award-card">
          <img src="/assets/images/tools/figma.svg" alt="TIME100 Most Influential Companies">
        </div>

        <div class="award-card">
          <img src="/assets/images/tools/figma.svg" alt="Fast Company Most Innovative Companies">
        </div>

        <div class="award-card">
          <img src="/assets/images/awards/fastcompany-ideas.png" alt="Fast Company World Changing Ideas">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about-awards">
  <div class="container large">
    <div class="about-awards__grid">

      <!-- LEFT -->
      <div class="about-awards__title">
        <h2>Partnerships</h2>
      </div>

      <!-- RIGHT -->
      <div class="about-awards__cards">

        <div class="award-card">
          <img src="/assets/images/awards/time100.png" alt="TIME100 Most Influential Companies">
        </div>

        <div class="award-card">
          <img src="/assets/images/awards/fastcompany-innovative.png" alt="Fast Company Most Innovative Companies">
        </div>

        <div class="award-card">
          <img src="/assets/images/awards/fastcompany-ideas.png" alt="Fast Company World Changing Ideas">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="about-leadership">
  <div class="container large">

    <!-- Section Header -->
    <div class="about-leadership__header">
      <h2>Mission-first leadership</h2>
      <p>It’s personal for everyone building NIIT.</p>
    </div>

    <!-- Cards Grid -->
    <div class="about-leadership__grid">

      <!-- Card -->
      <div class="leader-card">
        <div class="leader-card__top">
          <img src="/assets/images/team/pranitha.jpg" alt="Pranitha Patil">
          <div>
            <h3>Pranitha Patil</h3>
            <span>Co-Founder and Chief Business Officer</span>
          </div>
        </div>

        <p class="leader-card__bio">
          Left graduate school early to build NIIT. Formerly with enterprise
          technology consulting, she focuses on building scalable, people-first
          education systems.
        </p>

        <blockquote>
          “We built NIIT to jumpstart careers for people who deserve more.
          Education should change lives.”
        </blockquote>
      </div>

      <!-- Card -->
      <div class="leader-card">
        <div class="leader-card__top">
          <img src="/assets/images/team/jonathan.jpg" alt="Jonathan Swerdlin">
          <div>
            <h3>Jonathan Swerdlin</h3>
            <span>Co-Founder and CEO</span>
          </div>
        </div>

        <p class="leader-card__bio">
          Serial tech entrepreneur with a focus on building future-ready talent
          pipelines and sustainable digital careers.
        </p>

        <blockquote>
          “We’re building NIIT for our families, our communities, and the future
          workforce.”
        </blockquote>
      </div>

      <!-- Card -->
      <div class="leader-card">
        <div class="leader-card__top">
          <img src="/assets/images/team/mark.jpg" alt="Mark Hyman">
          <div>
            <h3>Mark Hyman</h3>
            <span>Academic Advisor</span>
          </div>
        </div>

        <p class="leader-card__bio">
          Industry veteran with decades of experience shaping technical education
          programs aligned with real-world demands.
        </p>

        <blockquote>
          “Education should empower people to own their future, not just earn
          certificates.”
        </blockquote>
      </div>

      <!-- Card -->
      <div class="leader-card">
        <div class="leader-card__top">
          <img src="/assets/images/team/seth.jpg" alt="Seth Weisfeld">
          <div>
            <h3>Seth Weisfeld</h3>
            <span>Design & Curriculum Lead</span>
          </div>
        </div>

        <p class="leader-card__bio">
          Product and design leader with over 20 years of experience building
          learning systems that scale globally.
        </p>

        <blockquote>
          “Great education isn’t about content alone—it’s about experience,
          clarity, and outcomes.”
        </blockquote>
      </div>

    </div>
  </div>
</section>

<section class="about-team">
  <div class="container large">

    <!-- Section Header -->
    <div class="about-team__header">
      <h2>Built by industry leaders</h2>
      <p>Our leadership and instructors bring real-world experience into every classroom.</p>
    </div>

    <!-- LEADERSHIP -->
    <div class="about-team__leadership">
      
      <div class="team-card team-card--primary">
        <img src="/assets/images/staff/Operations Manager.jpg" alt="Principal Staff">
        <h3>Mark Hyman, M.D.</h3>
        <span>Academic Director</span>
        <p>
          Former Cleveland Clinic physician and education strategist shaping
          industry-aligned learning programs.
        </p>
      </div>

      <div class="team-card team-card--primary">
        <img src="/assets/images/staff/Chief Counsellor.JPG" alt="Principal Staff">
        <h3>JoAnn E. Manson, M.D.</h3>
        <span>Curriculum Advisor</span>
        <p>
          Expert in applied education systems, mentoring students toward
          real-world technical excellence.
        </p>
      </div>

    </div>

    <!-- INSTRUCTORS / STAFF -->
    <div class="about-team__grid">

      <div class="team-card">
        <img src="/assets/images/staff/boss.jpg" alt="Instructor">
        <h3>Andrew Huberman</h3>
        <span>Senior Instructor</span>
      </div>

      <div class="team-card">
        <img src="/assets/images/staff/Account.jpg" alt="Instructor">
        <h3>Toby Cosgrove</h3>
        <span>Technical Instructor</span>
      </div>

      <div class="team-card">
        <img src="/assets/images/staff/Mr ben.jpeg" alt="Instructor">
        <h3>Daniel Sodickson</h3>
        <span>Systems Instructor</span>
      </div>

      <div class="team-card">
        <img src="/assets/images/staff/Mr jesse2.jpg" alt="Instructor">
        <h3>Azra Raza</h3>
        <span>Faculty Lead</span>
      </div>

      <div class="team-card">
        <img src="/assets/images/team/staff-5.jpg" alt="Instructor">
        <h3>Eddie Chang</h3>
        <span>Senior Lecturer</span>
      </div>

      <div class="team-card">
        <img src="/assets/images/team/staff-6.jpg" alt="Instructor">
        <h3>Luis A. Diaz</h3>
        <span>Program Advisor</span>
      </div>

    </div>

  </div>
</section>





    <?php include INCLUDES_PATH . '/footer.php'; ?>

</body>
</html>