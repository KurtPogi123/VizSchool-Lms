<?php

require('../../config.php');

$PAGE->set_url(new moodle_url('/local/staticpage/privacy-policy.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Privacy Policy');
$PAGE->set_heading('Privacy Policy');

echo $OUTPUT->header();
?>

<style>

  img {
    height: 150px !important;
    width: 150px !important;
    object-fit: cover;
  }
  
    ul {
    list-style: disc;
    margin-left: 32px;
    }

  .mx-auto {
    margin-inline: auto;
  }

</style>

<div class="container">
  <div class="text-center mb-8">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUfFSO81s46Fd_TdVv2kBjkJUnMOnvsMSOLg&s" alt="VizSchool Logo" />
    <h4 class="fw-bold text-primary">Privacy Policy</h4>
    <p class="text-muted mt-1">Effective Date: 2025</p>
  </div>

  <br/>

  <div>
    <div class="mt-5">
      <h5 class="fw-bold" >1. Introduction</h5>
      <p>VizSchool LMS ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your personal information when you use our platform.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >2. Information We Collect</h5>
      <p>We may collect the following types of information:</p>

       <ul >
        <li>Personal Information: Name, email address, contact details, and other information you provide when registering an account.</li>
        <li>Usage Data: Information on how you interact with our platform, including login details, course progress, and preferences.</li>
        <li>Device & Technical Data: IP address, browser type, and device information for security and analytics purposes.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >3. How We Use Your Information</h5>
      <p>We use your information to:</p>

      <ul >
        <li>Provide and improve our services.</li>
        <li>Personalize your learning experience.</li>
        <li>Communicate with you regarding updates, support, and promotional content (you may opt out anytime).</li>
        <li>Ensure security, detect fraud, and comply with legal requirements.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >4. How We Share Your Information</h5>
       <p>We do not sell your personal information. However, we may share it with:</p>

       <ul >
        <li>Service Providers: Trusted third parties that help us operate our platform (e.g., hosting, analytics, customer support).</li>
        <li>Legal Authorities: When required by law or to protect the rights and safety of users and our platform.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >5. Data Security</h5>
       <p>We implement security measures to protect your data, but no online service is 100% secure. We encourage you to use strong passwords and safeguard your account information.</p>

      
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >6. Your Rights & Choices</h5>

      <p>You have the right to:</p>

       <ul >
        <li>Access, update, or delete your personal information.</li>
        <li>Opt out of marketing communications.</li>
        <li>Request a copy of your data (subject to verification).</li>
      </ul>

        <p>To exercise these rights, contact us at <a href="mailto:care@vizschool.com" class="text-primary fw-bold">care@vizschool.com</a>.</p>
    </div>

     <div class="mt-5">
      <h5 class="fw-bold" >7. Cookies & Tracking Technologies</h5>

      <p>We use cookies and similar technologies to enhance user experience, analyze usage, and improve our services. You can manage cookie preferences in your browser settings.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >8. Changes to This Policy</h5>

      <p>We may update this Privacy Policy from time to time. Any changes will be posted on our website, and continued use of VizSchool LMS constitutes acceptance of the revised terms.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >9. Contact Information</h5>
      <p>If you have any questions about this Agreement, please contact us at <a href="mailto:care@vizschool.com" class="text-primary fw-bold">care@vizschool.com</a>.</p>
    </div>
  </div>
</div>

<?php
echo $OUTPUT->footer();
