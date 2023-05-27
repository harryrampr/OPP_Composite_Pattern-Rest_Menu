<?php declare(strict_types=1);

namespace App;

class Helpers
{
    public static function showText(string $text): void
    {
        echo "<p>$text</p>";
    }
}