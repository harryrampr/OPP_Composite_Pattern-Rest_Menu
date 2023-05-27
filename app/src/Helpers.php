<?php declare(strict_types=1);

namespace App;

class Helpers
{
    public static function showText(string $text): void
    {
        echo "<p>$text</p>";
    }

    public static function setEnv(string $key, string $value, string $envFile = __DIR__ . '/../../.env'): void
    {
        // Check if the file exists
        if (file_exists($envFile)) {
            // Read the file contents
            $envContent = file_get_contents($envFile);
            // Check if the variable already exists
            $pattern = "/^$key=.*/m";
            if (preg_match($pattern, $envContent)) {
                // Replace the existing value
                $envContent = preg_replace($pattern, "$key=$value", $envContent);
            } else {
                // Append the new value
                $envContent .= "\n$key=$value";
            }
            // Write the new content to the file
            file_put_contents($envFile, $envContent);
        } else {
            // Create a new file with the variable
            file_put_contents($envFile, "$key=$value");
        }
    }
}