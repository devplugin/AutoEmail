<?php

//// Анонимная отправка письма
function email($mail,$name,$agent,$zagolovoc,$content)
{

    $to = "<" . $mail . ">";
    $subject = $zagolovoc;
    $message = $content; /// Текст письма
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers = "From: ".$name." <".$agent.">\r\n"; //// От кого письмо
    if (mail($to, $subject, $message, $headers)){

        return 'Ваше письмо отправлено !  <br> Отправлено на email : '.$mail.'<br> 
        Тема письма : '.$zagolovoc.'<br> Текст письма : <br>'.$content;

    }else{

        return 'Произошла ошибка при отправке письма !';
    }

}

$mail ='artemivanov_98@bk.ru';          /// Кому отправляем письмо
$name='ООО "СИМ-Ярославль"';           /// Пишем имя отправителя письма
$agent ='Tradein2@sim-yar.ru';        // От кого отправляем письмо пишем любой e-mail или свой
$zagolovoc ='Каталог автомобилей с пробегом';   //// Тема письма
$content= 'Проверьте, есть ли у вас доступ к интернету 
(без интернет-соединения сайт Яндекс.Почты открываться не будет)';     ////  Текст письма можно и в HTML

echo email($mail,$name,$agent,$zagolovoc,$content);