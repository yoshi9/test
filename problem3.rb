# ■ 仕様追加：
# House クラスを追加してください。
# puts を1か所にまとめて、各クラスでは物件種別の「文字列」だけを持つようにしてください。
# 今後さらに物件種別が増えても柔軟に対応できるようにしてください。

# ■ 指示：
# 上記に従い実装にしてください。
# 設計意図を説明してください（コメントで1～5行ほどで）

# 補足 (実行方法)
# ruby problem3.rb

# 設計意図
#
#
#
#
#

class Property
  def display_type
    puts "Some property"
  end
end

class Apartment < Property
  def display_type
    puts "Apartment"
  end
end

apartment = Apartment.new
apartment.display_type

property = Property.new
property.display_type
