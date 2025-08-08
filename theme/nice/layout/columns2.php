<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A two column layout for the boost theme.
 *
 * @package   theme_nice
 * @copyright Based on 2016 Damyon Wiese theme_boost
 * @copyright 2025 Nice Learning <support@docs.nicelearning.org>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Include custom theme helper functions.
require_once($CFG->dirroot . '/theme/nice/inc/nice_themehandler.php');

// Optionally include Behat library for testing purposes.
require_once($CFG->libdir . '/behat/lib.php');

array_push($extraclasses, "nice_context_frontend");

// Convert the array of classes into a space-separated string.
$bodyclasses = implode(" ", $extraclasses);

// Generate HTML attributes for the <body> tag (id, class, dir, lang).
$bodyattributes = $OUTPUT->body_attributes($bodyclasses);

// Render any blocks that may appear in the side-pre region.
$blockshtml = $OUTPUT->blocks('side-pre');

// Check if there are any blocks rendered.
$hasblocks = strpos($blockshtml, 'data-block=') !== false;

// Include code to build the $templatecontext array for Mustache templates.
require_once($CFG->dirroot . '/theme/nice/inc/nice_themehandler_context.php');

// Check if this is the front page
$isfrontpage = ($PAGE->pagelayout == 'frontpage');

// Add custom landing page content if on front page
if ($isfrontpage) {
    $statisticsSection = '
    <!-- Statistics Section -->
    <div class="statistics-section">
        <div class="container">
            <h2 class="statistics-title">Students & Parents Love VizSchool!</h2>
            
            <div class="statistics-grid">
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/image1.png" alt="Students explore" />
                    </div>
                    <div class="stat-number">95%</div>
                    <div class="stat-description">Students explore new skills</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/image2.png" alt="Parents value" />
                    </div>
                    <div class="stat-number">9 out of 10</div>
                    <div class="stat-description">Parents value the flexibility</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/image3.png" alt="Students confident" />
                    </div>
                    <div class="stat-number">85%</div>
                    <div class="stat-description">Students feel more confident</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/image4.png" alt="Multiple courses" />
                    </div>
                    <div class="stat-number">4 out of 5</div>
                    <div class="stat-description">Students take multiple courses</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/image5.png" alt="Certificates earned" />
                    </div>
                    <div class="stat-number">100%</div>
                    <div class="stat-description">Students earn certificates</div>
                </div>
            </div>
        </div>
    </div>';

    $statisticsCSS = '
        /* Statistics Section */
        .statistics-section {
            background: #1e90ff;
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .statistics-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 60px;
            color: white;
        }

        .statistics-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            flex-wrap: nowrap; /* Prevent wrapping to a new line */
            overflow-x: auto; /* Allow horizontal scrolling on small screens */
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-width: 200px;
            flex-shrink: 0; /* Prevent items from shrinking */
        }

        .stat-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 10px;
            line-height: 1;
        }

        .stat-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            max-width: 150px;
            line-height: 1.3;
        }

        /* Responsive design for statistics */
        @media (max-width: 1200px) {
            .statistics-grid {
                gap: 30px;
            }
            
            .stat-item {
                min-width: 180px;
            }
        }

        @media (max-width: 968px) {
            .statistics-grid {
                gap: 20px;
            }
            
            .stat-item {
                min-width: 160px;
            }
        }

        @media (max-width: 768px) {
            .statistics-grid {
                gap: 15px;
            }
            
            .stat-item {
                min-width: 140px;
            }
        }

        @media (max-width: 480px) {
            .statistics-section {
                padding: 60px 0;
            }
            
            .statistics-title {
                font-size: 1.8rem;
            }
            
            .stat-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }
            
            .stat-number {
                font-size: 1.8rem;
            }
            
            .stat-description {
                font-size: 1rem;
            }
        }
    ';

    $customcontent = '
    <style>
        .hero-section {
            background: linear-gradient(135deg, #1e90ff 0%, #4169e1 100%);
            min-height: 80vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 60px 20px;
            margin-bottom: 0;
            text-align: center;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 10;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
        }

        .hero-text {
            color: white;
            z-index: 20;
            text-align: center;
            max-width: 800px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-text p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.95;
            line-height: 1.4;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 40px;
        }

        .btn-hero-primary {
            background: #ff6b35;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            display: inline-block;
        }

        .btn-hero-primary:hover {
            background: #e55a2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-hero-secondary {
            background: transparent;
            color: white;
            padding: 15px 30px;
            border: 2px solid white;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: inline-block;
        }

        .btn-hero-secondary:hover {
            background: white;
            color: #1e90ff;
            text-decoration: none;
        }

        .hero-images {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 80px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .image-container {
            position: relative;
            width: 180px;
            height: 240px;
            border-radius: 30% / 20%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container.right {
            position: relative;
            left: auto;
            right: auto;
            transform: none;
            bottom: auto;
            top: auto;
        }

        .image-container::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 30% / 20%;
            z-index: 1;
        }

        .image-container img {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-container.middle {
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, -30%);
            width: 250px;
            height: 250px;
            z-index: 2;
        }

        .image-container.middle::before {
            background: #FFE07D;
        }

        .image-container.left {
            width: 250px;
            height: 250px;
            left: calc(50% - 280px);
            transform: translateX(-50%);
            bottom: 20px;
        }

        .image-container.left::before {
            background: #D3B1E5;
        }

        .image-container.right {
            width: 250px;
            height: 250px;
            right: calc(50% - 280px);
            transform: translateX(50%);
            bottom: 20px;
            animation-delay: -4s;
        }

        .image-container.right::before {
            background: #9AEBA3;
        }

        .floating-element {
            position: absolute;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2n) {
            animation-delay: -3s;
        }

        .floating-element:nth-child(3n) {
            animation-delay: -1.5s;
        }

        .floating-element:nth-child(4n) {
            animation-delay: -4.5s;
        }

        .grid-dots {
            width: 40px;
            height: 40px;
            background: url("data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Ccircle cx=\'6\' cy=\'6\' r=\'2\'/%3E%3Ccircle cx=\'20\' cy=\'6\' r=\'2\'/%3E%3Ccircle cx=\'34\' cy=\'6\' r=\'2\'/%3E%3Ccircle cx=\'6\' cy=\'20\' r=\'2\'/%3E%3Ccircle cx=\'20\' cy=\'20\' r=\'2\'/%3E%3Ccircle cx=\'34\' cy=\'20\' r=\'2\'/%3E%3Ccircle cx=\'6\' cy=\'34\' r=\'2\'/%3E%3Ccircle cx=\'20\' cy=\'34\' r=\'2\'/%3E%3Ccircle cx=\'34\' cy=\'34\' r=\'2\'/%3E%3C/g%3E%3C/svg%3E");
        }

        .triangle {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid rgba(255, 255, 255, 0.2);
        }

        .triangle-outline {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 26px solid transparent;
            border-top: 26px solid rgba(255, 255, 255, 0.3);
        }

        .circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        .circle-outline {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, 0.4);
        }

        .hero-section .floating-element.top-left {
            top: 20px;
            left: 20px;
        }

        .hero-section .floating-element.top-right {
            top: 40px;
            right: 30px;
        }

        .hero-section .floating-element.middle-left {
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
        }

        .hero-section .floating-element.middle-right {
            top: 45%;
            right: 20px;
            transform: translateY(-50%);
        }

        .hero-section .floating-element.bottom-left {
            bottom: 60px;
            left: 30px;
        }

        .hero-section .floating-element.bottom-right {
            bottom: 40px;
            right: 40px;
        }

        .hero-section .floating-element.center-left {
            top: 60%;
            left: 80px;
        }

        .hero-section .floating-element.center-right {
            top: 55%;
            right: 60px;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(3deg);
            }
            66% {
                transform: translateY(10px) rotate(-2deg);
            }
        }

        /* Testimonials Section Styling */
        .testimonials-section {
            padding: 100px 0;
            background: #f8f9fa;
            text-align: center;
        }

        .testimonials-header {
            display: inline-block;
            background: #ff7043;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        .testimonials-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            line-height: 1.2;
            margin-bottom: 50px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .testimonials-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .testimonial-image {
            flex-shrink: 0;
        }

        .testimonial-image img {
            width: 300px;
            height: 400px;
            border-radius: 20px;
            object-fit: cover;
            border: 4px solid #ff7043;
        }

        .testimonial-content {
            flex: 1;
            text-align: left;
            max-width: 500px;
            padding-left: 40px;
        }

        .testimonial-quote {
            font-size: 1.3rem;
            line-height: 1.6;
            color: #666;
            font-style: italic;
            margin-bottom: 30px;
        }

        .testimonial-author {
            font-size: 1.1rem;
            font-weight: 700;
            color: #ff7043;
            margin-bottom: 5px;
        }

        .testimonial-role {
            color: #888;
            font-size: 1rem;
        }

        .testimonial-nav {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 40px;
        }

        .nav-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            border: 2px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #666;
        }

        .nav-btn:hover {
            background: #ff7043;
            border-color: #ff7043;
            color: white;
            transform: scale(1.1);
        }

        .nav-btn.active {
            background: #ff7043;
            border-color: #ff7043;
            color: white;
        }

        .nav-btn svg {
            width: 20px;
            height: 20px;
        }

        .testimonial-slide {
            display: none;
        }

        .testimonial-slide.active {
            display: flex;
        }

        ' . $statisticsCSS . '


        
        .btn-custom {
            background: #667eea;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            margin: 5px;
        }
        
        .btn-custom:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        
        .btn-outline-custom {
            border: 2px solid white;
            color: white;
            padding: 13px 28px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            margin: 5px;
        }
        
        .btn-outline-custom:hover {
            background: white;
            color: #2c3e50;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-text p {
                font-size: 1.2rem;
            }

            .hero-images {
                height: 180px;
                gap: 30px;
            }

            .image-container.middle {
                width: 150px;
                height: 150px;
            }

            .image-container.left {
                width: 120px;
                height: 120px;
                left: calc(50% - 150px);
            }

            .image-container.right {
                width: 120px;
                height: 120px;
                right: calc(50% - 150px);
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn-hero-primary,
            .btn-hero-secondary {
                width: 200px;
                text-align: center;
            }

            .testimonials-container {
                flex-direction: column;
                gap: 30px;
            }

            .testimonial-content {
                text-align: center;
                padding-left: 0;
            }

            .testimonial-image img {
                width: 250px;
                height: 300px;
            }

            .testimonials-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero-images {
                height: 140px;
            }

            .image-container.middle {
                width: 120px;
                height: 120px;
            }

            .image-container.left {
                width: 100px;
                height: 100px;
                left: calc(50% - 120px);
            }

            .image-container.right {
                width: 100px;
                height: 100px;
                right: calc(50% - 120px);
            }

            .testimonial-image img {
                width: 200px;
                height: 250px;
            }
        }
    </style>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <!-- Floating geometric elements -->
        <div class="floating-element top-left">
            <div class="grid-dots"></div>
        </div>
        
        <div class="floating-element top-right">
            <div class="triangle"></div>
        </div>
        
        <div class="floating-element middle-left">
            <div class="circle"></div>
        </div>
        
        <div class="floating-element middle-right">
            <div class="grid-dots"></div>
        </div>
        
        <div class="floating-element bottom-left">
            <div class="triangle-outline"></div>
        </div>
        
        <div class="floating-element bottom-right">
            <div class="circle-outline"></div>
        </div>
        
        <div class="floating-element center-left">
            <div class="circle"></div>
        </div>
        
        <div class="floating-element center-right">
            <div class="triangle"></div>
        </div>

        <div class="hero-container">
            <div class="hero-content">
                <!-- Centered Text -->
                <div class="hero-text">
                    <h1>Empowering You to Learn Online, Anytime, Anywhere</h1>
                    <p>Discover endless possibilities with our comprehensive online learning platform</p>
                </div>
                
                <!-- Buttons under the text -->
                <div class="cta-buttons">
                    <a href="' . $CFG->wwwroot . '/login/" class="btn-hero-primary">Get Started</a>
                    <a href="' . $CFG->wwwroot . '/course/" class="btn-hero-secondary">Learn More</a>
                </div>
                
                <!-- Images at the bottom with octagonal shapes -->
                <div class="hero-images">
                    <!-- Left image (child1) -->
                    <div class="image-container left">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/child1.png" alt="Child learning" />
                    </div>
                    
                    <!-- Middle image (adult1) - larger and higher -->
                    <div class="image-container middle">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/child2.png" alt="Adult learning" />
                    </div>
                    
                    <!-- Right image (child2) -->
                    <div class="image-container right">
                        <img src="' . $CFG->wwwroot . '/theme/nice/pix/adult1.png" alt="Child with tablet" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Testimonials Section -->
    <div class="testimonials-section">
        <div class="container">
            <div class="testimonials-header">TESTIMONIALS</div>
            <h2 class="testimonials-title">Real Stories, Real Success: What Parents & Students Say!</h2>
            
            <!-- Testimonial 1 -->
            <div class="testimonials-container testimonial-slide active">
                <div class="testimonial-image">
                    <img src="' . $CFG->wwwroot . '/theme/nice/pix/testimonial1.png" alt="Maria D." />
                </div>
                
                <div class="testimonial-content">
                    <div class="testimonial-quote">
                        "VizSchool has been an amazing addition to my child\s education. The virtual classes and interactive lessons keep her engaged, and she\s learning skills beyond the regular school curriculum. The certificates she earns motivate her to keep going!"
                    </div>
                    
                    <div class="testimonial-author">Maria D.</div>
                    <div class="testimonial-role">Parent of a Grade 7 Student</div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonials-container testimonial-slide">
                <div class="testimonial-image">
                    <img src="' . $CFG->wwwroot . '/theme/nice/pix/testomonial3.jpg" alt="James R." />
                </div>
                
                <div class="testimonial-content">
                    <div class="testimonial-quote">
                        "As a working professional, VizSchool\'s flexible schedule allowed me to upskill while managing my career. The quality of instruction and practical projects helped me secure a promotion within 6 months of completing my certification."
                    </div>
                    
                    <div class="testimonial-author">James R.</div>
                    <div class="testimonial-role">Software Developer & VizSchool Graduate</div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonials-container testimonial-slide">
                <div class="testimonial-image">
                    <img src="' . $CFG->wwwroot . '/theme/nice/pix/testimonial2.png" alt="Sarah L." />
                </div>
                
                <div class="testimonial-content">
                    <div class="testimonial-quote">
                        "The interactive learning environment at VizSchool made complex topics easy to understand. The instructors are supportive, and the community of learners creates a collaborative atmosphere that enhances the entire experience."
                    </div>
                    
                    <div class="testimonial-author">James L.</div>
                    <div class="testimonial-role">High School Student</div>
                </div>
            </div>
            
            <div class="testimonial-nav">
                <button class="nav-btn" id="prevBtn" onclick="changeTestimonial(-1)">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                    </svg>
                </button>
                <button class="nav-btn" id="nextBtn" onclick="changeTestimonial(1)">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    ' . $statisticsSection . '

    <script>
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll(\'.testimonial-slide\');
        const totalTestimonials = testimonials.length;

        function showTestimonial(index) {
            testimonials.forEach(testimonial => {
                testimonial.classList.remove(\'active\');
            });
            
            testimonials[index].classList.add(\'active\');
        }

        function changeTestimonial(direction) {
            currentTestimonial += direction;
            
            if (currentTestimonial >= totalTestimonials) {
                currentTestimonial = 0;
            } else if (currentTestimonial < 0) {
                currentTestimonial = totalTestimonials - 1;
            }
            
            showTestimonial(currentTestimonial);
        }

        // Auto-rotate testimonials every 8 seconds
        setInterval(() => {
            changeTestimonial(1);
        }, 8000);
    </script>
    
    <!-- Call to Action Section -->
    <div class="custom-cta">
        
    </div>';

    // Add the custom content to the template context
    $templatecontext['customfrontpagecontent'] = $customcontent;
}

// Render the page template using the provided context data.
echo $OUTPUT->render_from_template('theme_nice/columns2', $templatecontext);