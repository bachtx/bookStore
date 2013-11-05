<?php
class CLS_PRODUCTS{
	private $objmysql=null;
	public function CLS_PRODUCTS(){
		$this->objmysql=new CLS_MYSQL;
	}
	public function getList($where=' ',$order=' ORDER BY RAND() ',$limit=' '){
		$sql="SELECT * FROM `tbl_products` WHERE isactive=1 ".$where.$order.$limit;
		return $this->objmysql->Query($sql);
	}
    public function getOne($where=''){
		$sql="SELECT * FROM `tbl_products` WHERE isactive=1 ".$where;
		return $this->objmysql->Query($sql);
	}
	public function GetListPro($where=' ',$order=' ORDER BY RAND() ',$limit=' '){
		$sql="SELECT * FROM `tbl_products` WHERE isactive=1 ".$where.$order.$limit;
		$objdata=new CLS_MYSQL();
		$objcat = new CLS_CATALOGS;
		$objdata->Query($sql);
		//$clsimage=new SimpleImage;
		if(!isset($_SESSION['ORDER_NUM'])) $_SESSION['ORDER_NUM']=array();
		while($row=$objdata->Fetch_Assoc()){
			$pro_id=$row['pro_id'];
			//$catname=$objcat->getNameById($row["cat_id"]); // url 
			$code = stripslashes($row["code"]);
			$name = Substring(stripslashes($row["name"]),0,10);			
			$old_price=number_format($row["old_price"]);
			$cur_price=number_format($row["cur_price"]);
			$cur_price=($cur_price==0)?'Call ':$cur_price."";
			$persen="0";
			if($cur_price!=0 && $old_price!=0)
				$persen=ceil(($row["old_price"]-$row["cur_price"])/$row["old_price"]*100);
			$img = stripslashes($row["thumb"]);
			//if($img=='')
				//$img=$clsimage->get_image(stripslashes($row["fulltext"])); // lây ảnh trong desription
			$imgtag='<img src="'.$img.'" title="'.$name.'" alt="'.$name.'" class="img_block" width="98" height="150"/>';
		?>
			<div class="div_product">
				<?php if($persen!=0)
					echo "<span class=\"off\">$persen%</span>";
					echo $imgtag;
				?>
				<p><a href="index.php?com=products&&viewtype=detail&&id=<?php echo $pro_id;?>" class="name_product"/><?php echo $name;?></a></p>
				<h4><?php echo $cur_price;?>$</h4>
			</div><!--.div_product-->	
		<?php
		}
	}
	public function Num_rows(){
		return $this->objmysql->Num_rows();
	}
	public function Fetch_Assoc(){
		return $this->objmysql->Fetch_Assoc();
	}
	public function setVisited($id){
		$sql='UPDATE tbl_products SET `visited`=`visited`+1 WHERE `pro_id`='.$id;
		return $this->objmysql->Query($sql);
	}
}
?>