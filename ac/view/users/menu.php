<div class="menu">
			<ul>
				<li>
					<a href="#">Quản lý loại sản phẩm</a>
				</li>
				<li>
					<a href="http://localhost:8888/ac/index.php?controller=Product&action=Add">Quản lý sản phẩm</a>
				</li>
				<li>
					<a href="#">Quản lý khách hàng</a>
				</li>
				<li>
					<a href="#">Quản lý hóa đơn</a>
				</li>
				<form action="" method="post" enctype="multipart/form-data">
	            	<input type="submit" name="btnLogout" value="Đăng xuất" style="background:#06F;color:#fff;width:200px;height:40px; float: right;" />
	            </form>
			</ul>
				<form action="http://localhost:8888/ac/index.php?controller=Product&action=Admin" method="get">
					<input type="text" name="txtTimkiem" placeholder="Nhập mã sản phẩm..." id="txtTimkiem" required="required" style="width:200px; height:25px; border:1px solid #CCC; margin-top:2px;" />
			    	<input type="submit" id="btnSearch" name="btnSearch" value="Tìm sản phẩm" style="width:150px; height:30px; background:#06F; color:#fff; font-size:15px;" />
				</form>  	
		</div>