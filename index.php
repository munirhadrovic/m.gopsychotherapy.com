<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function(){
				$('#menu3').slicknav({
					prependTo:'#navigation-menu3'
				});
			});
			$(function(){
				$('#menu4').slicknav({
					prependTo:'#navigation-menu4'
				});
			});
			$(function(){
				$('#menu5').slicknav({
					prependTo:'#navigation-menu5'
				});
			});
			$(function(){
				$('#menu6').slicknav({
					prependTo:'#navigation-menu6'
				});
			});
            $(function(){
                $('#menu7').slicknav({
                    prependTo:'#navigation-menu7'
                });
            });
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site | <a href="http://gopsychotherapy.com/" rel="external">Desktop Site</a></h1>
		</div>
<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/web-design/Family Therapy.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/web-design/Distracted Child.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/web-design/Martial Therapy.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				
					
						<div data-role="collapsible-set">	
							<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
							   <h3>Home</h3>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a>
							</div>
							<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
							   <h3>Services</h3>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">Marital Therapy</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">Family Therapy</a>
							</div>
						</div>						
					
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>

				<div>
					<h2>Welcome</h2>
					<p>Finding the Right Path When trouble seems to follow you ... 

						When apologies for your actions or outbursts are a routine part of your day ... 
						
						It's time to find a different way to deal with life's challenges.  Sometimes we know we're on the wrong path in life. 
						Sometimes our loved ones, teachers, bosses and friends see it before we do.  Yet, it's never too late to change your course.  Glendale Psychological Services is able to guide you to a better place in your relationships, but best of all ... with yourself
						
						Glendale Psychological Services is a clinical group of senior clinicians that provide therapy, psychological testing, and clinical consultations to residents who live in the Western Suburbs of Chicago.  It is our goal to provide the highest of clinical services and help each individual achieve their personal goals.
						
						<i>Our goal is to provide each person with a place to be able to explore issues, conflicts, emotions and behaviors in a non-judgmental environment.</i></p>
						<img src="img/web-design/GoodTherapy-Verified-Seal-blue-195x165.png" alt="SLider" class="images-mobile">
				</div>

		  </div></div>
<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 2 about us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Marital Therapy</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					
					<div>
						<h2>Meet Our Staff:</h2>
					<img src="img/web-design/Craig Hjorth.jpg" alt="SLider" class="images-mobile">	   
					<p><b>Craig W. Hjorth, Ph.D.</b></p>
						<p>Dr. Hjorth is a senior level clinical psychologist who has served as an administrator for different residential treatment centers for children and adolescents in the Chicago, Illinois area.  Most recently he served on the board of the American Association of Residential Treatment Centers.  Presently, he consults with various programs helping them to design and train staff in trauma focused treatment.
						Craig has worked directly with children and adults in out-patient, in-patient, and residential settings.  Dr. Hjorth believes that one of the main tasks of therapy is to support individuals as they learn to become more congruent with their thoughts and emotions in order to learn new adaptive behaviors that will serve them well in school and work.
						Dr. Hjorth has extensive experience with ADD children, adults, and families. He is attuned to individuals with difficulties in concentration and behavior, and specializes in teaching adaptive skills to those who need extra guidance in various settings, especially academic based environments.
						Dr.Hjorth has also had extensive experience working with victims of trauma and consulting with  trauma focused programs.  His earlier research on abused children has made him acutely aware of the role extreme anxiety on brain development.  
						The resulting post trauma stress is difficult to manage whether a child or adult. Most recently returning veterans have experienced such intense stress.  Currently Dr. Hjorth 
						is weekly consulting with Dr. Bruce Perry one of the leading experts on trauma.</p>
					<hr>
					<img src="img/web-design/Erin Redfern.jpg" alt="SLider" class="images-mobile">	   
					<p><b>Erin Redfern, MA, LPC</b></p>
						<p>Erin Redfern (Licensed Professional Counselor) holds a Master’s Degree in Counseling Psychology from Lewis University.  Erin’s clinical experience includes treatment for substance abuse, 
						mestic violence, sexual assault, child abuse, anxiety, depression, trauma recovery, anger management, and more.  She possesses experience working in leadership roles in residential 
						settings as well as with individuals in the adult justice system.  Her experience also includes crisis prevention, intervention, in home counseling and vocational training with adults 
						with developmental disabilities as well as experience working with individuals with disorders on the autism spectrum.  
						She has worked with all ages of clients from young children to adults.</p>
						<p><i>Contact us for more info</i></p>
					</div>
				</div>

			</div>	</div>
