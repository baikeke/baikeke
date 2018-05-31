<?php
	$GetUsername = $_POST['user'];
	$Getpassword = $_POST['password'];
		$arr = array( 
			array('username'=>'baiyaxin','pwd'=>'123456'), 
			array('username'=>'aaa','pwd'=>'123'), 
			array('username'=>'byx','pwd'=>'1256'), 
			array('username'=>'abd','pwd'=>'654')
		);
		foreach($arr as $key=>$val){ 
		  	if($GetUsername==$val["username"] && $Getpassword==$val["pwd"]){
				echo 'ok';
				return;
			}else{
				echo '登录失败';
				return;
			}
		}	
?>