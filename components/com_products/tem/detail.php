<?php
if(isset($_GET['id']))
	$pro_id=$_GET['id'];
	$obj->getOne(" AND `pro_id`='".$pro_id."'");
	$row=$obj->Fetch_Assoc();
	$cat_id = $row['cat_id'];
	
	$cata->getNameById($row['cat_id']);// $cata la đối tượng class catalog khởi tạo bên layout.php
	$r=$cata->Fetch_Assoc();
	$par_id=$r['par_id'];
	$namePar=$cata->getParNameById($par_id);
?>
<div class="detail_jumlink">
	<p>Home  <span class="bg_jumlink"></span>  <?php echo $namePar;?> <span class="bg_jumlink"></span> <?php echo $r['name'];?> <span class="bg_jumlink"></span> <?php echo $row['name'];?></p>
</div><!--detail_jumlink-->
<div class="feature">
	<img src="<?php echo $row['thumb']?>" width="252" height="393" alt="feature"/>
	<h2><?php echo $row['name'];?></h2>
	<p>
		<?php echo $row['intro'];?>
	</p>
	<p class="stock">IN STOCK</p>
	<div class="btn_addtocart">
		<p class="our_price">Our price : <span class="detail_price"><?php echo $row['cur_price'].'$';?></span></p>
		<p class="sale">
			Was <?php echo $row['old_price'].'$';?> Save
			<?php
			$co = ceil((100-(($row['cur_price']/$row['old_price'])*100)));
			echo $co."%";
			?> 
		</p>
		<a href="#" class="btn_cart">Add to cart</a>
		<div class="paypal">
			<p class="lock">Safe, Secure Shopping</p>
			<a href="#"><img src="images/paypal.png" alt="paypal"/> </a>
			<a href="#"><img src="images/mastercard.png" alt="visa"/> </a>
			<a href="#"><img src="images/american.png" alt="visa"/> </a>
			<a href="#"><img src="images/visa.png" alt="visa"/> </a>

		</div><!--.paypal-->
	</div><!--.btn_addtocart-->
</div><!--.feature-->
<div class="desc">
	<div id="desc_tabs">
		<ul>
			<li><a href="#tabs-1">Thông tin tác giả</a></li>
			<li><a href="#tabs-2">Các sách liên quan</a></li>
		</ul>
		<div id="tabs-1">
			<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
		</div>
		<div id="tabs-2">
			<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
		</div>
	</div>
	<script type="text/javascript">
		$(function() {
			$( "#desc_tabs" ).tabs();
		});
	</script>

	<div class="comment">
		<h4>Product review</h4>
		<div class="name">
			<div class="img">
				<img src="images/name.png" alt="name"/>
				<p>Name 1</p>
			</div><!--.img-->

			<p class="review">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				when an unknown printer took a galley of type and scrambled it to make a type specimen
				book. It has survived not only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s with the
				release of Letraset sheets containing Lorem Ipsum passages, and more recently with
				desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div><!--.name-->
		<div class="name">
			<div class="img">
				<img src="images/name.png" alt="name"/>
				<p>Name 2</p>
			</div><!--.img-->

			<p class="review">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				when an unknown printer took a galley of type and scrambled it to make a type specimen
				book. It has survived not only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s with the
				release of Letraset sheets containing Lorem Ipsum passages, and more recently with
				desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div><!--.name-->
		<form>
			<fieldset>
				<legend>Write a comment</legend>
				<p>
					<label>Your name</label>
					<input type="text" name="name" />
				</p>
				<p>
					<label>email </label>
					<input type="text"  name="email"/>
				</p>
				<p>
					<label>Message </label>
					<textarea name="content"></textarea>
				</p>
				<p>
					<input type="submit" name="submit" value="Submit"/>
				</p>
			</fieldset>
		</form>
	</div><!--.comment-->
</div><!--.desc-->

<div class="like">
	<h3>You may also like</h3>
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->
	<div class="like_product">
		<div class="item">
			<a href="" class="img"><img src="images/like_product.png" alt="like product"/></a>
			<div>
				<h4><a href="#" >The Hare With Amber</a></h4>
				<p class="like_price">$50</p>
				<a href="#" class="read_more">Read more</a>
			</div>
		</div><!--.item-->
	</div><!--like_product-->

</div><!--.like-->