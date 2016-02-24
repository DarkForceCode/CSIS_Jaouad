<?php include('header.php');
	  include ('global.php'); ?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								Your cart!!
							</h2>
							
							<!-- OUTPUT -->
							<?php 
							
							$id = session_id();
							
							$getList = ("SELECT products.id, products.product_name, products.description, products.image, cart.session_id, 			cart.quantity 
							FROM products 
							INNER JOIN cart 
							ON products.id = cart.product_id AND cart.session_id = '$id'");
							
							$result = mysqli_query($connection,$getList);
							
							echo '<form action="cart_process.php" method="POST">';
							
									while ($row = mysqli_fetch_assoc($result))
									{
										echo '<br /><img style="position: relative; width: 300px; height: 300px" src="photos/' . $row["image"] . '">';
										echo "<br />";
										echo "<b>Product ID: </b>" . $row["id"] . "<br />";
										echo "<b>Description: </b>" . $row["description"] . "<br />";
										echo '<b>Quantity:<b><input type="text" size="3" style="text-align: center" name="' . 'product_' . $row["id"] . '" value="' . $row["quantity"] . '">';

										echo "<br /><br /><hr>";
										
									}
							echo "<center>";		
							echo '<input type="submit" name="update_cart" value="Update Cart">';
							echo "&emsp;&emsp;";
							echo '<input type="submit" name="checkout" value="Checkout">';	
							echo "</center>";
							echo "<br />";
							
							echo "</form>";
								
							?>
							
						</div>
						<!-- END OUTPUT -->

						<br class="clear" />
					</div>
					<br class="clear" />
				
		
		<?php include('footer.php'); ?>