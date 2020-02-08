<?php

session_start();
$db = mysql_connect("172.20.10.2:8648","glob_root", "qwer0000")
or die("База данных не отвечает. подождите или проверьте файлы конфигурации.");
mysql_select_db("travel_hack", $db)
or die("Такой базы данных на сервере не существует");
 
if (isset($_POST['_login'])) 
{ 
    $username = $_POST['_login']; 
    if ($username =='') 
        { unset($username);} 
} 
 
//Заносим пароль, если не введен обнуляем
if (isset($_POST['password'])) 
{ $password=$_POST['password']; 
if ($password =='') 
{ unset($password);} }
   
if (empty($username) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit 
("<body>
<div align='center'><br/><br/><br/>
<h3>No username and pass" . "
<a href='index.php'> <b>Back</b> </a>
</h3>
</div>
</body>");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
else{
   $username = stripslashes($username);
    $username = htmlspecialchars($username);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $username = trim($username);
    $password = trim($password);
    
 //Подключаемся к базе данных.
    
 /*   
 //извлекаем из базы все данные о пользователе с введенным логином
$result = mysql_query("SELECT * FROM `formareg`.`user` username='$username'", $db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow["password"]))
    {
    //если пользователя с введенным логином не существует
    exit ("<body><div align='center'><br/><br/><br/>
    <h3>Извините, введённый вами username или пароль неверный." . "<a href='index.php'> <b>Назад</b> </a></h3></div></body>");
    }
    else{
                //если существует, то сверяем пароли
        if ($myrow["password"]==$password) 
            {
            //если совпадают запустим сессию
            $_SESSION['username']=$myrow["username"]; 
            $_SESSION['id']=$myrow["id"];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
            header("Location:heder.php"); 
            }
        else{  exit ("<body><div align='center'><br/><br/><br/>
                        <h3>Извините, введённый вами username или пароль неверный." . "
                        <a href='index.php'> <b>Назад</b> </a></h3></div></body>");
            }
        }*/
}
?>
