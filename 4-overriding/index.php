<!-- overriding topic in php -->
<html>
<body>
<?php
class Fruit {
    public $name;
    public $color;
    public function __construct ($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "the fruit is {$this->name} and color is {$this->color}";
    }
}

 class Strawberry extends Fruit {
    public $weight;
    public function __construct ($name, $color,$weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro()
    {
        echo "the fruit is {$this->name} and color is {$this->color} and weight is {$this->weight}";
    }
 }

$SomeFruit = new Strawberry("Apple","Yellow","150");
$SomeFruit->intro();

?>

</body>
</html>
