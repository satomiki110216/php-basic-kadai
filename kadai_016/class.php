<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_class.php</title>
</head>
<body>
<p>
        <?php
        // Foodクラス
        class Food{
            // プロパティ
            private $name;
            private $price;

            // メソッド
            public function show_price(){
                echo $this->price;
            }

            // コンストラクタ定義
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }
        // Animalクラス
        class Animal{
            private $name;
            private $height;
            private $weight;

            public function show_height(){
                echo $this->height;
            }

            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化
        $food = new Food('potato',250);
        $animal = new Animal('dog', 60, 5000);

        // インスタンスの出力
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        // メソッド実行
        $food->show_price();
        echo '<br>';
        $animal->show_height();
        ?>
    </p>
</body>
</html>