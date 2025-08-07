<?php

require('../../config.php');

$PAGE->set_url(new moodle_url('/local/staticpage/about-us.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('About Us');
$PAGE->set_heading('About Us');

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


    .hero-container {
        background-image: url("pix/gradient-bg.png");
        background-size: cover;
        height: 70vh;
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
        justify-content: center;
    }

    .hero-container > p {
        font-size: 20px !important;
    }

     h2 {
        font-size: 40px !important;
    }

    .btn-outline-secondary {
        border-color: white !important;
        color: white !important;
    }

    .img-1 {
        background-image: url("pix/kid.png");
        background-size: cover;
    }

       .img-2 {
        background-image: url("pix/lady.png");
        background-size: cover;
    }

       .img-3 {
        background-image: url("pix/kid-studying.png");
        background-size: cover;
    }

    .img-1, .img-2, .img-3 {
         height: 400px;
        width: 400px;
        max-height: 400px;
        max-width: 400px;
    }

    .details {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 32px;
    }

</style>

<div>
  <div class="hero-container text-center mb-8">
    <p class="text-white fw-bold">Our Vision</p>
    <div class="w-50">
        <h2 class="fw-bold text-white">We envision a world where every student learns freely, anytime, anywhere.</h2>
    </div>
    <button type="button" class="btn btn-outline-secondary">
        Hear from our Community
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
    </button>
  </div>
  
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>

  <h2 class="fw-bold text-primary text-center">Your Learning. Your Pace. Your Future.</h2>

  <div class="container py-5">
    <div class="mt-5">
        <div class="details">
            
            <div class="w-full">
                <div class="img-1"></div>
            </div>
        
            <div class="w-50">
                <h3 class="fw-bold">💡 Why VizSchool?</h3>

                <p>At VizSchool, we believe that education should be flexible, empowering, and accessible to every student. That’s why we offer a unique learning experience designed to meet learners where they are—at home, on the go, or anywhere in between.  Every completed course comes with a Certificate of Completion, helping learners celebrate progress and showcase their achievements. And because we’re built with both students and families in mind, our easy-to-use tools make it simple for parents to stay involved and track their child’s growth.</p>
            </div>
        </div>
    </div>
    
    <br/>
    <br/>
    <br/>
    <br/>


      <div class="mt-5">
        <div class="details">
            <div class="w-50">
                 <h3 class="fw-bold">👩‍🏫 Our Tutors</h3>
                 <p>Behind every VizSchool course is a team of passionate, certified educators—many from HFSE International School—who bring real classroom experience to the digital world. They're not just instructors; they’re mentors, focused on making each lesson engaging, relatable, and tailored to every learner's needs.  Through interactive content, personalized feedback, and consistent guidance, our tutors go beyond teaching. With VizSchool, your child is never learning alone.</p>
 
                  <button type="button" class="btn btn-primary">Explore our courses</button>
             </div>
            <div class="w-full">
                <div class="img-2"></div>
            </div>
        </div>
    </div>
    
    <br/>
    <br/>
    <br/>
    <br/>

     <div class="mt-5">
        <div class="details">
             <div class="w-full">
                <div class="img-3"></div>
            </div>
            <div class="w-50">
                <h3 class="fw-bold text-primary">About Us</h3>
                <p>VizSchool is a modern learning platform built to support K–12 students with high-quality, engaging, and flexible online education. Designed with the vision of making learning accessible beyond the four walls of a classroom, VizSchool offers a curated catalog of courses—from academic enrichment to special skills and self-paced programs.  In partnership with HFSE International School, we aim to bridge traditional learning with digital innovation—preparing students not just for exams, but for the real world.
Whether you're catching up, leveling up, or exploring new interests, VizSchool is your second school—right at your fingertips.</p>
            </div>
        </div>
    </div>

  </div>
</div>

  <br/>
  <br/>
  <br/>

<?php
echo $OUTPUT->footer();
