<?php
declare(strict_types=1);

namespace App;

use Exception;

abstract class MenuComponent
{
    abstract public function getName(): string;

    abstract public function getDescription(): string;

    abstract public function toArray(): array;

    /**
     * @throws Exception
     */
    public function getPrice(): float
    {
        throw new Exception('Unsupported Operation');
    }

    /**
     * @throws Exception
     */
    public function isVegetarian(): bool
    {
        throw new Exception('Unsupported Operation');
    }

    abstract public function print(): void;

    /**
     * @throws Exception
     */
    public function add(MenuComponent $menuComponent): void
    {
        throw new Exception('Unsupported Operation');
    }

    /**
     * @throws Exception
     */
    public function remove(MenuComponent $menuComponent): void
    {
        throw new Exception('Unsupported Operation');
    }

    /**
     * @throws Exception
     */
    public function getChild(int $i): MenuComponent
    {
        throw new Exception('Unsupported Operation');
    }

}