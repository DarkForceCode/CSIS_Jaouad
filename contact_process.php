<?php include('header.php');
	  include ('global.php'); 
	  include ('jwu_mail.php')?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								Thank you!!
							</h2>
							<!-- SEND Email Process -->
							
							<?php
								$firstname   = $_POST["firstname"];
								$lastname 	 = $_POST["lastname"];
								
								$email = $_POST["email"];

								$telephone = $_POST["telephone"];
								$comment = $_POST["comment"];
										

								//Error Message START
								$errors = array();
								
						
								if($firstname == "")
								{
									$errors["firstname"] = "first name cannot be blank.<br />";
								}
								
								if($lastname == "")
								{
									$errors["lastname"] = "last name cannot be blank.<br />";
								}
								
								if($email == "")
								{
									$errors["email"] = "Email cannot be blank young jedi...Use your brain!! <br />";
								}
								
								if ($error["firstname"] != "")
								{
									include("register.php");
									die();
								}
								
								//END of Message Error	
								
								
								//PRINT VALIDATION
								echo $firstname . " " . $lastname . "<br />";
								
								echo $email . "<br />";
								echo $telephone . "<br />";
								
								echo $comment;
							
								
								//SEND EMAIL
								$message = 
								$to = "zaj210@jwu.edu";
								$subject = "Follow the Dark Force";
								$message = "";
								$message .= $firstname . " " . $lastname . " with the phone number: " .$telephone. " has sent you the following comment(s): <br /><br />";
								$message .= $comment . "<br />";
								
								jwu_mail($to, $subject, str_replace("<br />", "\n", $message));
								
								//END of SEND EMAIL
								
							?>
							<br />
							<br />
							<br />
							<a href="index.php" class="button button-gray">Go Back to Home Page</a>
							
						</div>
						<!-- END of SEND Email Process -->

						<br class="clear" />
					</div>
					<br class="clear" />
				</div>
			</div>
			<div id="copyright">
				&copy; Vote for Darth Vader | <i>The Dark Force Lord</i>
			</div>
		</div>
		
		<?php include('footer.php'); ?>