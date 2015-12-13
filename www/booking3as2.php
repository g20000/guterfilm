<?php

	$fio = @ trim ($_POST['fio']);
	$phone = @ trim ($_POST['phone']);
	$address = @ trim ($_POST['address']);
	$message = "Получить 3 комплекта по цене 2, Имя: $fio\n\nТелефон: $phone\n\nАдрес: $address";
		
	if (!$fio || !$phone || !$address) exit ('Необходимо заполнить все поля, вернитесь');
	if(mail('123@1477.ru, karbon@1477.ru', 'Guter Film', $message)){
		echo "<script>document.location.href='/?ok';</script>";
	}

?>