<html>
<body>
<?php
interface Shape
{
    public function calcArea();
}
class Circle implements Shape
{
    private $radius;
    public function __construct($radius)
    {

        $this->radius = $radius;
    }
    public function calcArea()
    {
        // TODO: Implement calcArea() method.
        return $this->radius * $this->radius;
    }
}
class Rectangle implements Shape
{
    private $width;
    private $height;
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calcArea()
    {
        // TODO: Implement calcArea() method.
        return $this->width * $this->height;
    }
}
$radius = 2;
$width = 4;
$height = 5;
$circleArea = new Circle($radius);
$rectangleArea = new Rectangle($width,$height);
echo "circleArea({$radius})= {$circleArea->calcArea()}<br>";
echo "rectangleArea({$width},{$height}) = {$rectangleArea->calcArea()}";
?>
</body>
</html>