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

            // Remove white space around equal sign in existing key-value pairs
            $envContent = preg_replace('/\s*=\s*/', '=', $envContent);

            // Replace Windows-style line endings with Unix-style line endings
            $envContent = preg_replace('/\r\n/', "\n", $envContent);

            // Sanitize input
            $key = trim($key);
            $value = trim($value);

            $searchPattern = "/^{$key}=.*/m";

            if (preg_match($searchPattern, $envContent)) {
                // If the key already exists, replace its value
                $envContent = preg_replace($searchPattern, "{$key}={$value}", $envContent);
            } else {
                // If the key doesn't exist, append it to the end of the file
                $envContent .= "\n{$key}={$value}";
            }
        } else {
            // If the file doesn't exist, create the new content
            $envContent = "{$key}={$value}";
        }
        // Write content to file
        file_put_contents($this->envFile, $envContent, LOCK_EX);
    }
}