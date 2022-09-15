<?php

namespace Tests\Feature;

use Tests\TestCase;

class TodoListTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example() {
        $this->withoutExceptionHandling();
        //Preparation
        //Action
        $response = $this->getJson(route('todo.list'));
        //Assertion
        $this->assertEquals(1, count($response->json()));
    }
}