<?php 
function print_title() {
    if (isset($_GET['id'])) {echo $_GET['id'];}
    else {echo "Home";}
}
function print_desc() {
    $safe_id = basename($_GET['id']);
    //echo $_GET['id']; // ../array.php
    //echo $safe_id; // array.txt
    if (isset($_GET['id'])) {echo file_get_contents("data/".$safe_id);}
    else {echo "Welcome!";}
}
function print_list() {
    $list = scandir('./data'); // scandir('data'); 도 가능
    //var_dump($list);
    //array(6) { 
    //    [0]=> string(1) "." // 현재 디렉토리랑
    //    [1]=> string(2) ".." // 부모 디렉토리까지 같이 찍힘.
    //    [2]=> string(3) "CSS" 
    //    [3]=> string(4) "HTML" 
    //    [4]=> string(10) "JavaScript"
    //    [5]=> string(3) "PHP" 
    //  }
    // echo "<li>$list[2]</li>\n" 문자열 사이에 $list 이런식으로 적으면 변수로 인식. 
    // echo "<li>$list[3]</li>\n"
    // echo "<li>$list[4]</li>\n"
    // echo "<li>$list[5]</li>\n"
    $i = 0;
    while ($i < count($list)) {
        if($list[$i] !== '.') {
            if ($list[$i] != '..') {  
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        }
        $i = $i + 1;
    }
}
function print_update_delete_link() { 
    if(isset($_GET['id'])) {
        echo "<a href=\"update.php?id={$_GET['id']}\">update</a>";
        echo " ";
        echo "<form action=\"delete.php?id={$_GET['id']}\" method=\"post\">
            <input type=\"hidden\" name=\"id\" value=\"{$_GET['id']}\" >
            <input type=\"submit\" value=\"delete\">
        </form>";
        }
}
?> 