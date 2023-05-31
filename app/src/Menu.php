<?php
declare(strict_types=1);

namespace App;

use Ds\Vector;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;

class Menu extends MenuComponent
{
    private Vector $menuComponents;
    private string $name;
    private string $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->menuComponents = new Vector();
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents->push($menuComponent);
    }

    public function remove(MenuComponent $menuComponent): void
    {
        if (($key = $this->menuComponents->find($menuComponent)) !== false) {
            $this->menuComponents->offsetUnset($key);
        }
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents->get($i);
    }

    public function print(): void
    {
        $arrayIterator = new RecursiveArrayIterator($this->toArray());
        $transverseIterator = new RecursiveIteratorIterator($arrayIterator,
            RecursiveIteratorIterator::SELF_FIRST);

        foreach ($transverseIterator as $element) {
            if (is_object($element)) {
                if ($element instanceof Menu) {
                    echo sprintf('<h1>%s, %s</h1>%s',
                        $element->getName(), $element->getDescription(), PHP_EOL);
                } elseif ($element instanceof MenuItem) {
                    $element->print();
                }
            }
        }
    }

    public function toArray(): array
    {
        $array = [
            [$this],
            []
        ];

        $components = $this->menuComponents->toArray();
        foreach ($components as $component) {
            $array[1][] = $component->toArray();
        }

        return $array;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

}