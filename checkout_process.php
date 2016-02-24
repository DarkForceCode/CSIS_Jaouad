<?php include('header.php');
	  include ('global.php');
	  include ('jwu_mail.php')?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								Order Summary
							</h2>
							<!-- Validation Process -->
							
							<?php
								$firstname	= $_POST["firstname"];
								$lastname	= $_POST["lastname"];
								$address	= $_POST["address"];
								$city		= $_POST["city"];
								$state		= $_POST["state"];
								$zip		= $_POST["zip"];
								$email 		= $_POST["email"];
								$telephone = $_POST["telephone"];
								
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
									include("checkout_form.php");
									die();
								}
								
								//END of Message Error	
								
								
								//PRINT SUMMARY

								$full_address = $address . ", " . $city . ", " . $state . " " . $zip;
								
								echo "Thank you for shopping with us. Here is the summary of the order.<br /><br />";
								
								echo "<b>Name: </b>" . $firstname . " " . $lastname . "<br />";
								echo "<b>Address: </b>" . $full_address . "<br />";
								echo "<b>Contact Phone number: </b>" . $telephone;
								
								echo "<br /><br />Items in question: <br /><br />";
								
								$id = session_id();
							
							$getList = ("SELECT products.id, products.product_name, products.description, products.image, cart.session_id, 			cart.quantity, products.quantity_remaining 
							FROM products 
							INNER JOIN cart 
							ON products.id = cart.product_id AND cart.session_id = '$id'");
							
							$result = mysqli_query($connection,$getList);
							
								while ($row = mysqli_fetch_assoc($result))
									{
										echo '<br /><img style="float: left; width: 100px; height: 100px" src="photos/' . $row["image"] . '">';
										echo "<br />";
										echo "<b>Product ID: </b>" . $prod_id = $row["id"] . "<br />";
										echo "<b>Description: </b>" . $row["description"] . "<br />";
										echo '<b>Quantity:</b>' . $row["quantity"];

										echo "<br /><hr>";
										
										/**** UPDATE QUANTITY ****/
										$quantity_remaining = $row["quantity_remaining"] - $row["quantity"];
										$query = "UPDATE products set quantity_remaining = '$quantity_remaining' where id = '$prod_id'";
										$update = mysqli_query($connection,$query);
									}


								//SEND EMAIL

								$to = "zaj210@jwu.edu";
								$subject = "Order Confirmation";
								$message = "We received your order and we will start packing right away!!<br />";
								$message .= "This is the summary of your order:<br /><br />";
								$message .= "Name: " . $firstname . " " .  $lastname . "<br />";
								$message .= "Shipping Address: " . $full_address . "<br />";
								$message .= "Contact Phone: " . $telephone . "<br />";
								
								$message .= "<br />Products ordered:<br /><br />";
								
								$getList = ("SELECT products.id, products.product_name, products.description, products.image, cart.session_id, 			cart.quantity, products.quantity_remaining 
							FROM products 
							INNER JOIN cart 
							ON products.id = cart.product_id AND cart.session_id = '$id'");
							
							$result = mysqli_query($connection,$getList);
							while ($row = mysqli_fetch_assoc($result))
									{
								$message .= "Product Name: " . $prod_name = $row["product_name"] . "<br />";
								$message .= "Product ID: " . $prod_id = $row["id"] . "<br />";		
								$message .= "Description: " . $row["description"] . "<br />";
								$message .= 'Quantity: ' . $row["quantity"];
								$message .= "<br /><br />";
									}
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