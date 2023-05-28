<?php

namespace Tests;

use App\EnvWriter;
use PHPUnit\Framework\TestCase;

class EnvWriterTest extends TestCase
{
    private string $envFile;
    private EnvWriter $envWriter;

    public function testWriteEnvVariable(): void
    {
        // Test writing a new key-value pair to an empty file
        $this->envWriter->writeEnvVariable('KEY', 'VALUE');
        $this->assertFileExists($this->envFile);
        $this->assertStringEqualsFile($this->envFile, "KEY=VALUE");

        // Test modifying an existing key-value pair
        $this->envWriter->writeEnvVariable('KEY', 'NEW_VALUE');
        $this->assertFileExists($this->envFile);
        $this->assertStringEqualsFile($this->envFile, "KEY=NEW_VALUE");

        // Test writing a new key-value pair to an existing file
        $this->envWriter->writeEnvVariable('ANOTHER_KEY', 'ANOTHER_VALUE');
        $this->assertFileExists($this->envFile);
        $this->assertStringEqualsFile($this->envFile, "KEY=NEW_VALUE\nANOTHER_KEY=ANOTHER_VALUE");

        // Test writing a key-value pair with leading/trailing white space
        $this->envWriter->writeEnvVariable('  TRIM_KEY  ', '  TRIM_VALUE  ');
        $this->assertFileExists($this->envFile);
        $this->assertStringEqualsFile($this->envFile, "KEY=NEW_VALUE\nANOTHER_KEY=ANOTHER_VALUE\nTRIM_KEY=TRIM_VALUE");

        // Test writing a key-value pair with special characters
        $this->envWriter->writeEnvVariable('SPECIAL_KEY', 'Some "value" with \'special\' characters');
        $this->assertFileExists($this->envFile);
        $this->assertStringEqualsFile($this->envFile, "KEY=NEW_VALUE\nANOTHER_KEY=ANOTHER_VALUE\nTRIM_KEY=TRIM_VALUE\nSPECIAL_KEY=Some \"value\" with 'special' characters");
    }

    protected function setUp(): void
    {
        $this->envFile = __DIR__ . '/test.env';
        // Ensure the test.env file doesn't exist initially
        if (file_exists($this->envFile)) {
            unlink($this->envFile);
        }
        $this->envWriter = new EnvWriter($this->envFile);
    }

    protected function tearDown(): void
    {
        // Clean up the test.env file after each test
        if (file_exists($this->envFile)) {
            unlink($this->envFile);
        }
    }
}