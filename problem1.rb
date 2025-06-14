# ■ 指示：
# 上記のコードに含まれる問題点を2つ以上挙げてください。
# それぞれの理由と改善案をコード内のコメントで説明してください。

# 補足 (実行方法)
# ruby problem1.rb
module DB
  def self.execute(sql)
    puts "Executing SQL: #{sql}"
  end
end

def update_user_email(user_id, email)
  return false if user_id.nil? || email.nil?

  sql = "UPDATE users SET email='#{email}' WHERE id=#{user_id}"
  DB.execute(sql)
end

# 実行例（コンパイル確認用）
update_user_email(1, "test@example.com")