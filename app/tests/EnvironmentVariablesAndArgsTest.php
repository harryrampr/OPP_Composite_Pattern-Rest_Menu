<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Dotenv\Dotenv;

/**
 * Class EnvironmentVariablesTest
 *
 * Test case to verify the existence and valid value of important environment variables and arguments.
 */
class EnvironmentVariablesAndArgsTest extends TestCase
{

    /**
     * Test if SERVER_DEVMENT_DIR environment variable is set correctly,
     * also verifies that ARG SERVER_DEVMENT_DIR is set and has the same value.
     *
     * @return void
     */
    public function testServerDevmentDirEnvVarS(): void
    {
        // If this value is changed, ARG SERVER_DEVMENT_DIR at file www.Dockerfile must change too
        $expectedValue = '/var/www/dev';

        $dockerfileContent = file_get_contents(__DIR__ . '/../../www.Dockerfile');
        $dotEnvFileContent = file_get_contents(__DIR__ . '/../../.env');
        $varValue = $_ENV['SERVER_DEVMENT_DIR'];

        $this->assertEquals($expectedValue, $varValue);
        // .env file must contain SERVER_DEVMENT_DIR variable
        $this->assertStringContainsString('SERVER_DEVMENT_DIR=' . $expectedValue, $dotEnvFileContent);
        // www.Dockerfile file must contain SERVER_DEVMENT_DIR variable
        $this->assertStringContainsString('ARG SERVER_DEVMENT_DIR=' . $expectedValue, $dockerfileContent);
    }

    /**
     * Test if DB_CONTAINER_NAME environment variable is set correctly,
     * also verifies that ARG DATABASE_HOST is set and has the same value.
     *
     * @return void
     */
    public function testDbHostNameEnvVarS(): void
    {
        $dockerfileContent = file_get_contents(__DIR__ . '/../../www.Dockerfile');
        $dotEnvFileContent = file_get_contents(__DIR__ . '/../../.env');
        $varValue = $_ENV['DB_CONTAINER_NAME'];

        // Value must equal to 'db', don't change this value
        $this->assertEquals('db', $varValue);
        // .env file must contain DB_CONTAINER_NAME variable
        $this->assertStringContainsString('DB_CONTAINER_NAME=' . $varValue, $dotEnvFileContent);
        // Value of ARG DATABASE_HOST must be the same of DB_CONTAINER_NAME
        $this->assertStringContainsString('ARG DATABASE_HOST=' . $varValue, $dockerfileContent);
    }

    /**
     * Test if DB_CONTAINER_HOST_PORT environment variable is set at .env file
     *
     * @return void
     */
    public function testDbHostPortEnvVarS(): void
    {
        $dotEnvFileContent = file_get_contents(__DIR__ . '/../../.env');
        $varValue = $_ENV['DB_CONTAINER_HOST_PORT'];

        // Value must be set
        $this->assertNotNull($varValue);
        // .env file must contain DB_CONTAINER_HOST_PORT variable
        $this->assertStringContainsString('DB_CONTAINER_HOST_PORT=' . $varValue, $dotEnvFileContent);
    }

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        // Load .env file variables.
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();
    }

}