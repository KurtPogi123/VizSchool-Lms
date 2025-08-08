<?php

require('../../config.php');

$PAGE->set_url(new moodle_url('/local/staticpage/refund-policy.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Refund Policy');
$PAGE->set_heading('Refund Policy');

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
    <h4 class="fw-bold text-primary">Refund Policy</h4>
    <p class="text-muted mt-1">Effective Date: 2025</p>
  </div>

  <br/>
  <div class="mx-auto w-75 text-center">
      <h5 class="mt-4 fw-bold">At VizSchool LMS, we strive to provide high-quality educational services to our users. If you are not satisfied with your purchase, please review our refund policy below.</h5>
  </div>

  <div>
    <div class="mt-5">
      <h5 class="fw-bold" >1. Eligibility for Refunds</h5>
      <p>Refund requests must meet the following criteria to be considered: The request is made within [X] days of purchase.</p>

       <ul >
        <li>The user has not completed more than [Y]% of the course.</li>
        <li>The refund request is due to a valid reason, such as technical issues preventing access or dissatisfaction with course content.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >2. Non-Refundable Items</h5>
      <p>The following items are not eligible for refunds:</p>

       <ul >
        <li>Courses that have been fully accessed or completed.</li>
        <li>Subscription-based plans after the billing cycle has started.</li>
        <li>Digital products, including downloadable materials, unless there is a technical issue that prevents access.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >3. Refund Process</h5>
      <p>To request a refund, please follow these steps:</p>

      <ul >
        <li>Submit a refund request by contacting us at [Insert Contact Email] with your order details and reason for the refund.</li>
        <li>Our team will review your request within [X] business days.</li>
        <li>If approved, the refund will be processed to your original payment method within [Y] business days.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >4. Cancellations</h5>
       <ul >
        <li>Users can cancel their subscription at any time, but refunds will not be issued for the remaining period of the subscription.</li>
        <li>Cancellations must be made before the next billing cycle to avoid being charged.</li>
      </ul>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >5. Changes to This Policy</h5>
      <p>VizSchool LMS reserves the right to modify this Refund Policy at any time. Any updates will be posted on our website, and continued use of our platform constitutes acceptance of the revised terms.</p>
    </div>

    <div class="mt-5">
      <h5 class="fw-bold" >6. Contact Information</h5>
      <p>If you have any questions about this Agreement, please contact us at <a href="mailto:care@vizschool.com" class="text-primary fw-bold">care@vizschool.com</a>.</p>
    </div>
  </div>
</div>

<?php
echo $OUTPUT->footer();
