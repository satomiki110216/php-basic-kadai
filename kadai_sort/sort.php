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
        function sort_2way($order){
            $array = [15,4,18,23,10];
            if($order == TRUE){
                sort($array);
                echo "昇順にソートします。<br>";
                foreach($array as $arrars){
                    echo $arrars."<br>";
                }
            }else{
                rsort($array);
                echo "降順にソートします。<br>";
                foreach($array as $arrars){
                    echo $arrars."<br>";
                }
            }
        }
        sort_2way(TRUE);
        sort_2way(FALSE);
    ?>
</body>
</html>