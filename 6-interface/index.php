<html>
<body>
<?php
interface Animal
{
    public function makeSound();
}
class Cat implements Animal
{
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        echo "MEOU";
    }
}
class Dog implements Animal
{
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        echo "HAWW";
    }
}
class Mouse implements Animal
{
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        echo "JikJik";
    }
}
$cat = new Cat;
$dog = new Dog;
$mouse = new Mouse;
$sound = array($cat,$dog,$mouse);
//$sound[0]->makeSound();
foreach ($sound as $item)
{
    $item->makeSound();
}
?>
</body>
</html>