<!-- page 2 about us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Marital Therapy</a></li>
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
	</div>
<!--contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- page seo  Individual Psychotherapy ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
								<li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Marital Therapy</a></li>
								<li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
								<li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
								<li><a href="#page6" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
							</ul>
					</section>
					<img src="img/web-design/Distracted Child.jpg" alt="SLider" class="images-mobile">	   

					<div>
					<h2>Individual Psychotherapy:</h2>
						<p>Glen Oaks is a Safe Place for people of all ages and backgrounds to explore issues, conflicts, emotions and behaviors. 
						Individual psychotherapy is based on the mutual relationship between the therapist and the patient.  Through this relationship, 
						conflicts are examined and resolved by utilizing new responses and behaviors. 
						We offer our clinical experience to individuals who are confronting emotional issues interfering with daily functioning.  
						You can be confident that only the most effective 
						and up-to-date testing and treatments are engaged to help you and your loved ones find the right path.</p>
						
						<h2>Treatment issues can include:</h2>
						<ul>
							<li>Anger Management</li>
							<li>Attention deficit issues</li>
							<li>Emotional conflicts interfering with learning</li>
							<li>Divorce mediation</li>
							<li>Marriage adjustment</li>
							<li>Depression</li>
							<li>Anxiety management</li>
							<li>Low self-esteem</li>
							<li>Self-destructive behaviors</li>
							<li>Employment issues</li>
							<li>Parent-child conflicts</li>
							<li>Post-traumatic stress disorder</li>
						</ul>
						
						<h2>Anger Management:</h2>

						<p>(Information coming soon)</p>
						<img src="img/web-design/Anger Management.jpg" alt="SLider" class="images-mobile">
					</div>
					
				</div>
			</div>
		
		</div>
<!-- page seo Individual Psychotherapy ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- page 3 Martial Therapy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page3" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu3">
						<ul id="menu3" class="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>							
							<li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
							<li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
							<li><a href="#page6" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					
					<img src="img/web-design/Martial Therapy.jpg" alt="SLider" class="images-mobile">	   

					<div>
						<h2>Martial Therapy:</h2>
						<p>Our goals when working with couples is to assist in identifying and resolving the issues that prevent their relationship from continuing to grow.  
						We will help the couple work together to find the happiness that first brought them together with a supportive and goal-directed approach. </p>
					<ul>
						<li>Infidelity</li>
						<li>Addictive behavior</li>
						<li>Couples Considering Divorce</li>
						<li>Boredom</li>
						<li>Lack of Appreciation &/or Affection</li>
						<li>Improve Communication</li>
						<li>Previous Unsuccessful Attempts at Marital Counseling</li>
						<li>Life Changes and Transitions</li>
						<li>Coping with Divorce</li>
						<li>Developing Cohesive parenting Strategies</li>
						Resolving Financial and Budget Conflicts
					</ul>
					<hr>
					</div>
				</div>

			</div>	
				
				
		</div>
<!-- page 3 Martial Therapy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 4 Family Therapy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page4" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu4">
						<ul id="menu4" class="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>							
							<li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Martial Therapy</a></li>
							<li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
							<li><a href="#page6" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					
					<img src="img/web-design/Martial Therapy.jpg" alt="SLider" class="images-mobile">	   

					<div>
						<h2>Family Therapy:</h2>
						<p>Glendale Psychological Services is a specialized provider for quality counseling services for children, adolescents, couples, and families.</p>
					<ul>
						<li>Family Therapy</li>
						<li>Child Counseling, including Play Therapy and other Non-Verbal Modes of Therapy</li>
						<li>Adolescent Counseling</li>
						<li>Skill Building with Children who have Developmental Delays</li>
						<li>Children who have been Diagnosed with an Autism Spectrum Disorder</li>
						<li>Social Skill Development - Children and Adolescents</li>
						<li>Anger Management Skills - Children and Adolescents</li>
						<li>Coping with Divorce</li>
						<li>Collaboration in Educational Planning</li>
						<li>Academic Difficulties</li>
						<li>Coping with Past Traumas</li>
						<li>Group Therapy</li>
					</ul>
					<hr>
					<p>When working with children and adolescents, we strive to help young people learn to manage the challenges in their lives that prevent them from achieving their potential.  
					We will join with the child and the family in an exploration of the challenges they are facing, and we will then provide goal-directed treatment 
					that will assist the entire family in achieving their stated objectives.</p>
					<ul>
						<li>Parenting Classes</li>
						<li>Parenting Skills for Challenging Behaviors</li>
						<li>Support of Parents going through Divorce</li>
						<li>Stress Management and Wellness seminars for Employees</li>
						<li>Training for staff on how to provide behavioral interventions to Children and Adolescents with Special Needs.</li>					
					</ul>
					<hr>
					</div>
				</div>

			</div>	
				
				
		</div>
