<?php
namespace Tests;

use PHPUnit\Framework\TestCase;


class TaskTest extends TestCase
{
    // Using PHPUnit to test an API endpoint
    public function testGetTasksEndpoint()
    {
        $response = $this->http->get('/api/v1/tasks');
        $this->assertEquals(200, $response->getStatusCode());
        $tasks = json_decode($response->getBody(), true);
        $this->assertIsArray($tasks);
    }
}