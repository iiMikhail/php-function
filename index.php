<h1>function</h1>
<?php 

function greeting($name = "Гость", $i = "Добро пожаловать!") {
	switch ( $i ) {
		case 1:
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case 2:
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case 3:
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case 4:
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case 5:
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;
		case 6:
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		case 7:
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		default:
			echo "Нет такого дня недели!";
			break;
	}
}
greeting("Михаил", 7);
 ?>