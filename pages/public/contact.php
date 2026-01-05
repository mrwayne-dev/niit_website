<?php
require_once __DIR__ . '/../../config/constants.php';

$pageTitle = "NIIT - Contact Us";
$useTemplateAssets = true; 
$current_page = "contact";
$navbar_mode = "dark";
?>

<!DOCTYPE html>
<html lang="en">
<?php include INCLUDES_PATH . '/header.php'; ?>

                    <section class="contact-section">
  <div class="container large">

    <!-- Header -->
    <div class="contact-header">
      <h1>Contact</h1>
    </div>

    <!-- Content Grid -->
    <div class="contact-grid">

      <!-- LEFT: MAP -->
      <div class="contact-map">
        <!-- Replace src with your real Google Maps embed -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3975.8276334647767!2d7.000947!3d4.799628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce9916e52ea1%3A0xb2fcd0d9cd360047!2sNIIT%20Port%20Harcourt!5e0!3m2!1sen!2sng!4v1767611733562!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- RIGHT: INFO CARD -->
      <div class="contact-info">

        <div class="contact-info__notice">
          <i class="ph ph-info"></i>
          <span>The fastest way to reach us is to <b>send us a message.</b></span>
        </div>

        <!-- Email -->
        <div class="contact-info__block">
          <h3>
            <i class="ph ph-envelope-simple"></i>
            Email
          </h3>

          <p>
            General enquiries:
            <a href="mailto:niitportharcourtenquiries@gmail.com">niitportharcourtenquiries@gmail.com</a>
          </p>
        </div>
       
        <div class="contact-info__block">
          <h3>
            <i class="ph ph-phone"></i>
            Phone
          </h3>

          <p>
            General enquiries:
            <a href="tel:+2349153110525">+234-915-311-0525</a>
            <a href="tel:+2348069625113">+234-806-9625-113</a>
          </p>
        </div>

        <!-- Office -->
        <div class="contact-info__block">
          <h3>
            <i class="ph ph-map-pin"></i>
            Office Address
          </h3>

          <div class="contact-address">
            <strong>NIIT Port Harcourt</strong>
            <span>
                1 Kaduna Street, D-line, Port Harcourt 500101, Rivers State, Nigeria
            </span>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-support">
  <div class="container large">

    <!-- Header -->
    <div class="contact-support__header">
      <h2>Contact support</h2>
    </div>

    <div class="contact-support__grid">

      <!-- LEFT: FORM -->
      <div class="contact-support__form">

        <h3>General queries</h3>

        <form action="#" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" name="question" placeholder="What's your question?" required>
          </div>

          <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
          </div>

          <div class="form-group">
            <textarea name="message" rows="5" placeholder="Describe your issue" required></textarea>
          </div>

          <div class="form-upload">
            <label>
              <input type="file" name="attachment">
              <span>
                Choose a file or drag and drop here<br>
                <small>Size limit: 5 MB</small>
              </span>
            </label>
          </div>

          <div class="form-footer">
            <button type="submit" class="btn-submit">Submit</button>
            <p>
              By filling out this form you agree to the terms<br>
              and conditions in our <a href="#">privacy notice</a>.
            </p>
          </div>

        </form>
      </div>

      <!-- RIGHT: SUPPORT INFO -->
      <div class="contact-support__aside">

        <div class="support-card emergency">
          <strong>Emergencies</strong>
          <p>Need emergency support?</p>
          <a href="#" class="btn-emergency">Get help now</a>
        </div>

        <div class="support-card links">
          <strong>Learn more</strong>
          <ul>
            <li><a href="/courses">→ NIIT Courses</a></li>
            <li><a href="/#faq">→ Our FAQs</a></li>
          </ul>
        </div>

      </div>

    </div>
  </div>
</section>



    <?php include INCLUDES_PATH . '/footer.php'; ?>

</body>
</html>