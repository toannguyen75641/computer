<?php
	if(isset($_GET['message']) && $_GET['message'] == 'create_success') {
   		echo "<p style='color: green;'>Create success!!!</p>";
	}
	if(isset($_GET['message']) && $_GET['message'] == 'edit_success') {
   		echo "<p style='color: green;'>Edit success!!!</p>";
	}
	if(isset($_GET['message']) && $_GET['message'] == 'delete_success') {
   		echo "<p style='color: green;'>Delete success!!!</p>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lý website</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/users/css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php
			include "view/users/header.php";
			include "view/users/menu.php";
		?>
			 
		<div class="content">
			<a href="index.php?controller=Product&action=add">
				<input type="submit" name="btnAddProduct" value="Thêm mới" style="width:150px; height:30px; background:#06F; color:#fff; font-size:15px; float: right;" >
			</a>
				<table width="100%" border="1" style="background-color: #FC6">
				  <tr>
				    <th>ID</th>
				    <th>Product_code</th>
				    <th>Name</th>
				    <th>Quantity</th>
				    <th>Image</th>
				    <th>Price</th>
				    <th>description</th>
				    <th>Status</th>
				    <th>Created</th>
				    <th colspan="2">Action</th>
				  </tr>
				  <?php if(isset($list)) { ?>
				  	<?php  foreach ($list as $item) { ?>
					  	<tr>
					  		<td><?php echo $item['id'] ?></td>
					  		<td><?php echo $item['product_code'] ?></td>
					  		<td><?php echo $item['name'] ?></td>
					  		<td><?php echo $item['quantity'] ?></td>
					  		<td><img src=<?php echo $item['image']; ?> style="height: 100px; width: 100px;"></td>
					  		<td><?php echo $item['price'] ?></td>
					  		<td><?php echo $item['description'] ?></td>
					  		<td><?php echo $item['status'] ?></td>
					  		<td><?php echo $item['created'] ?></td>
					  		<td style="text-align: center;">
					  			<a href="http://localhost:8888/ac/index.php?controller=Product&action=edit&id=<?php echo $item['id'] ?>">Edit</a>	
					  			|
					  			<a href="http://localhost:8888/ac/index.php?controller=Product&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Are you sure?');" >Delete</a>
					  		</td>
					  	</tr>
				  	<?php } ?>
				  <?php } ?>
			 
				</table>
			</div>
			<div class="clear"></div>
		<?php
			
			include "view/users/footer.php";
		?>				
	</div>
</body>
</html>