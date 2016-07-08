<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class indexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function indexTest()
    {
        $response = $this->get(route('reprodutivo.copia-registro.index'));
        $this->assertEquals(200, $response->getStatusCode());
    }
}
