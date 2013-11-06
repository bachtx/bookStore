<?php
class CLS_CONTACTS{
	private $contact=array(		
			'noidung'=>'',
			'name'=>'',
			'sdt'=>'098767676');
	private $objmysql=null;
	public function CLS_PRODUCTS(){
		$this->objmysql=new CLS_MYSQL;
	}
	public function Insert(){
		$sql="INSERT into tbl_contacts (`noidung`,`name`,`sdt`) values('".$this->noidung."','".$this->name."','".$this->sdt."') ";
		echo $sql;die();
		return $this->objmysql->Query($sql);
	}
	public function Num_rows(){
		return $this->objmysql->Num_rows();
	}
	public function Fetch_Assoc(){
		return $this->objmysql->Fetch_Assoc();
	}
}
?>