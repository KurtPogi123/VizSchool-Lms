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
    align-items: flex-end;  /* align child1 and child2 to bottom */
    gap: 80px;              /* more gap for spacing */
    flex-wrap: wrap;
    margin-top: 40px;
}

        /* Octagonal shape containers */
   .image-container {
    position: relative; /* relative so child elements (images, backgrounds) stay inside */
    width: 180px;
    height: 240px;
    border-radius: 30% / 20%; /* oval-like shape to match your reference */
    overflow: hidden; /* crop child image */
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
    inset: 0;                       /* fill entire container */
    border-radius: 30% / 20%;
    z-index: 1;
}

    .image-container img {
    position: relative;
    z-index: 2;                     /* above the colored background */
    width: 100%;
    height: 100%;
    object-fit: cover;              /* keep aspect ratio, fill container */
}

      .image-container.middle {
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50%, -30%); /* center horizontally and lift it up */
    width: 250px;
    height: 250px;
    z-index: 2;                      /* ensure it overlaps cleanly */
}

      .image-container.middle::before {
    background: #FFE07D;            /* yellow */
}

        /* Left image (child1) - purple octagon */
        .image-container.left {
            width: 250px;
            height: 250px;
            left: calc(50% - 280px);
            transform: translateX(-50%);
            bottom: 20px;
        }

      .image-container.left::before {
    background: #D3B1E5;            /* purple */
}

        /* Right image (child2) - green octagon */
        .image-container.right {
            width: 250px;
            height: 250px;
            right: calc(50% - 280px);
            transform: translateX(50%);
            bottom: 20px;
            animation-delay: -4s;
        }

      .image-container.right::before {
    background: #9AEBA3;            /* mint green */
}

        /* Floating geometric elements - positioned around the images */
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

        /* Grid dots */
        .grid-dots {
            width: 40px;
            height: 40px;
            background: url("data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Ccircle cx=\'6\' cy=\'6\' r=\'2\'/%3E%3Ccircle cx=\'20\' cy=\'6\' r=\'2\'/%3E%3Ccircle cx=\'34\' cy=\'6\' r=\'2\'/%3E%3Ccircle cx=\'6\' cy=\'20\' r=\'2\'/%3E%3Ccircle cx=\'20\' cy=\'20\' r=\'2\'/%3E%3Ccircle cx=\'34\' cy=\'20\' r=\'2\'/%3E%3Ccircle cx=\'6\' cy=\'34\' r=\'2\'/%3E%3Ccircle cx=\'20\' cy=\'34\' r=\'2\'/%3E%3Ccircle cx=\'34\' cy=\'34\' r=\'2\'/%3E%3C/g%3E%3C/svg%3E");
        }

        /* Triangles */
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

        /* Circles */
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

        /* Position floating elements around the hero section */
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

        /* Additional sections styling */
        .custom-features {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 20px;
        }
        
        .custom-cta {
            background: #2c3e50;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
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

        /* Responsive design */
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

            /* Adjust positioning for mobile */
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
    
    <!-- Features Section -->
    <div class="custom-features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">📚</div>
                        <h3>Quality Education</h3>
                        <p>Learn from industry experts with our comprehensive courses designed for real-world applications.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">🎯</div>
                        <h3>Personalized Learning</h3>
                        <p>Tailored learning paths that adapt to your pace and learning style for maximum effectiveness.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">🏆</div>
                        <h3>Certification</h3>
                        <p>Earn recognized certificates upon completion to boost your career and professional growth.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">👥</div>
                        <h3>Community Learning</h3>
                        <p>Join a vibrant community of learners and collaborate on projects, share ideas, and grow together.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">📱</div>
                        <h3>Mobile Friendly</h3>
                        <p>Access your courses anywhere, anytime with our responsive design that works on all devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Call to Action Section -->
    <div class="custom-cta">
        <div class="container">
            <h2>Ready to Start Your Learning Journey?</h2>
            <p class="lead">Join thousands of students who are already transforming their careers with VizSchool</p>
            <div class="mt-4">
                <a href="' . $CFG->wwwroot . '/login/" class="btn-custom">Get Started</a>
                <a href="' . $CFG->wwwroot . '/course/" class="btn-outline-custom">Browse Courses</a>
            </div>
        </div>
    </div>';
    
    // Add the custom content to the template context
    $templatecontext['customfrontpagecontent'] = $customcontent;
}

// Render the page template using the provided context data.
echo $OUTPUT->render_from_template('theme_nice/columns2', $templatecontext);