<html>
<body>

<?php
class Car {
    private $name;
    private $color;
    public function __construct($name,$color) {
        $this->name = $name;
        $this->color = $color;
    }
    public  function message() {
        echo "<p>I am {$this->name} and my color is {$this->color}";
    }
}
$CarBrand1 = new Car("Volvo","Red");
$CarBrand1->message();
?>

</body>
</html>
