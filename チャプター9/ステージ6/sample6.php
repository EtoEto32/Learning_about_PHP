<?php
// クラス変数とクラスメソッド
class Player {
    public $myName;
    private static $charactorCount = 0;

    public function __construct($name) {
        $this->myName = $name;
        Player::$charactorCount++;
        echo Player::$charactorCount."番目のプレイヤー、".$this->myName."が登場した。\n";
    }

    public function attack($enemy) {
        echo $this->myName."は、".$enemy."を攻撃した！\n";
    }

    // クラスメソッドとしてキャラクターカウントを取得するメソッドを追加
    public static function getCharacterCount() {
        return self::$charactorCount;
    }
}

class Wizard extends Player {
    public function __construct() {
        parent::__construct("魔法使い");
    }
    public function attack($enemy) {
        $this->spell();
        echo $this->myName."は、".$enemy."に炎を放った！\n";
    }
    private function spell() {
        echo "シャラララーン！\n";
    }
}

echo "=== パーティーでスライムと戦う ===\n";
$hero = new Player("勇者");
// $hero->attack("スライム");
$warrior = new Player("戦士");
$wizard = new Wizard();

$party = [$hero, $warrior, $wizard];
foreach ($party as $member) {
    $member->attack("スライム");
}
// $wizard->spell();

echo Player::getCharacterCount()."人で、スライムを攻撃した。\n";
?>

<?php
class Player {
    public $myName;
    private static $charactorCount = 0;

    public function __construct($name) {
        $this->myName = $name;
        self::$charactorCount++;
        echo self::$charactorCount."番目のプレイヤー、".$this->myName."が登場した。\n";
    }

    public static function getCharacterCount() {
        return self::$charactorCount;
    }
}

class Wizard extends Player {
    public function __construct() {
        parent::__construct("魔法使い");
    }

    public function castSpell() {
        echo $this->myName."は、魔法を唱えた！\n";
    }

    public static function showCharacterCount() {
        echo "プレイヤーの数: " . self::getCharacterCount() . "\n";
    }
}

echo "=== プレイヤーを作成 ===\n";
$hero = new Player("勇者");
$warrior = new Player("戦士");
$wizard = new Wizard();

$wizard->castSpell();

// `Wizard` クラスから `self::` を使って `Player` クラスの静的メソッドを呼び出す
Wizard::showCharacterCount();
?>

実はこのコードも等価的である。self::を子クラスで使う場合、親クラスに自動で参照される。面白い