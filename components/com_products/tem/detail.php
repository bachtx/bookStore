<?php
if(isset($_GET['id']))
	$pro_id=(int)$_GET['id'];
	$obj->getOne(" AND `pro_id`='".$pro_id."'");
	$row=$obj->Fetch_Assoc();
	$cat_id = $row['cat_id'];
	$author_id = $row['author_id'];

	$cata->getNameById($row['cat_id']);// $cata la đối tượng class catalog khởi tạo bên layout.php
	$r=$cata->Fetch_Assoc();
	$par_id=$r['par_id'];
	$namePar=$cata->getParNameById($par_id);
	//echo '->'.$_SESSION['VIEW_PRO_ID'].'>';
	/*if($_SESSION['VIEW_PRO_ID']!=$pro_id) {
		$_SESSION['VIEW_PRO_ID']=$pro_id;
		//$obj->setVisited($pro_id);
	}*/
	//echo $_SESSION['VIEW_PRO_ID'].'|'.$pro_id;
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
			<?php
			if($row['old_price']!=0){
				echo "Was ".$row['old_price']." $ Save";
				$co = ceil((100-(($row['cur_price']/$row['old_price'])*100)));
				echo $co."%";
			}
			?> 
		</p>
		<a href="#" class="btn_cart" pro_id='<?php echo $pro_id;?>'>Add to cart</a>
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
			<li><a href="#tabs-1">Author</a></li>
			<li><a href="#tabs-2">Book Reference</a></li>
		</ul>
		<div id="tabs-1">
			<?php $obj->getAuthor($author_id); ?>
		</div>
		<div id="tabs-2">
			<?php $obj->GetListPro("AND `author_id`='$author_id'",'ORDER BY `cdate` DESC ','LIMIT 0,20');?>
		</div>
	</div>
	<script type="text/javascript">
		$(function() {
			$( "#desc_tabs" ).tabs();
		});
	</script>

	<div class="comment">
		<h4>Product review</h4>
		<?php
		$obj->getComment($pro_id);
		?>
		<form action="" method="post">
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
		<?php
		$obj->insertComment($pro_id);
		?>
	</div><!--.comment-->
</div><!--.desc-->
<script type='text/javascript'>
	$(document).ready(function(){
		$('.btn_cart').click(function(){
			var proid= $(this).attr('pro_id');
			$.post('ajaxs/addcart.php',{'proid':proid},function(data){
				alert('Add Cart Sucess !');
				window:location="index.php?com=products&&viewtype=detail&&id="+proid;
			})
		})
	})
</script>
	<?php
		$obj->getLike($cat_id);
	?>
</div><!--.like-->
