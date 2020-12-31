<?php


namespace name;


class Product
{
    public $name;
    public $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class ProcessSale {
    private $callback;

    public function registerCallback (callable $callback) {
        if(!is_callable($callback)){
            throw new \Exception("Функция обратного вызова - невызываема");
        }
        $this->callbacks[]= $callback;
    }

    public function sale(Product $product) {
        print "{$product->name}: Обрабатывается ... \n";
        foreach($this->callbacks as $callback){
            call_user_func($callback,$product);
        }
    }
}

class Mailer
{
    public function doMail(Product $product) {
        print "Отправляется ({$product->name }) \n ";
    }

}

$processor = new ProcessSale();
$processor->registerCallback([new Mailer(), "doMail"]);

$processor->sale(new Product("Туфли", 6));
$processor->sale(new Product("Кофе", 7));