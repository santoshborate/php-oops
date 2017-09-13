
<?php
trait trait1 {
    public function hello1() {
        echo 'Hello 1 ';
    }
}

trait trait2 {
    public function hello1() {
        echo 'Hello 2';
    }
}

trait trait3 {
    public function hello1() {
        echo 'Hello 3';
    }
}

class MyHelloWorld {
    use trait1, trait2, trait3 {
        trait1::hello1 insteadof trait2, trait3;
    }

    public function sayExclamationMark() {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->hello1();
$o->sayExclamationMark();
?>
