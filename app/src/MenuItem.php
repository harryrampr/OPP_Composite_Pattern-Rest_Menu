<?php
declare(strict_types=1);

namespace App;

class MenuItem extends MenuComponent
{
    private string $name;
    private string $description;
    private bool $vegetarian;
    private float $price;

    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * @throws \Exception
     */
    public function print(): void
    {
        echo sprintf("<h2>%s%s, $%.2F</h2>\n<p class='mb-3 italic'>%s</p>%s", $this->getName(),
            ($this->isVegetarian() ? '(v)' : ''), $this->getPrice(),
            $this->getDescription(), PHP_EOL);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function toArray(): array
    {
        return [$this];
    }
}