<?php
class person
{
    //name,height,age,....
    public $name="Pramod Jana";
    public $height="5.8";
    public $age=23;
    public $eyecolor="black";
    
    function note()
    {
        $noteval="Show some respect";
    }
}

$var1= new person();

$var2= new person();

echo $var1->name;
echo "<br>";
echo $var1->height;

echo "The Person name is ".$var1->name.". His Eye color is ".$var2->eyecolor;

?>