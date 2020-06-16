<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="vi" xml:lang="vi">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tài Trợ Thành Công </title>
</head>
<body>	
<?php

include('config.php');	
include('include/NL_Checkoutv3.php');

$nlcheckout= new NL_CheckOutV3(MERCHANT_ID,MERCHANT_PASS,RECEIVER,URL_API);
$nl_result = $nlcheckout->GetTransactionDetail($_GET['token']);

if($nl_result){
	$nl_errorcode           = (string)$nl_result->error_code;
	$nl_transaction_status  = (string)$nl_result->transaction_status;
	if($nl_errorcode == '00') {
		if($nl_transaction_status == '00') {
			//trạng thái thanh toán thành công
			echo "<pre>";
			//	print_r( $nl_result);
//cách lấy giá trị trong chuỗi
				$value = (string) $nl_result->buyer_fullname;
				
			echo "</pre>";
	echo '<script type="text/javascript">';
echo ' alert("cảm ơn bạn '.$value.' đã tài trợ cho chúng tôi!!")';  //not showing an alert box.
echo '</script>';
 echo "<script>window.location.href='localhost:81/final/doan2020/public/thanh_toan';</script>";
    exit;
		}
	}else{
		echo $nlcheckout->GetErrorMessage($nl_errorcode);
	}
}

?>
</body>	
</html>		