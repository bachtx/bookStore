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
<div class='contact_page'>
	<p>This is the support team. We will be happy to help with any questions about our product. Please send us a message.</p>
	<br/><br/>
	<div class='mess'>
		<p class='title'>Send a message</p>
		<br/>
		<form method='post' action=''>
		<table>
			<tr>
				<td>Your email: <span>*</span></td>
				<td><input type='text' name='email'></td>
			</tr>
			<tr>
				<td>First Name: <span>*</span></td>
				<td><input type='text' name='first'></td>
			</tr>
			<tr>
				<td>Last Name: <span>*</span></td>
				<td><input type='text' name='last'></td>
			</tr>
			<tr>
				<td>Message: <span>*</span></td>
				<td><textarea name='mess'></textarea></td>
			</tr>
		</table>
		<input type='submit' name='submit' value='Send'>
		</form>
	</div>
</div>
