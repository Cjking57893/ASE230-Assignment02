<?php

	$team_members=[
		[
			'img_path' => 'assets/images/profile.jpg',
			'firstname'=>'Chris',
			'lastname'=>'King',
			'team_role' => 'Programmer',
			'email' => 'csking8639@gmail.com',
			'phone_number' => '(812) 584-7514',
			'linked_in' => 'linkedin.com/in/chrisking2026/',
			'github' => 'github.com/CSKing02',
			'website' => 'csking.com',
			'bio'=> 'I am a student currently studying cybersecurity at Northern Kentucky University. Here I have taken many classes over data structures, 
								object oriented programming, web development, linux system administration, and networking. I am also part of a research project where we are currently 
								building an AI therapist. This project has taught me many useful technologies to use in application development, such as bootstrap and PHP. Before this I 
								studied at Southeastern Career Center, studying computer repair and networking.  There I learned how to troubleshoot PCs, how to create and run cat 5 and 
								cat 6 cables, how set up networks, different network arcitectures, and how data is transmitted over a network. I do not have any work experience in my desired field, 
								but I hope to get an internship next summer',
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'Assistant Store Manager',
					'company_name'=> 'Family Dollar',
					'start_and_end_dates'=> '2020 - 2021',
					'job_summary'=> 'I was responsible for overseeing staff, ensuring that dailey tasks were done by the end of the day, 
													counting out each cashiers cash register and the safe, taking the dailey deposit to the bank, and closing and opening the store.',
					'achievement_header'=> 'During my time at Family Dollar I was an effective leader',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Stock was always ran on time',
						'I saw that stock rotations were done regularly',
						'I did weekly cycle counts to ensure our inventory numbers were correct'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'POS system'
					]
				]
			],
			'skills' => [
				'python',
				'Java',
				'JavaScript',
				'HTML/CSS/SASS',
			],
			'other_skills' => [
				'Bash Scripting',
				'Code Review',
				'Git',
				'Wireframing',
				'Bootstrap',
				'Networking'
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//school 1
				[
					'study'=> 'Computer Repair & Networking',
					'school_name'=> 'Southeastern Career Center',
					'start_and_end_dates' => '2018 - 2020'
				],
				//school 2
				[
					'study'=> 'BS Cybersecurity',
					'school_name' => 'Northern Kentucky University',
					'start_and_end_dates' => '2023 - Present'
				]
			],
			'languages' => [
				'english'
			],
			'interests'=> [
				'Video Game Development',
				'Skateboarding',
				'cooking'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'Build an AI Therapist',
					'project_goal' => 'We wanted to create an AI driven platform 
											that could provide assistance to those struggling and unable to get traditional help.
											The project uses Llama 3.1 for the AI, and we are building the front end using bootstrap. This is still in active development.',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => '3D Platformer',
					'project_goal' => 'I set out to create a game to explore how certain game mechanics work, such as a camera, movement system, and map generation.
											I have yet to release anything publicly, but hope to upload a demo online by the end of this year.'
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => 'Creating a Computer Lab',
					'project_goal' => 'During my time at Southeastern Career Center I was part of a project that involved creating a computer lab for the school. 
											We, the second year students, ran  cables, set up the hardware, and created an image to install windows to the PCs.'
				]
			],
		],
		[
			'img_path' => '',
			'firstname'=>'Alanna',
			'lastname'=>'Evans',
			'team_role' => 'Programmer',
			'email' => 'evansa27@mymail.nku.edu',
			'phone_number' => '(513)313-4015',
			'linked_in' => 'www.linkedin.com/in/alanna-evans-095b02263',
			'github' => 'https://github.com/evansa27',
			'website' => 'n/a',
			'bio'=> 'My name is Alanna Evans, and I am a senior working on my Bachelor of Science in Cybersecurity at Northern Kentucky University. I am also minoring in Computer Science and Computer Forensics as well. I have had multiple cybersecurtrity based internships at GE Aerospace. During my time here I worked on the Insider Threat and Data Protection Team, as well as the Cyber Intel and Active Defense Team. I have recently accpeted a postion as a DTLP within the company after I graduate. A few fun facts about me is that I recently traveled outside of the country for the first time, and I love going to concerts.',
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'Detection Engineer',
					'company_name'=> 'GE Aerospace',
					'start_and_end_dates'=> 'May 2024 - August 2024',
					'job_summary'=> '-Led an intern-run threat hunt in which teamwork and collaboration were used to determine if a predetermined threat was a concern within the GE Aerospace network with a focus on certain tactics, techniques, and procedures
							-Acted as a threat intel analyst and used Open-Source Intelligence to work through the threat intel pipeline and complete tasks such as conducting open-source intelligence, fulfilling 1 to 2 reports a week, and becoming familiar with threat intelligence tech stacks
							-Completed professional development tasks such as attending educational meetings, networking events, and practicing leadership skills by hosting a staff meeting for digital technology interns and preparing for the CIO as a guest speaker',
					'achievement_header'=> 'These are some of the achievements I have accomplished during this internship.',
					//array contains a list of your achievements on the job
					'achievements' => [
						'Identified ways to improve GE\'s security',
						'Got hands-on cyber experience',
						'Identified ways to improve processes'
					],
					//array contains each technology used on the job
					'technologies_used' => [
						'OpenCTI',
						'Cybersecurity Fundamentals',
						'BDEP',
					]
				]
			],
			'skills' => [
				'Leadership',
				'HTML',
				'CSS',
				'Cybersecurity Knowledge & Fundamentals',
			],
			'other_skills' => [
				'Word',
				'Excel',
				'PowerPoint',
				'Teamwork',
				'Communication',
				'Negotiation'
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//school 1
				[
					'study'=> 'Bachelor of Science in Cybersecurity',
					'school_name'=> 'Northern Kentucky University',
					'start_and_end_dates' => '2021 - 2025'
				],
				//school 2
				[
					'study'=> 'High School Diploma',
					'school_name' => 'Bethel-Tate High School',
					'start_and_end_dates' => '2017 - 2021'
				]
			],
			'languages' => [
				'English'
			],
			'interests'=> [
				'Hiking',
				'Pool',
				'Video Games'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'VR',
					'project_goal' => 'Worked closely with a professor to create a tour of the College of Informatics through VR',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => 'Cryptography',
					'project_goal' => 'Created a Keyword Cipher Software for a cryptography course.'
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => 'Chutes and Ladders',
					'project_goal' => 'Wrote software in C that plays the game Chutes and Ladders.'
				]
			]
		],
		[
			'img_path' => '',
			'firstname'=>'Cody',
			'lastname'=>'King',
			'team_role' => 'Programmer',
			'email' => 'cody.king04@outlook.com',
			'phone_number' => '606-782-5551',
			'linked_in' => 'linkedin.com/in/codyking57',
			'github' => 'github.com/Cjking57893',
			'website' => 'n/a',
			'bio'=> "Currently I'm attending Northern Kentucky University majoring in Applied Software Engineering. I transferred from a community college after getting my Associate's degree. Some languages I'm proficient in are C#, Javascript, and HTML & CSS. I also have experience using GIT and Github.",
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => 'IT Support',
					'company_name'=> 'Maysville Community and Technical College',
					'start_and_end_dates'=> '2021 - Present',
					'job_summary'=> 'A student worker position in the IT department at Maysville Community and Technical College. Consists of assisting with computer problems, network issues, and printing issues.',
					'achievement_header'=> '',
					//array contains a list of your achievements on the job
					'achievements' => [
						'',
						'',
						''
					],
					//array contains each technology used on the job
					'technologies_used' => [
						''
					]
				],
				//job 2
				[
					'job_title' => 'Work-Based Learning IT Job',
					'company_name'=> 'Bracken County High School',
					'start_and_end_dates'=> '2020 - 2021',
					'job_summary'=> 'A Work-Based learning IT job completed during Senior year of High School. Consisted of assisting students and teachers with computer problems and repairing Chromebooks.',
					'achievement_header'=> '',
					//array contains a list of your achievements on the job
					'achievements' => [
						'',
						'',
						''
					],
					//array contains each technology used on the job
					'technologies_used' => [
						''
					]
				]
			],
			'skills' => [
				'C#',
				'Java',
				'JavaScript',
				'Node.js',
				'HTML/CSS'
			],
			'other_skills' => [
				'',
				'',
				'',
				'',
				'',
				''
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//scool 1
				[
					'study'=> 'BSc Applied Software Engineering',
					'school_name'=> 'Northern Kentucky University',
					'start_and_end_dates' => '2023 - 2026'
				],
				//scool 2
				[
					'study'=> 'ASc Information Technology',
					'school_name' => 'Maysville Community and Technical College',
					'start_and_end_dates' => '2021 - 2022'
				]
			],
			'languages' => [
				'English'
			],
			'interests'=> [
				'Gaming',
				'Running',
				'Movies'
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => 'Midwest Music Site',
					'project_goal' => 'A website to post reviews of concerts.',
				]
			]
		],
		[	
			'img_path' => '',
			'firstname'=>'Tyler',
			'lastname'=>'',
			'team_role' => '',
			'email' => '',
			'phone_number' => '',
			'linked_in' => '',
			'github' => '',
			'website' => '',
			'bio'=> '',
			/*Access in loop using iterator
			*EX: $team_members['job_experience'][$i]['job_title/company_name/job_summary/etc.']
			*/
			'job_experience' => [
				//job 1
				[
					'job_title' => '',
					'company_name'=> '',
					'start_and_end_dates'=> '',
					'job_summary'=> '',
					'achievement_header'=> '',
					//array contains a list of your achievements on the job
					'achievements' => [
						'',
						'',
						''
					],
					//array contains each technology used on the job
					'technologies_used' => [
						''
					]
				]
			],
			'skills' => [
				'',
				'',
				'',
				'',
			],
			'other_skills' => [
				'',
				'',
				'',
				'',
				'',
				''
			],
			/*Access in loop using iterator
			*EX: $team_members['education'][$i]['study/school_name/start_and_end_dates']
			*/
			'education' => [
				//school 1
				[
					'study'=> '',
					'school_name'=> '',
					'start_and_end_dates' => ''
				],
				//school 2
				[
					'study'=> '',
					'school_name' => '',
					'start_and_end_dates' => ''
				]
			],
			'languages' => [
				''
			],
			'interests'=> [
				'',
				'',
				''
			],
			/*Access in loop using iterator
			*EX: $team_members['projects'][$i]['project_name/project_goal']
			*/
			'projects'=> [
				//project 1
				[
					'project_img_path' => '',
					'project_name' => '',
					'project_goal' => '',
				],
				//project 2
				[
					'project_img_path' => '',
					'project_name' => '',
					'project_goal' => ''
				],
				//project 3
				[
					'project_img_path' => '',
					'project_name' => '',
					'project_goal' => ''
				]
			]
		]
	];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Your name's Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Your name</h1>
							    <div class="title mb-3">Your desired job title</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>your@email.com</a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>0123 456 78900</a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/yourlink</a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/yourhandle</a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>yourwebsite.com</a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0">Summarise your education and professional experience here. Add a couple of fun facts. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque congue elit ut nisi vehicula iaculis. Integer porta nisi erat, quis gravida quam dignissim ut. Nullam tincidunt mollis finibus. Vestibulum et diam vel tellus blandit convallis non id mauris. Curabitur feugiat tincidunt ante, ut iaculis sem. Sed eleifend fringilla diam, quis vehicula tellus fringilla sed. In sagittis commodo ipsum pulvinar sagittis. Ut et turpis sit amet erat elementum convallis ac eu ipsum. Aenean varius eget mi in mollis. Integer tempus diam libero, id blandit neque aliquam non. Maecenas eleifend leo ut pellentesque bibendum. Phasellus consectetur facilisis nunc, at ultricies nisi eleifend eget. Fusce molestie et orci non pulvinar. Aenean ac tristique orci, vitae viverra mi.</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Lead Developer</h3>
										        <div class="resume-company-name ms-auto">Startup Hub</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2023 - Present</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
										    <ul>
											    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
											    <li>At vero eos et accusamus et iusto odio dignissimos.</li>
											    <li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
											    <li>Maecenas tempus tellus eget.</li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Angular</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Python</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">PostgresSQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Senior Software Developer</h3>
										        <div class="resume-company-name ms-auto">Google</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2019 - 2023</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">React</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Redux</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MySQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Co-Founder & Lead Developer</h3>
										        <div class="resume-company-name ms-auto">To-do Lists</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2015 - 2019</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
										    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">JavaScript</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Node.js</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Require.js</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/SASS</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Web Developer <small class="text-muted">(Intern)</small></h3>
										        <div class="resume-company-name ms-auto">Amazon</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2014 - 2015</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">Ruby on Rails</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">HTML/LESS</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">MongoDB</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

