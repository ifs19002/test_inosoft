<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get('/api/kendaraan')->assertStatus(200);
        $this->post('/api/kendaraan/store')->assertStatus(200);
        $this->get('/api/kendaraan/show/{id}')->assertStatus(200);
        // $this->post('/api/kendaraan/update/{id}')->assertStatus(200);
        // $this->delete('/api/kendaraan/delete/{id}')->assertStatus(200);
    }
}
