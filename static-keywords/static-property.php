
<?php
class Foo {
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static; // $this not used to access the static property
    }
}

print Foo::$my_static . "\n";
$foo = new Foo();
print $foo->staticValue() . "\n";

?>

