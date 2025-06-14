<?php
# ■ 指示：
# 上記のコードに含まれる問題点を2つ以上挙げてください。
# それぞれの理由と改善案をコード内のコメントで説明してください。

# 補足 (実行方法)
# php problem1.php 

function update_user_email($user_id, $email) {
    if (empty($user_id) || empty($email)) {
        return false;
    }

    $sql = "UPDATE users SET email='" . $email . "' WHERE id=" . $user_id;
    // 本来ここでDB実行するが、今回は出力のみ
    echo "Executing SQL: $sql
";
}

// 実行例
update_user_email(1, "test@example.com");