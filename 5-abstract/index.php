<html>

<body>
<?php
abstract class ParentClass
{
    abstract protected function prefixName($name);
}
class  ChildClass extends ParentClass
{
    public function prefixName($name,$separator=".",$greet="Dear")
    {
        if($name=="masood")
        {
            $prefix = "Mr";
        }
        elseif ($name=="zahra")
        {
            $prefix = "Mrs";
        }
        else
        {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator}{$name}";

    }

}
$new1 = new ChildClass();
echo $new1 ->prefixName("masood");
?>
</body>
</html>
