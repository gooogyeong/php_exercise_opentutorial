<?php
//얘가 없어도 잘 작동한다. 다만 top.php안에서 호출되는 print_list()가 어디서 오는지를 보다 명확히 보여주기 위함. 
// 그런데 그냥 require('lib/print.php') 이렇게하면
// 'Cannot redeclare print_title()' 이런 에러 메시지가 뜬다.
// index.php 최상단에서 로드한 파일 print.php에서 함수를 정의하던 코드가 여기와서 또 실행되기 때문.
require_once('lib/print.php') //이렇게 해주면 require() 함수를 최초 한번만 실행하고 그 이후엔 무시
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php 
print_list();
            ?>
            <!--<li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=JavaScript">JavaScript</a></li>-->
        </ol>