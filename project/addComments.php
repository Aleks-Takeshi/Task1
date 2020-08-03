<?php
	
	require_once "includes/config.php";

	if ( isset($_POST['button']) )
	{
		$errors = array();

		if ( $_POST['name'] == '' )
		{
			$errors[] = 'Введите имя';
		}

		if ( $_POST['text'] == '' )
		{
			$errors[] = 'Введите текст';
		}

		if (empty($errors))
		{
			// $name = $_POST['name'];
			// $text = $_POST['text'];
			// echo "INSERT INTO `comments` (`name`, `text`) VALUES ('$name', '$text')";
			// exit();
			$name = $_POST['name'];
			$text = $_POST['text'];
			mysqli_query($connection, "INSERT INTO `comments` (`name`, `text`) VALUES ('$name', '$text')");

		} else
		{
			echo '<span style="color: red">' . $errors['0'] . '<hr>' . '</span>';
		}
	}
    
