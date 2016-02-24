<?php include('header.php');
	  include ('global.php'); ?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								CheckOut!!
							</h2>
							
							<!-- OUTPUT -->
							
							<form action="checkout_process.php" method="POST">
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
											<label for="addess">Address</label>
										</td>
										<td valign="top">
											<input  type="text" name="address" maxlength="255" size="30" value="<?php echo $address;?>">
										</td>
									</tr>
									<tr>
										<td valign="top">
											<label for="city">City</label>
										</td>
										<td valign="top">
											<input  type="text" name="city" maxlength="50" size="30" value="<?php echo $city;?>">
										</td>
									</tr>
									<tr>
										<td valign="top">
											<label for="state">State</label>
										</td>
										<td valign="top">
											<input  type="text" name="state" maxlength="50" size="30" value="<?php echo $state;?>">
										</td>
									</tr>
									<tr>
										<td valign="top">
											<label for="zip">ZIP</label>
										</td>
										<td valign="top">
											<input  type="text" name="zip" maxlength="50" size="30" value="<?php echo $zip;?>">
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
									<br />
									<br />
									<tr>
										<td colspan="2" style="text-align:center">
											<input class="button button-gray "type="submit" value="CheckOut">
										</td>
									</tr>
								</table>
							</form>
						<!-- END OUTPUT -->	

						
							
						</div>
						

						<br class="clear" />
					</div>
					<br class="clear" />
				
		
		<?php include('footer.php'); ?>