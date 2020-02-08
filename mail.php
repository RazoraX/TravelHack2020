<?php
// $to = 'gennady.t@jewish-museum.ru';
//  $name = $_POST["name"];
// $email = $_POST["email"];
// $subject = $_POST["subject"];

if (isset($_POST['send_test_result'])) {
    $results = $_POST['test'];
    $to = $_POST["email"];
    $from = "cityofdiscoveries@welcome.moscow";
    $tema = "Результаты теста"; // тема полученного емайла
    $message = "Ваши результаты: <br>";//присвоить переменной значение, полученное из формы name=name

    foreach ($results as $key => $value) {
        $message = $message . "Направление - " . $value['way'] . "<br/>" . "\r\n";
        $message = $message . "Результат - " . $value['value'] . "<br/>" . "\r\n";
        $message = $message . "Описание - " . $value['text'] . "<br/><br/>" . "\r\n";
    }
    // $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    // $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    // mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: Город открытий <' . $from . '>' . " \r\n" .
        'Reply-To: ' . $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
} elseif (isset($_POST['callback'])) {
    // Удалить потом
   // if ($_POST["email"] == 'cityofdiscoveries@welcome.moscow') {
      //  $to = "drejko.ev@yandex.ru";
      //  $from = 'cityofdiscoveries@welcome.moscow';
   // } else {
       // $to = "cityofdiscoveries@welcome.moscow";
       // $from = $_POST["email"];
    // }

    $tema = "Заявка с сайта";
    //$message = "Имя: " . $_POST['name'] . "<br>";
    $message = "Почта: " . $_POST['email'] . "<br>";
    // $message .= "Регион: " . $_POST['region'] . "<br>";
    // $message .= "Сообщение: " . (isset($_POST['message'])? $_POST['message'] : '') . "<br>";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: Заявка с сайта <' . $from . '>' . " \r\n" .
        'Reply-To: ' . $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
} else if (isset($_POST['fullForm'])) {
    // $to = "cityofdiscoveries@welcome.moscow"; // емайл получателя данных из формы
    $to = "cityofdiscoveries@welcome.moscow";
    $tema = "Регион: " . $_POST['region'] . ""; // тема полученного емайла
    $email = $_POST["email"]; // почта отправителя. 
    $message = "Ваше имя: " . $_POST['name'] . "<br>";//присвоить переменной значение, полученное из формы name=name
    $message .= "E-mail: " . $_POST['email'] . "<br>"; //полученное из формы name=email
    $message .= "Регион: " . $_POST['region'] . "<br>"; //полученное из формы name=phone
    $message .= "Город: " . $_POST['city'] . "<br>"; //полученное из формы name=message
    $message .= "Выбранный маршрут: " . $_POST['level'] . "<br>"; //полученное из формы name=level
    $message .= "Дата: " . $_POST['date'] . "<br>"; //полученное из формы name=message
    // $message .= "Вопрос: " . $_POST['quest'] . "<br>"; //полученное из формы name=message
    // $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    // $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    // mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From:  ' . $_POST['name'] . ' <' . $_POST["email"] . '>' . " \r\n" .
        'Reply-To: ' . $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
}
else {
    // $to = "cityofdiscoveries@welcome.moscow"; // емайл получателя данных из формы
    $to = "cityofdiscoveries@welcome.moscow";
    $tema = "Регион: " . $_POST['region'] . ""; // тема полученного емайла
    $email = $_POST["email"]; // почта отправителя.
    $message = "Ваше имя: " . $_POST['name'] . "<br>";//присвоить переменной значение, полученное из формы name=name
    $message .= "E-mail: " . $_POST['email'] . "<br>"; //полученное из формы name=email
    $message .= "Регион: " . $_POST['region'] . "<br>"; //полученное из формы name=phone
    $message .= "Город: " . $_POST['city'] . "<br>"; //полученное из формы name=message
    $message .= "Выбранный маршрут: " . $_POST['level'] . "<br>"; //полученное из формы name=level
    $message .= "Дата: " . $_POST['dates'] . "<br>"; //полученное из формы name=message
    // $message .= "Вопрос: " . $_POST['quest'] . "<br>"; //полученное из формы name=message
    // $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    // $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    // mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From:  ' . $_POST['name'] . ' <' . $_POST["email"] . '>' . " \r\n" .
        'Reply-To: ' . $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
}


//  $headers = 'MIME-Version: 1.0' . "\r\n";
//  $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
//  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

//  $message ='<table style="width:100%">
//     <tr>
//         <td>'.$name.' '.$eЦmail.' '.$region.'</td>
//    </tr>
//     <tr><td>Почта: '.$email.'</td></tr>
//     <tr><td>Тема: '.$name.'</td></tr>
//     <tr><td>Текст: '.$region.'</td></tr>

//  </table>';


// Если хочешь чекнуть - что перед отправкой - раскоментируй
// var_dump($message);
// die;
// Вот такой вариант может быть
// $headers[] = 'To: kelly@example.com';
// $headers[] = 'From: birthday@example.com';
//mail($to, $subject, $message, implode("\r\n", $headers));

$mailResult = array();

if (@mail($to, $tema, wordwrap($message, 70, "\r\n"), $headers)) {
    if (isset($_POST['send_test_result'])) {
        $mailResult = array(
            'status' => 'ok',
            'message' => 'На вашу почту отправлены результаты навигатора'
        );
        print_r(json_encode($mailResult));
        die;
    }
    if (isset($_POST['callback']) || isset($_POST['fullForm'])) {
        $mailResult = array(
            'status' => 'ok',
            'message' => 'Заявка успешно отправлена'
        );
        print_r(json_encode($mailResult));
        die;
    }
    echo 'Успех';

} else {
    echo 'Ошибка';
}
header("Location: .");

?>
