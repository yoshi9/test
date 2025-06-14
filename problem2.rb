# ■ 仕様追加：
# ユーザーにcountry（国）とnickname（ニックネーム）属性を追加してください。
# 表示名（display_name）のルールを以下としてください：
# ニックネームが設定されている場合は、ニックネームを表示
# それ以外の場合、日本のユーザーは「姓 名」、アメリカのユーザーは「名 姓」の順

# ■ 指示：
# 上記に従い実装にしてください。
# 設計意図を説明してください（コメントで1～5行ほどで）

# 補足 (実行方法)
# ruby problem2.rb

# 設計意図
#
#
#
#
#

class User
  attr_reader :first_name, :last_name

  def initialize(first_name, last_name)
    @first_name = first_name
    @last_name = last_name
  end

  def display_name
    "#{first_name} #{last_name}"
  end
end

user = User.new('taro','yamada')
puts user.display_name
