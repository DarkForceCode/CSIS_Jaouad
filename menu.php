<?php include('header.php');
	  include ('global.php'); ?>
		
		<!-- HTML START --> 
		
		
					<div id="content">
						<div id="box1">
							<h2>
								SHOP!!
							</h2>
							
							<!-- OUTPUT -->
							<?php 
							
								
								
								$getList = "select * from categories";
								
								//run the query and store if any result in $result
								$result = mysqli_query($connection,$getList);
								while ($row = mysqli_fetch_assoc($result))
								{
								
								echo '<a href="menu_view.php?id=' . $row['id']. '">' . $row['category_name'].'</a>';
								echo "<br /><br />";

								}
								
								echo '<a href="admin_menu_list.php">List all items</a>';
								
								
								
								
							
							
							?>
							
							
						</div>
						<!-- END OUTPUT -->

						<br class="clear" />
					</div>
					<br class="clear" />
				
		
		<?php include('footer.php'); ?>