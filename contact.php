<?php include('header.php');
	  include ('global.php'); 
	  include ('jwu_mail.php')?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								Send Me a Message!!
							</h2>
							<!-- FORM EMAIL -->
							<form action="contact_process.php" method="POST">
								<table>
									<tr>
										<td valign="top">
											<label for="firstname">First Name *</label>
										</td>
										<td valign="top">
											<input  type="text" name="firstname" maxlength="50" size="30" value="<?php echo $firstname;?>">
										</td>
									</tr>
		 
									<tr>
										<td valign="top">
											<label for="lastname">Last Name *</label>
										</td>
										<td valign="top">
											<input  type="text" name="lastname" maxlength="50" size="30" value="<?php echo $lastname;?>">
										</td>
									</tr>
									<tr>
										<td valign="top">
											<label for="email">Email Address *</label>
										</td>
										<td valign="top">
											<input  type="text" name="email" maxlength="80" size="30" value="<?php echo $email;?>">
										</td>
		 
									</tr>
									<tr>
										<td valign="top">
											<label for="telephone">Telephone Number</label>
										</td>
										<td valign="top">
											<input  type="text" name="telephone" maxlength="30" size="30" value="<?php echo $telephone;?>">
										</td>
									</tr>
									<tr>
										<td valign="top">
											<label for="comment">Comments *</label>
										</td>
										<td valign="top">
											<textarea  name="comment" maxlength="1000" cols="25" rows="6" value="<?php echo $comment;?>"></textarea>
										</td>
											 
									</tr>
									<br />
									<br />
									<tr>
										<td colspan="2" style="text-align:center">
											<input class="button button-gray "type="submit" value="Register">
										</td>
									</tr>
								</table>
							</form>

						</div>
						
						
						
						<!-- END FORM -->

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