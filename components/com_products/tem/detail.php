<?php
if(isset($_GET['id']))
	echo $_GET['id'];
?>
<div class="detail_jumlink">
	<p>Home  <span class="bg_jumlink"></span>   Discounts and Clearance  <span class="bg_jumlink"></span>    Sonatini Hippeastrum Alaska</p>
</div><!--detail_jumlink-->
<div class="feature">
	<img src="images/img_feature.png" alt="feature"/>
	<h2>Star Wars Episode I</h2>
	<p>
		The Star Wars Episode I: The Phantom Menace novelization was written by Terry Brooks
		and published on April 21, 1999 by Del Rey. It is based on the script of the movie of the same name.
		Narration for the abridged audio version was performed by Michael Cumpsty. The unabridged version
		was performed by Alexander Adams. On January 31, 2012, a new paperback edition
		was released with a new short story, End Game, by James Luceno featured inside.
	</p>
	<p class="stock">IN STOCK</p>
	<div class="btn_addtocart">
		<p class="our_price">Our price : <span class="detail_price">$150</span></p>
		<p class="sale">Was $ 200 Save 20% </p>
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
			<li><a href="#tabs-1">Nunc tincidunt</a></li>
			<li><a href="#tabs-2">Proin dolor</a></li>
			<li><a href="#tabs-3">Aenean lacinia</a></li>
		</ul>
		<div id="tabs-1">
			<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
		</div>
		<div id="tabs-2">
			<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
		</div>
		<div id="tabs-3">
			<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
			<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
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