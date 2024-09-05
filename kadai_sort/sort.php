<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Language" content="ja">
    <meta charset="UTF-8">
    <meta name="google viewport" content="notranslate width=device-width, initial-scale=1.0">
    <title>array_sort</title>
</head>
<body>
    <?php
        function sort_2way($array, $order){
            if($order == TRUE){
                sort($array);
                echo "昇順にソートします。<br>";
            }else{
                rsort($array);
                echo "降順にソートします。<br>";
            }
            foreach($array as $arrars){
                echo $arrars."<br>";
            }
        }
        $array = [15,4,18,23,10];
        sort_2way($array, TRUE);
        sort_2way($array, FALSE);
    ?>
</body>
</html>