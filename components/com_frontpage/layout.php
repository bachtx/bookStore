<div id="bxslider">
	<ul class="bxslider">
		<li><img src="images/product/banner.png" /></li>
		<li><img src="images/product/banner2.png" /></li>
		<li><img src="images/product/banner3.png" /></li>
	</ul>
	<script type="text/javascript">
		$('.bxslider').bxSlider({
			auto: true
		});
	</script>

</div><!--#bxslider-->
<div class="deal">
	<img src="images/deal.png" alt="qc" class="deal"/>
</div><!--.deal-->
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
	<div class="primary">
		<div id="tabs_products">
			<ul class="ul_tab">
				<li><a href="#tabs-1">Newest books</a></li>
				<li><a href="#tabs-2">On sale</a></li>
				<li><a href="#tabs-3">Most Viewed</a></li>
			</ul>
			<div class="clear"></div>
			<div id="tabs-1">
				<!-- tir-1 -->
				<?php $tt=0;
				while($tt<15){
					$tt++;
					?>
					<div class="div_product">
						<span class="off">30%</span>
						<img src="images/product/product.png" alt="product"/>
						<p><a href="index.php?com=products&&viewtype=detail&&id=<?php echo '1';?>" class="name_product"/>The Hare With Amber Eyes</a></p>
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
			<div id="tabs-2">
				<p> San pham dang duoc cap nhat...</p>
			</div>
			<div id="tabs-3">
				<p>San pham dang duoc cap nhat...</p>
			</div>


		</div><!--.tabs_product-->

	</div><!--.primary-->
</div><!--.main_wrapp-->