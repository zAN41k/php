<?php


namespace name;




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