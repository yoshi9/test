<?php
// ■ 仕様追加：
// House クラスを追加してください。
// puts を1か所にまとめて、各クラスでは物件種別の「文字列」だけを持つようにしてください。
// 今後さらに物件種別が増えても柔軟に対応できるようにしてください。

// ■ 指示：
// 上記に従い実装にしてください。
// 設計意図を説明してください（コメントで1～5行ほどで）

// 補足 (実行方法)
// php problem2.php 

// 設計意図
//
//
//
//
//

class Property {
    public function display_type() {
        echo $this->type() . "\n";
    }

    protected function type() {
        return "Some property";
    }
}

class Apartment extends Property {
    protected function type() {
        return "Apartment";
    }
}

$apartment = new Apartment();
$apartment->display_type();

$property = new Property();
$property->display_type();