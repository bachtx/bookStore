<?php
include('libs/cls.contacts.php');
$contact= new CLS_CONTACTS();

$task='';
if(isset($_POST['cmd'])){
	$contact->noidung=$_POST['noidung'];
	$contact->name=$_POST['name'];
	$contact->sdt=$_POST['sdt'];
	$contact->insert();
	header("location:index.php");
}

?>
<form action='' method='POST'>
	<table border='1'>
		<tr>
			<td><input type='text' name='noidung' value=''/></td>
			<td><input type='text' name='name' value=''/></td>
			<td><input type='text' name='sdt' value=''/></td>
			<td><input type='submit' name='cmd' value='Gui '/></td>
		</tr>
	</table>
 </form>