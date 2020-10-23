<?php
class Ingridient
{
    public $name;
    public $cost;
 
    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }
 
    public function changeCost($newCost)
    {
        $this->cost = $newCost;
    }
}
 
class Entree
{
    public $ingridients = [];
 
    public function __construct(array $ingridients)
    {
        $this->ingridients = $ingridients;
    }
 
    public function getFullCost()
    {
        $sum = 0;
        foreach ($this->ingridients as $ingridient) {
            $sum += $ingridient->cost;
        }
 
        return $sum;
    }
}
 
$ingridient1 = new Ingridient('potatoes', 5);
$ingridient2 = new Ingridient('carrots', 10);
$ingridient3 = new Ingridient('onions', 15);
 
$soup = new Entree([
    $ingridient1,
    $ingridient2,
    $ingridient3
]);
var_dump($ingridient1->$ingridietns);

 
echo $soup->getFullCost(); // 30





?>
