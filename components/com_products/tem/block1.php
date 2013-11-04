<div class="detail_jumlink">
	<p>Home  <span class="bg_jumlink"></span>   Discounts and Clearance  <span class="bg_jumlink"></span>    Sonatini Hippeastrum Alaska</p>
</div><!--detail_jumlink-->
<div class="main_wrap">
	<div class="sidebar">
		<h3>Categories</h3>
		<ul class="ul_all"  >
			<li class="all"><a href="#" alt ="all">
				ALL
			</a></li>
		</ul>
		<!-- Lấy dữ liệu động từ cơ sở dữ liệu ra bên ngoài trang chính-->
		<?php
			$catalogs=new CLS_CATALOGS();
			$catalogs->getListCatalogs();
		?>
		<!--Kết thúc catalogs -->
	</div><!--sidebar-->
	<div class="primary" id = "product_page">
		<div id="tabs_products">
			<h3>Science Fiction</h3>
			<div id="tabs-1">
				<!-- tir-1 -->
				<?php $tt=0;
				while($tt<20){
					$tt++;
					?>
					<div class="div_product">
						<span class="off">30%</span>
						<img src="images/product/product.png" alt="product"/>
						<p><a href="index.php?com=products&&viewtype=detail&&id=1" class="name_product"/>The Hare With Amber Eyes</a></p>
						<h4>50$</h4>
					</div><!--.div_product-->
				<?php } ?>

				<div class="pagin">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#" class="selected">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
				</div><!--.pagin-->
			</div>
		</div><!--.tabs_product-->
	</div><!--.primary-->
</div><!--.main_wrapp-->