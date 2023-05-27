<?php

namespace App;

class EnvWriter
{
    private string $envFile;

    public function __construct(string $envFile = __DIR__ . '/../../.env')
    {
        $this->envFile = $envFile;
    }

    public function writeEnvVariable(string $key, mixed $value): void
    {
        // Check if the file exists
        if (file_exists($this->envFile)) {
            $envContent = file_get_contents($this->envFile);

            $pattern = "/^{$key}=.*/m";

            if (preg_match($pattern, $envContent)) {
                // If the key already exists, replace its value
                $envContent = preg_replace($pattern, "{$key}={$value}", $envContent);
            } else {
                // If the key doesn't exist, append it to the end of the file
                $envContent .= PHP_EOL . "{$key}={$value}";
            }
        } else {
            // If the file doesn't exist, create the new content
            $envContent = "{$key}={$value}";
        }
        // Write content to file
        file_put_contents($this->envFile, $envContent, LOCK_EX);
    }
}