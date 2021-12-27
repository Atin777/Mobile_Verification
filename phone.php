if($_POST['phone'] != ''){			
if(!preg_match('/^[1-9]{1}[0-9]{9}+$/', $_POST['phone'])){
	return ['phone', 'Invalid phone number'];
}	
}
