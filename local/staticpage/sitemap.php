<?php

require('../../config.php');

$PAGE->set_url(new moodle_url('/local/staticpage/sitemap.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Sitemap');
$PAGE->set_heading('Sitemap');
$PAGE->requires->css('/local/staticpage/styles.css');

echo $OUTPUT->header();
?>


<div style="min-height: 100dvh; display: flex; flex-direction: column; align-items: center; justify-content: center;" class="container">
  
    <div style="align-self: self-start; max-width: 1024px;" class="container">
        <h4 style="font-size: 32px;" class="fw-bold text-primary">Sitemap</h4>
    </div>
    
  

  <br/>
  <br/>

  <div style="max-width: 1024px;" class="container row">
   <div class="col-sm-12 col-md-4 col-lg-4 col-lg-4 col-sm-6">
        <h5 class="fw-bold nice-footer-title mb-3">
         Quick Links
        </h5>
        <p class="text-primary fw-bold">About</p>
        <ul class="list">
            <li>Courses</li>
            <li>Tutors</li>
        </ul>
        <p class="text-primary fw-bold">Courses</p>
        <ul class="list">
            <li>All Courses</li>
            <li>Primary Courses</li>
            <li>Secondary Courses</li>
        </ul>
        <p class="text-primary fw-bold">Programmes</p>
        <ul class="list">
            <li>STEM Programmes</li>
            <li>Language Programmes</li>
            <li>Arts & Humanities</li>
        </ul>
    </div>
     <div class="col-sm-12 col-md-4 col-lg-4 col-lg-4 col-sm-6">
        <h5 class="fw-bold nice-footer-title mb-3">
         Get Started
        </h5>
         <ul style="margin-left: 0px !important; list-style: none;">
            <li>Why Vizschool?</li>
            <li>Courses</li>
            <li>Tutors</li>
            <li>Student Reviews</li>
            <li>Pricing & Plans</li>
            <li>Blog</li>
            <li>Learning Resources</li>
            <li>Contact Us</li>
        </ul>
    </div>
     <div class="col-sm-12 col-md-4 col-lg-4 col-lg-4 col-sm-6">
        <h5 class="fw-bold nice-footer-title mb-3">
         Academic Topics
        </h5>
         <p class="text-primary fw-bold">Primary Classes</p>
         <ul class="list">
            <li>Primary 1</li>
            <li>Primary 2</li>
            <li>Primary 3</li>
            <li>Primary 4</li>
            <li>Primary 5</li>
            <li>Primary 6</li>
        </ul>
        <p class="text-primary fw-bold">Secondary Classes</p>
        <ul class="list">
            <li>Secondary 1</li>
            <li>Secondary 2</li>
            <li>Secondary 3</li>
            <li>Secondary 4</li>
        </ul>
    </div>
  </div>


</div>

<?php
echo $OUTPUT->footer();
