
<div class="content">
	<div class="left"></div>
	<div class="right">
		<p style="text-align: center; color: red; background-color: #0CF; padding: 10px;">Tất cả sản phẩm</p>
		<div class="product">
			<ul>
				<li>
					<a href="#">
						<?php if(isset($list)) { ?>
							<?php foreach($list as $item) { ?>
								<img src="<?= $item['image']; ?>" alt="macbook2018" style="height: 100px; width: 100px;">
								<p><?= $item['name'] ?></p>
								<p style="color: #F00"><?= $item['price']; ?></p>
								<p style="color: #F00"><?= $item['description']; ?></p>
							<?php } ?>
						<?php } ?>		
					</a>
				</li>
			</ul>	
		</div>
	</div>
</div>
