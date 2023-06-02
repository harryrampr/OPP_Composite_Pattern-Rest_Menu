<?php
declare(strict_types=1);

namespace App;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;

class Waitress
{
    private MenuComponent $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu(): void
    {
        $this->allMenus->print();
    }

    public function printVegetarianMenu(): void
    {
        $arrayIterator = new RecursiveArrayIterator($this->allMenus->toArray());
        $transverseIterator = new RecursiveIteratorIterator($arrayIterator,
            RecursiveIteratorIterator::SELF_FIRST);

        echo sprintf('<h1>VEGETARIAN MENU</h1>%s', PHP_EOL);

        while ($transverseIterator->valid()) {
            $element = $transverseIterator->current();
            if ($element instanceof MenuItem) {
                if ($element->isVegetarian()) {
                    $element->print();
                }
            }
            $transverseIterator->next();
        }
    }
}