<html>
<body>

<?php
class Myclass {
    const constant1 = "PHP OOP LEARNING";
    public $font_size = "18px";
    public $font_color = "red";
    public $text = "OOP in PHP";
    function Customize_print() {
        echo "<p style='font-size: {$this->font_size};color: {$this->font_color};' >{$this->text}</p>";
    }
}
echo Myclass::constant1;
$fonts1 = new Myclass();
$fonts1->Customize_print();

?>
</body>
</html>

