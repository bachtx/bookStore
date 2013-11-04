<ul>
	<?php if($UserLogin->isLogin()==true){?>
    <li>
        <a href="index.php" class="active"><span>Systems</span></a>
        <ul class="submenu">                       
			<li><a href="#"><span>Group Users</span></a></li>
            <li><a href="#"><span>List Users</span></a></li>
            <li><a href="#"><span>Personal Information</span></a></li>  
            <li><a href="index.php?com=users&task=logout"><span>Logout</span></a></li>     				
        </ul>
    </li>
    <li><a href="#"><span>Books Management</span></a>
         <ul class="submenu">                       
			<li><a href="index.php?com=catalogs&task=add"><span>Add Group Book</span></a></li>
            <li><a href="index.php?com=catalogs"><span>List Group Book</span></a></li>
            <li><a href="index.php?com=product&task=add"><span>Add Book</span></a></li>  
            <li><a href="index.php?com=product"><span>List Book</span></a></li>     				
        </ul>
    </li>
    <li><a href="#"><span>Order</span></a>
         <ul class="submenu">                       
			<li><a href="#"><span>New Order</span></a></li>
            <li><a href="#"><span>Processing Order</span></a></li>
            <li><a href="#"><span>Finished Order</span></a></li>                            				
        </ul>
    </li>
    <li><a href="#"><span>Contents</span></a>
         <ul class="submenu">                       
			<li><a href="#"><span>Add Categories</span></a></li>
            <li><a href="#"><span>List Categories</span></a></li>
            <li><a href="#"><span>Add Contens</span></a></li>
            <li><a href="#"><span>List Contents</span></a></li>                             				
        </ul>
    </li>    
    <li><a href="#"><span>Support</span></a>
        
    </li>
	<?php }
	else{
		
	}
	?>
</ul>