<!-- page 4 Family Therapy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 5 Psychological Testing ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page5" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu5">
						<ul id="menu5" class="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>							
							<li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Martial Therapy</a></li>
							<li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
							<li><a href="#page6" data-transition="<?php echo $transitionefect ?>">ADHD Resources</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					
					<img src="img/web-design/Martial Therapy.jpg" alt="SLider" class="images-mobile">	   

					<div>
						<h2>Psychological Testing</h2>
						<p>Psychological testing is used to assist in forming a diagnosis, treatment planning and treatment goals.  A battery of tests are given to measure intellect,
						 learning styles and personality traits.  
						No one test result should be seen as significant but rather a composite of similar results are used to form conclusions.</p>
						<p>Our skilled and compassionate psychologists will provide a complete evaluation of the presenting concerns, integrating information from multiple sources to formulate a complete assessment.  
						The client and family will then be provided with conclusions and recommendations that will assist them in managing the identified stressors.</p>
						<p>Listed below is a comprehensive list of services we offer our clients. Please contact us for more info.</p>
					<ul>
						<li>Diagnostic Testing</li>
						<li>Developmental Assessments and Evaluations for Autism Spectrum and Pervasive Developmental Disorders</li>
						<li>Neurological Testing</li>
						<li>Behavioral Assessments for children with Sensory Integration Disorders</li>
						<li>Children who have been Diagnosed with an Autism Spectrum Disorder</li>
						<li>Attention Deficit Disorder Evaluations</li>
						<li>Achievement Testing</li>
						<li>Projective/Emotional Testing</li>
						<li>Treatment Planning</li>
						<li>Comprehensive educational assessments to assist families in creating or re-evaluating Individualized Education Plans or 504 plans.</li>
					</ul>
					<hr>
					
					</div>
				</div>

			</div>	
				
				
		</div>
<!-- page 5 Psychological Testing///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 6 ADHD Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page6" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu6">
						<ul id="menu6" class="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>
							<li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Martial Therapy</a></li>							
							<li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
							<li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>					  

					<div>
						<h2>Website Links:Thank you for visiting us! Here are a few of the sites around the web that we recommend.</h2>
						<hr>
						<p>Eastern Healing</p>
						<p><a href="www.easternhealing.org">www.easternhealing.org</a></p>
						<p>Oaktree Wellness</p>
						<p><a href="www.oaktreewellness.com">www.oaktreewellness.com</a></p>
						<p>Oaktree Wellness Center recognizes your mental, emotional, and physical states must all be part of a comprehensive treatment. 
						We strive to find the underlying cause of your condition so the treatment will have a lasting effect.</p>
						<p>Wallace Farms</p>
						<p><a href="www.wallacefarms.com">www.wallacefarms.com</a></p>
					<hr>
					<h2>ADHD Resources:</h2>
					<hr>
					<p><a href="http://gopsychotherapy.com/PDF/The%20Ideal%20Classroom.pdf">The Ideal Classroom For An ADHD Child</a></p>
					<p><a href="http://gopsychotherapy.com/PDF/A%20Primer%20Of%20Warning%20Signs.pdf">A Primer Of Warning Signs To Help Teachers Identify Psychological Problems In Students</a></p>
					<hr>
					<p>Disclaimer: The information provided on this website is for educational purposes and is not intended to provide medical advice or treatment or to substitute for the advice of your 
					primary care physician.  It is recommended that you consult with your physician regularly regarding your health and any signs or symptoms which may require medical attention.  
					The hyperlinks listed above will require that you leave this website prior to entering the selected site.  The accuracy of information is not guaranteed. </p>
					<hr>
					</div>
				</div>

			</div>	
				
				
		</div>
<!-- page 6 ADHD Resources///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- page 7 Preview ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="page7" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu7">
                        <ul id="menu7" class="menu">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Martial Therapy</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Family Therapy</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Psychological Testing</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>

                    <div>
                        <p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
                        <hr/>
                        <p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>

                    </div>
                </div>

            </div>


        </div>
        <!-- page 7 preview ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--page succes ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
