<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編課題</title>
</head>
<body>
    <p>
        <?php
        // Food クラスを定義
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo "{$this->price}<br>";
            }
        }

        // Animal クラスを定義
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo $this->height;
            }
        }

        // インスタンスを作成
        $apple = new Food("じゃがいも", 100);
        $elephant = new Animal("ゾウ", 300, 5000);

        // インスタンスの情報を出力
        print_r($apple);
        echo "<br>";
        print_r($elephant);
        echo "<br>";

        // メソッドを実行
        $apple->show_price();
        $elephant->show_height();
        ?>
    </p>
</body>
</html>
