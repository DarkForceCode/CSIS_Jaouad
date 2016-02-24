<?php include('header.php');
	  include ('global.php'); ?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								<?php 
								/*---CATEGORY NAME---*/
								
									$id = intval($_GET["id"]);
																		
									$result = mysqli_query($connection,"select * from categories where id = ".intval($_GET["id"]));
									$row = mysqli_fetch_assoc($result);
									echo $row["category_name"];
									
								?>
							</h2>
							
							<br /><br />
							
							<!-- OUTPUT -->
							<?php 
							
							if (empty($_GET['id'])){
									
									header('Location: menu.php');
									die();
							}
							
							$getList = ("SELECT * FROM products WHERE category_id = " .intval($_GET['id']). "");
							$result = mysqli_query($connection,$getList);
							
							echo "<ul>";
							
									while ($row = mysqli_fetch_assoc($result))
									{
										
										echo "<img src='photos/".$row["image"]."'/><br />"; //picture
										echo $row["product_name"]."<br />";
										echo $row["description"]."<br />";
										echo $row["price"]."<br />";
										echo $row["quantity_remaining"]."<br />";
										
										echo "<a href='product_details.php?id=" . $row["id"] . "'>Product Details</a><br />";
										//echo "<a href='admin_menu_delete.php?id=" . $row["id"] . "'>Delete</a><br /><br />";
										
										echo "<br /><br />";
									}
							echo "</ul>";
								
							?>
							
						</div>
						<!-- END OUTPUT -->

						<br class="clear" />
					</div>
					<br class="clear" />
				
		
		<?php include('footer.php'); ?>