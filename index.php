<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
include('include/config.php');
// Code user Registration
if(isset($_POST['submit'])){
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$query=mysqli_query($con,"insert into messages(fullname,email,message) 
values ('$name','$email','$message')");

if($query){
	echo "Message sent successfully ";
}
else{
echo $name;
echo $email;
echo $message;
echo("Error description: " . mysqli_error($con));

}
}
?>
	
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Blood Bank System</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    </head>
    
    <body>
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Blood Bank System</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            
                            <li class="scroll-to-section"><a href="#Procedure">Procedure</a></li>
                            <li class="scroll-to-section"><a href="#frequently-question">FAQ</a></li>
							<li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Become A Donar</a>
                                <ul>
                                    <li><a href="users-login.php">Login</a></li>
                                    <li><a href="users-signup.php">Signup</a></li>
                                    <li><a href="users-donor-form.php">Donate Blood</a></li>
                                    <li><a href="users-requestblood.php">Need A Blood</a></li>
                                </ul>
                            </li>
							<li class="submenu">
                                <a href="javascript:;">Calculation</a>
                                <ul>
                                    <li><a href="BMI.php">BMI</a></li>
                                    <li><a href="BMR.php">BMR</a></li>
									<li><a href="Sleep_Efficiency.php">Sleep_Eff</a></li>   										
                                </ul>
                            </li>
                            
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container-fluid">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Do you know about <strong>Donation ? </strong></h1>
                        <p>Committed blood donors regularly eliminate excess iron. The Centers for Disease Control even recommends the removal of red blood cells as the preferred treatment for patients with excess iron in their blood. By reducing iron in the blood cells, blood donation can also reduce the risk of heart attacks and strokes.</p>
                        <a href="#about" class="main-button-slider">Find Out More</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="assets/images/slider-icon.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="Procedure">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>What is the procedure when I donate blood?</h5> <br>
                    </div>
                    <div class="left-text">
                        <p>Firstly, you will be asked to provide personal details such as your name, address, age, weight, ID number and/or date of birth. A medical history is taken by means of a written questionnaire.
						   These questions are designed to ascertain that it is medically safe for you to donate blood and that the recipient of your blood will not be harmed in any way. In addition, very personal questions relating to your mode of life and sexual behaviour are asked to ascertain that you are not at increased risk of potentially transmitting infection through transfusion. People are asked to exclude themselves from blood donation if any of the deferral criteria apply to them.
						   A finger prick test is performed in order to ascertain if your haemoglobin level is within a safe range for donation purposes. Potential donors will be permitted to donate only if this measurement is within the defined, acceptable range. If everything is in order you will proceed to donate your blood.</p>
							<br>
						<a href="#about2" class="main-button">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container-fluid">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>You can easily Donate & Get a blood with our website</h5>
                    </div>
                    <p>Follow these steps to become a blood donar.</p>
                    <ul>
                        <li>
                            <img src="assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h6><a href = "users-login.php" style="Color:black;" >Members : Login! </a></h6>
                                <p> <a href = "users-login.php" style="Color:black;" >You can easily <b>login with our system</b> and manage your blood donation history</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h6><a href = "users-requestblood.php" style="Color:black;" >Need A Blood!</a></h6>
                                <p><a href = "users-requestblood.php" style="Color:black;" >You have can easily <b>Get A Blood</b> from our system.</a></p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h6><a href = "users-donor-form.php" style="Color:black;" >Become A Donar!</a> </h6>
                                <p><a href = "users-donor-form.php" style="Color:black;" >If you have an Account , You can apply to <b>donate your blood via our system!</b></a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Frequently Question Start ***** -->
    <section class="section" id="frequently-question">
        <div class="container-fluid">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading">
                        <p>Common question and answers !</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12">
                    <h5>Can donating blood make you tired?</h5>
                    <div class="accordion-text">
                        <p>After donating blood, it's likely you'll experience some physical weakness, especially in the arm into which the needle was injected. For that reason, the nurses will advise you to avoid intense physical activity or heavy lifting for five hours after you donate blood.</p>
                        <p>If you have any doubts about blood donation , You can directly contact us and you van get more infomation from us </p>
                        <span>Email: <a href="#">shajeeshajeeth31@gmail.com</a><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Why should I donate blood?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>The need for blood affects us all. Eight out of ten people need blood or blood products at some time in our lives. One out of every ten patients in hospital requires blood transfusion. 
                                    <br><br>
                                    The number of blood donations that patients receive depends on their medical condition. Although an average of three donations is transfused to a patient, some patients require many more.
									   Blood is in constant demand for the treatment of patients involved in accidents, patients with anaemia, malaria, cancer or a bleeding disorder such as haemophilia. </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Who may donate blood?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Donors should be between the ages of 18 and 65, weigh at least 50 kg and not have donated blood within the previous 12 weeks (for males). The criteria, which are applied before a person can be accepted as a blood donor, are very strict. Not everyone can be a blood donor. This is designed to protect the health of the donor as well as the health of the patient who receives the blood.
									   For example, people who have certain medical conditions or who are taking certain types of medication are not permitted to donate blood. People whose sexual behaviour places them at increased risk of transmitting infections through transfusion are also not permitted to donate. If any of the deferral criteria apply to you, or if for any reason you think that your blood may be unsafe to transfuse to a patient, you are advised not to donate.
									   The mission of the blood transfusion service is to provide all patients with sufficient, safe, quality blood and blood products. If you are in any doubt about whether you should donate blood, please discuss it with a staff member. We know it can be disappointing if you are not able to give blood. However, we hope you will understand that our overriding responsibility is to ensure the safety of donors and the safety of the blood for patients.
                                    <br><br>
                                    Praesent ut placerat turpis, vel pellentesque dolor. Sed rutrum eleifend tortor, eu luctus orci sagittis in. In blandit fringilla mollis.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>What do I get in return for my blood donation?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Blood is donated voluntarily, freely and without payment or reward of any kind. Blood must only be donated in the spirit of altruism for patients who need blood or blood products as part of their medical treatment. Blood is donated as an act of goodwill towards a fellow human being and nothing should be expected in return for giving this gift of life.
									   What you do get in return is a physical and emotional sense of well-being and the knowledge that you have helped to save someone's life. We all hope that someone will do the same for us when we need a blood transfusion. 
                                    <br><br>
                                    Etiam et enim finibus, feugiat massa efficitur, finibus sapien. Sed cursus lacus quis arcu scelerisque, eget ornare risus maximus. Aenean non lectus id odio rhoncus pharetra.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Is there a substitute for blood?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Blood is made up of different components and each component has its own important function. The main function of red blood cells is to carry oxygen to the tissues and remove carbon dioxide.
									   The main function of platelets and the coagulation factors is to prevent and stop bleeding. Each one of these blood components has an important role, and any one of these components may be used in the treatment of patients with certain medical conditions.
									   Substances designed to carry oxygen, such as a haemoglobin solution prepared from cattle's blood, are currently being evaluated. This is available in very limited quantities internationally. These oxygen carriers circulate in the bloodstream for a short period and are usually used only as an interim measure.
									   In cases of trauma or during surgical operations, the volume of blood which is lost by the patient may initially be replaced with synthetic solutions (crystalloid or colloid solutions) such as normal saline. These solutions are not recognized as ???blood substitutes??? but are blood volume expanders. They do not carry oxygen. They are frequently used in the initial treatment of patients, for example in the ambulance or in the operating theatre, while blood is being obtained from the blood bank.
									   There is no substitute for blood. When the patient's haemoglobin level, platelet level or coagulation factor level falls below a critical point, blood transfusion is the only option. Patients rely on voluntary blood donors to provide red blood cells, platelets and coagulation factors, to meet their medical needs.
                                    <br><br>
                                    Aenean fermentum eget turpis egestas semper. Sed finibus mollis venenatis. Praesent at sem in massa iaculis pharetra.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>What does it mean to have a rare blood type?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Every person has an ABO and rhesus blood group: i.e. group A, B, AB, or O and RhD negative or RhD positive. In addition to these ABO blood groups, people's red blood cells consist of many other antigens as part of their red cell structure.
									   Occasionally, people have an unusual, specific red cell antigen. Alternatively, some individual's red cells lack an antigen which is common to most people. This would be recognised as a ???rare??? blood type. Some patients have antibodies against a specific blood type and in these circumstances it may be difficult to find blood from a regular blood donor which is compatible with that of the rare type of the patient.
									   Before every blood transfusion, compatibility tests are performed on the blood of the patient and on the blood of the donor, to ensure that the transfused blood will not cause any untoward reaction in the recipient.
									   First-time blood donors are notified by mail of their ABO blood group and RhD type, after the blood has been tested in the BTS laboratory.
                                    <br><br>
                                    Sed nec ex nec tortor fermentum sollicitudin id ut ligula. Ut sagittis rutrum lectus, non sagittis ante euismod eu. </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>How does the BTS meet the need for rare blood types?</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>If a patient who needs a blood transfusion is identified by the BTS as having an unusual blood type, blood that is compatible with that of the patient will be identified from the panel of regular blood donors.
									   A panel of blood donors who have rare blood types has been compiled. This is the so-called ???rare blood donor file???. Blood from donors on this panel can be obtained whenever needed.
									   In exceptional cases, where compatible blood cannot be obtained in this country, blood is obtained from another country through the international rare blood donor file. Similarly, on rare occasions, blood from a donor with a rare blood group from one country may be sent to another country to be transfused to a specific patient.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Frequently Question End ***** -->


    <!-- ***** Contact Us Start ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="map">
                      <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <img src="images/123.jpeg" width="100%" height="547px" frameborder="0" style="border:0" allowfullscreen>
                    </div>
                </div>
                <!-- ***** Contact Map End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <input type="submit" id="form-submit" name = "submit" class="main-button">
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; Shajeepan 
                
                Design By : <a rel="nofollow" href="facebook.com/shajeeshajeeth">Shajeepan</a></p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
  </body>
</html>