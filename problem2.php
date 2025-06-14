<?php
# ■ 仕様追加：
# ユーザーにcountry（国）とnickname（ニックネーム）属性を追加してください。
# 表示名（display_name）のルールを以下としてください：
# ニックネームが設定されている場合は、ニックネームを表示
# それ以外の場合、日本のユーザーは「姓 名」、アメリカのユーザーは「名 姓」の順

# ■ 指示：
# 上記に従い実装にしてください。
# 設計意図を説明してください（コメントで1～5行ほどで）

# 補足 (実行方法)
# php problem2.php 

# 設計意図
#
#
#
#
#

class User {
    private $first_name;
    private $last_name;

    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function display_name() {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$user = new User('taro', 'yamada');
echo $user->display_name();
