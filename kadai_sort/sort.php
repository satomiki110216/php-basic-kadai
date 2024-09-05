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
    $nums = [15,4,18,23,10];
        function sort_2way($nums, $order){
            if($order == TRUE){
                sort($nums);
                echo "昇順にソートします。<br>";
            }else{
                rsort($nums);
                echo "降順にソートします。<br>";
            }
            foreach($nums as $arrars){
                echo $arrars."<br>";
            }
        }
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
    ?>
</body>
</html>