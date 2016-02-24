<?php include ('header.php');
	  include ('global.php'); ?>
		
		<div id="content">
						<div id="box1">
							
							
							<!-- OUTPUT -->
	<?php 
								
	
	$id = intval($_GET["id"]);
	$result = mysqli_query($connection,"select * from products where id = $id");
	
	echo "<h2>" . $row["product_name"] . "</h2>";
	
	while($row = mysqli_fetch_assoc($result))
	{
		$prod_id = "product_" . $row["id"];
		$prod_name = $row["product_name"];
		$prod_image = $row["image"];
		$prod_desc = $row["description"];
	}

	
	?>
			<h2><?php echo $title ?></h2>
			
			
						<form action="cart_process.php" method="POST">
						
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<input type="hidden" name="pName" value="<?php echo $prod_name;?>">
							<input type="hidden" name="pImage" value="<?php echo $prod_image;?>">
							<input type="hidden" name="pDesc" value="<?php echo $prod_desc;?>">
							
							<br />
							<br />
							<b type="text" value="<?php echo $product_name; ?>"><?php echo $prod_name; ?><b>		
							<br />
							<br />
							<img src="photos/<?php echo $prod_image; ?>"/>
							<br />
							<br />
							<b><?php echo $prod_desc; ?><b>
							<br />
							<br />
							<b>Add Quantity<b>
							<br />
							<input type="text" name="<?php echo $prod_id; ?>" size="3" />
							<br />
							<br />
							<input type="submit" value="Add To Cart" />

	
						</form>
	
	
						</div>
						<!-- END OUTPUT -->

						<br class="clear" />
					</div>
					<br class="clear" />
				
		
		<?php include('footer.php'); ?>	
						