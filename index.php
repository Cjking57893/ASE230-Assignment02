<?php
// INSERT DATA HERE.

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
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
					'achievements' => [
						'Stock was always ran on time',
						'I saw that stock rotations were done regularly',
						'I did weekly cycle counts to ensure our inventory numbers were correct'
					],
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
					'achievements' => [
						'',
						'',
						''
					],
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
				//scool 1
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
		],
		[
			'img_path' => '',
			'firstname'=>'Cody',
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
					
					'achievements' => [
						'',
						'',
						''
					],
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
				//scool 1
				[
					'study'=> '',
					'school_name'=> '',
					'start_and_end_dates' => ''
				],
				//scool 2
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
					'achievements' => [
						'',
						'',
						''
					],
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
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$team_members[0]['firstname'].' '.$team_members[0]['lastname']?></h1>
							    <div class="title mb-3"><?=$team_members[0]['team_role']?></div>
								<a href="detail.php?index=<?=0?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Member 2 name</h1>
							    <div class="title mb-3">Member 2 role</div>
								<a href="#<?php /*LINK_TO_MEMBER_2_PAGE*/ ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Member 3 name</h1>
							    <div class="title mb-3">Member 3 role</div>
								<a href="#<?php /*LINK_TO_MEMBER_3_PAGE*/ ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>

			<header class="resume-header mt-4">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Member 4 name</h1>
							    <div class="title mb-3">Member 4 role</div>
								<a href="#<?php /*LINK_TO_MEMBER_1_PAGE*/ ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

