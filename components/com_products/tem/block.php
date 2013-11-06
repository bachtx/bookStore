<?php
if(isset($_GET['cat_id'])){
	$cat_id=$_GET['cat_id'];		
	$cata->getNameById($cat_id);
	$r=$cata->Fetch_Assoc();
	$par_id=$r['par_id'];
	$namePar=$cata->getParNameById($par_id);
}
?>
<div class="detail_jumlink">
	<p>Home  <span class="bg_jumlink"></span>  <?php echo $namePar;?> 
		<span class="bg_jumlink"></span> <?php echo $r['name'];?></p>
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
				<?php 					
					$obj->GetListPro(" AND `cat_id` in ('$cat_id') ",' ORDER BY `mdate` DESC '," LIMIT 0,20");
				?>				
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