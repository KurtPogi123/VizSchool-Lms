<?php

require('../../config.php');

$PAGE->set_url(new moodle_url('/local/staticpage/terms-conditions.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Terms and Conditions');
$PAGE->set_heading('Terms and Conditions');
$PAGE->requires->css('/local/staticpage/styles.css');

echo $OUTPUT->header();
?>

<div class="container">
  <div class="text-center mb-8">
    <img class="header-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUfFSO81s46Fd_TdVv2kBjkJUnMOnvsMSOLg&s" alt="VizSchool Logo" />
    <h4 class="fw-bold text-primary">End User License Agreement</h4>
    <p class="text-muted mt-1">Effective Date: 2025</p>
  </div>
  
  <br/>

  <div>
    <div class="mt-5">
      <h5 class="fw-bold" >1. Introduction</h5>
      <p>This End User License Agreement (“Agreement”) is a legal agreement between you (“User”) and VizSchool LMS (“Company”, “we,” “our,” or “us”). By accessing or using VizSchool LMS, you agree to comply with and be bound by this Agreement. If you do not agree, you may not use the platform.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >2. License Grant</h5>
      <p>Subject to your compliance with this Agreement, VizSchool LMS grants you a limited, non-exclusive, non-transferable, and revocable license to access and use the platform for personal, educational, and non-commercial purposes.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >3. Restrictions</h5>
      <ul class="list">
        <li>Copy, modify, distribute, or create derivative works of any content from VizSchool LMS.</li>
        <li>Share, sell, or sublicense your account or any portion of the platform.</li>
        <li>Use the platform for any unlawful or unauthorized purpose.</li>
        <li>Attempt to gain unauthorized access to VizSchool LMS, its systems, or other user accounts.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >4. User Accounts & Security</h5>
      <p>You are responsible for maintaining the confidentiality of your login credentials and any activity under your account. We are not liable for any loss or damage resulting from unauthorized access to your account.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >5. Content & Intellectual Property</h5>
      <p>All content on VizSchool LMS, including but not limited to course materials, videos, graphics, and software, is owned by VizSchool LMS or its licensors and protected under copyright and intellectual property laws. Unauthorized use of content is strictly prohibited.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >6. Termination</h5>
      <p>We reserve the right to terminate or suspend your access to VizSchool LMS at our sole discretion if you violate this Agreement. Upon termination, your right to use the platform will cease immediately.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >7. Disclaimers & Limitation of Liability</h5>
      <ul class="list">
        <li>VizSchool LMS is provided ‘as is’ without warranties of any kind. We do not guarantee uninterrupted or error-free service.</li>
        <li>We are not liable for any indirect, incidental, or consequential damages arising from your use of the platform.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >8. Changes to this Agreement</h5>
      <p>We may update this Agreement from time to time. Any changes will be posted on our website, and continued use of VizSchool LMS constitutes acceptance of the revised terms.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >9. Governing Law</h5>
      <p>This Agreement shall be governed by and construed in accordance with the laws of Singapore.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >10. Contact Information</h5>
      <p>If you have any questions about this Agreement, please contact us at <a href="mailto:care@vizschool.com" class="text-primary fw-bold">care@vizschool.com</a>.</p>
    </div>
  </div>
</div>

<?php
echo $OUTPUT->footer();
