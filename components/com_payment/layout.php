<div class="detail_jumlink">
	<p>Home  <span class="bg_jumlink"></span>  <?php echo "Payment";?></p>
</div><!--detail_jumlink-->
<div class="main_wrap">
	<div class="sidebar">
		<h3>Categories</h3>
		<ul class="ul_all"  >
			<li class="all"><a href="#" alt ="all">
				ALL
			</a></li>
		</ul>		
		<?php
			$catalogs=new CLS_CATALOGS();
			$catalogs->getListCatalogs();
		?>		
	</div><!--sidebar-->
	<div class="primary" id = "product_page">
		<div id="tabs_products">
			<h3><?php echo 'Payment';?></h3>
			<div id="tabs-1">
				<div class="payment">
					<div class='col1'>
						<h2>Ngân hàng MB Quân đội</h2>
						<p><strong>Chủ tài khoản  :</strong>Tran Xuan Bach</p>
						<p><strong>Số tài khoản :</strong>1234 7896 5789</p>
						<p><strong>Số điện thoại :</strong>(+84) 987 666 888</p>
					</div>
					<div class='col2'>
						<div class='cart'>
							<img src="<?php echo ROOTHOST;?>/cart.png" alt="Cart"/>
						</div>
					</div>
				</div>
				<div class="payment">
					<div class='col1'>
						<h2>Ngân hàng MB Quân đội</h2>
						<p><strong>Chủ tài khoản  :</strong>Tran Xuan Bach</p>
						<p><strong>Số tài khoản :</strong>1234 7896 5789</p>
						<p><strong>Số điện thoại :</strong>(+84) 987 666 888</p>
					</div>
					<div class='col2'>
						<div class='cart'>
							<img src="<?php echo ROOTHOST;?>/cart.png" alt="Cart"/>
						</div>
					</div>
				</div>
				<div class="payment">
					<div class='col1'>
						<h2>Ngân hàng MB Quân đội</h2>
						<p><strong>Chủ tài khoản  :</strong>Tran Xuan Bach</p>
						<p><strong>Số tài khoản :</strong>1234 7896 5789</p>
						<p><strong>Số điện thoại :</strong>(+84) 987 666 888</p>
					</div>
					<div class='col2'>
						<div class='cart'>
							<img src="<?php echo ROOTHOST;?>/cart.png" alt="Cart"/>
						</div>
					</div>
				</div>
				<div class="payment">
					<div class='col1'>
						<h2>Ngân hàng MB Quân đội</h2>
						<p><strong>Chủ tài khoản  :</strong>Tran Xuan Bach</p>
						<p><strong>Số tài khoản :</strong>1234 7896 5789</p>
						<p><strong>Số điện thoại :</strong>(+84) 987 666 888</p>
					</div>
					<div class='col2'>
						<div class='cart'>
							<img src="<?php echo ROOTHOST;?>/cart.png" alt="Cart"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--.tabs_product-->
	</div><!--.primary-->
</div><!--.main_wrapp-->