<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(!empty($_POST['name'])) {
		$name = trim(strip_tags($_POST['name']));
	} else {
		$error[] = 'Не заполнено поле: Имя';
	}
	if(!empty($_POST['surName'])) {
		$surName = trim(strip_tags($_POST['surName']));
	} else {
		$error[] = 'Не заполнено поле: Фамилия';
	}
	$email = trim(strip_tags($_POST['email']));
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error[] = "E-mail ($email) указан неверно.\n";
	}
	if(!empty($_POST['password']) && !empty($_POST['confirmPassword'])){
		$password = md5(trim($_POST['password']));
		$confirmPassword = md5(trim($_POST['confirmPassword']));
		if($password !== $confirmPassword){
			$error[] = 'Пароли не совпадают';
		}
	}else{
		$error[] = 'Не заполнено поле: Пароль';
	}
}

echo "<pre>";

if($error){
		print_r($error);
	} else{
		echo "Спасибо за регистрацию! <br/>";
	if($pass === $pass_check) {
		
		$user = new stdClass();
		$user->name = $name;
		$user->surName = $surName;
		$user->email = $email;
		$user->password = $password;

		echo 'Имя: '.$user->name.'<br>';
		echo 'Фамилия: '.$user->surName.'<br>';
		echo 'email: '.$user->email.'<br>';
	} 
}
?>