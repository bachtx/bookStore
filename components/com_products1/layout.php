<div id="product_wapper">
<?php
$COM='products';
$viewtype='';
if(isset($_GET['viewtype'])){
	$viewtype=$_GET['viewtype'];
}
if(is_file(COM_PATH.'com_'.$COM.'/tem/'.$viewtype.'.php'))
	include('tem/'.$viewtype.'.php');
unset($viewtype); unset($COM);
?>
</div>