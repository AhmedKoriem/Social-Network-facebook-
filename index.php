<?php
	session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Our FaceBook</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script type="text/javascript">
			function validation_registration(){
				var email=document.getElementById("email").value;
				var fname=document.getElementById("firstname").value;
				var lname=document.getElementById("lastname").value;
				var phone=document.getElementById("phonenumber").value;
				var town=document.getElementById("hometown").value;
				var pass=document.getElementById("password").value;
				var Cpass=document.getElementById("confirmpassword").value;
				var pattern1 = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
				var pattern2=/^[a-zA-Z]+$/;
				var pattern3=/^[0-9]+$/;
				if (pattern1.test(email)==false){
					alert("invalid email format!");
					return false;
				}
				else if(pattern2.test(fname)==false){
					alert("first name must be only letters!");
					return false;
				}
				else if(pattern2.test(lname)==false){
					alert("last name must be only letters!");
					return false;
				}
				else if(pattern3.test(phone)==false){
					alert("phone number must be only numbers!");
					return false;
				}
				else if(pattern2.test(town)==false){
					alert("Home town must be only letters!");
					return false;
				}
				else
					return true;
				
			}
		</script>
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                  
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Welcome To  <span>Our FaceBook</span></h1>
				<nav class="codrops-demos">
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index1.php" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email </label>
                                    <input id="useremail" name="email" required="required" type="text" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
								<p>
									<?php if(isset($_SESSION['error1'])){ echo '<h4><strong>'.$_SESSION['error1'].'</strong></h4>'; $_SESSION['error1']="";}?>
							   </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="log_in" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="index1.php" method="post" autocomplete="on" onsubmit="return validation_registration()"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="firstname" class="fname" data-icon="u">First Name</label>
                                    <input id="firstname" name="fname" required="required" type="text" placeholder="Must Be Letters Only" />
                                </p>
								 <p> 
                                    <label for="lastname" class="Lname" data-icon="u">Last Name</label>
                                    <input id="lastname" name="lname" required="required" type="text" placeholder="Must Be Letters Only" />
                                </p>
								 <p> 
                                    <label for="phonenumber" class="Pname" data-icon="u">Phone Number</label>
                                    <input id="phonenumber" name="phone"  type="text" placeholder="Must Be Number Only" />
                                </p>
								 <p> 
                                    <label for="hometown" class="Hfname" data-icon="u">Home Town</label>
                                    <input id="hometown" name="town"  type="text" placeholder="Must Be Letters" />
                                </p>
								<p>
                                    <label for="email" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
								  
                              
								<p>
								
                                    <label for="password" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="confirmpassword" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="confirmpassword" name="confirmpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
								
								
								<p> 
                                    <label for="Birthdaysignup" class="Birthdayname" ><font size="5">Gender</font></label>
                                    
                                </p>
								<p>
								
                                    <label for="male" class="youpasswd" ><font size="2">Male</font>  </label>
                                    <input id="male" value="male" name="gender"  type="radio" checked />
                                </p>
								<p>
								
                                    <label for="female" class="youpasswd" ><font size="2">FeMale</font>  </label>
                                    <input id="female" value="female" name="gender"  type="radio" />
                                </p>
								
								
								<p> 
                                    <label for="Birthdaysignup" class="Birthdayname" ><font size="5">Martial Statue<font size="2">   You Must choose One Only</font></font></label>
                                    
                                </p>
								<p>
								
                                    <label for="passwordsignup" class="youpasswd" ><font size="2">Single</font>  </label>
                                    <input id="passwordsignup" value="single" name="status"  type="checkbox" />
                                </p>
								<p>
								
                                    <label for="passwordsignup" class="youpasswd" ><font size="2">Married</font>  </label>
                                    <input id="passwordsignup" value="Married" name="status" type="checkbox" />
                                </p>
								
								<p>
								
                                    <label for="passwordsignup" class="youpasswd" ><font size="2">engaged</font>  </label>
                                    <input id="passwordsignup" value="engaged" name="status" type="checkbox" />
                                </p>
								
								
								<label for="passwordsignup" class="youpasswd" >Birthday Date (Year-Month-Day)</label>
								<select  name="year">
								
                               <option value="2001">2001</option>
                               <option value="2002">2002</option>
                               <option value="2003">2003</option>
                               <option value="2004">2004</option>
                               <option value="2005">2005</option>
                               <option value="2006">2006</option>
                               <option value="2007">2007</option>
                               <option value="2008">2008</option>
                               <option value="2009">2009</option>
                               <option value="2010">2010</option>
                               <option value="2011">2011</option>
                               </select>
							   -
							   <select  name="month">
							   
                               <option value="01">January</option>
                               <option value="02">February</option>
                               <option value="03">Mars</option>
                               <option value="04">April</option>
                               <option value="05">May</option>
                               <option value="06">June</option>
                               <option value="07">July</option>
							   <option value="08">August</option>
                               <option value="09">September</option>
                               <option value="10">October</option>
                               <option value="11">November</option>
                               <option value="12">December</option>
                               </select>
							   -
							   <select  name="day">
							   
                               <option value="01">1</option>
                               <option value="02">2</option>
                               <option value="03">3</option>
                               <option value="04">4</option>
                               <option value="05">5</option>
                               <option value="06">6</option>
                               <option value="07">7</option>
                               <option value="08">8</option>
                               <option value="09">9</option>
                               <option value="10">10</option>
                               <option value="11">11</option>
							   <option value="12">12</option>
                               <option value="13">13</option>
                               <option value="14">14</option>
                               <option value="15">15</option>
                               <option value="16">16</option>
                               <option value="17">17</option>
                               <option value="18">18</option>
                               <option value="19">19</option>
                               <option value="20">20</option>
                               <option value="21">21</option>
                               <option value="22">22</option>
							   <option value="23">23</option>
                               <option value="24">24</option>
                               <option value="25">25</option>
                               <option value="26">26</option>
                               <option value="27">27</option>
                               <option value="28">28</option>
                               <option value="29">29</option>
                               <option value="30">30</option>
                               <option value="31">31</option>
                               </select>
							   <p> 
                                    <label for="Phonesignup" class="Pname" data-icon="u">About me</label>
                                    <input id="Phonesignup" name="aboutme"  type="text" placeholder="Feel Free" />
                                </p>
							   <p>
									<?php if(isset($_SESSION['error2'])){ echo '<h4><strong>'.$_SESSION['error2'].'</strong></h4>'; $_SESSION['error2']="";}?>
							   </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign Up" name="sign_up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
							
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>