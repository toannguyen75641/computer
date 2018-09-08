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
		<a href="index.php?controller=Product&action=admin">
			<input type="button" name="list" value="Liệt kê sản phẩm" style="width:150px; height:30px; background:#06F; color:#fff; font-size:15px; float: right;" >
		</a>
		<form action="index.php?controller=Product&action=update&id=<?= $rs['id']; ?>" method="post" enctype="multipart/form-data">
		<h3>&nbsp;</h3>
		<table width="90%" border="1" style="background-color: #FC6; margin-left: 50px;">
		 	<tr>
		    	<td colspan="2" style="text-align:center;font-size:25px;">Edit Product</td>
		  	</tr>
		  	<tr>
		    	<td width="97">Product_Code</td>
		    	<td width="87"><input type="text" name="product_code"></td>
			 </tr>
			 <tr>
			 	<td>Category_Id</td>
			  	<td>
			  		<select name="category_id">
			  			<option>1</option>
			  			<option>2</option>
			  		</select>
			  	</td>
			 </tr>
			 <tr>
			    <td>Name</td>
			    <td><input type="text" name="name"></td>
			 </tr>
			 <tr>
			    <td>Quantity</td>
			    <td><input type="text" name="quantity"></td>
			 </tr>
			 <tr>
			    <td>Image</td>
			    <td><input type="file" name="image" /></td>
			 </tr>
			  
			 <tr>
			    <td>Price</td>
			    <td><input type="text" name="price"></td>
			 </tr>
			 <tr>
			    <td>Description</td>
			    <td><textarea name="description" cols="40" rows="10"></textarea></td>
			 </tr>
			<tr>
			    <td>Status</td>
			    <td><select name="status">
			    	<option value="1">Kích hoạt</option>
			     	<option value="2">Không kích hoạt</option>
			    </select></td>
			</tr>
			<tr>
				<td>Created</td>
				<td><input type="datetime-local" name="created"></td>
			</tr>
			<tr >
				<td colspan="2"><input type="submit" name="addProduct" value="Edit Product" style="width:100px; height:40px; border:1px solid #000; text-align:center; background:#069; line-height:40px; color:#fff; float:right;"></td>
			</tr>
		</table>
		</form>
	</div>
	<?php
		include "view/users/footer.php";
	?>
</body>
</html>
