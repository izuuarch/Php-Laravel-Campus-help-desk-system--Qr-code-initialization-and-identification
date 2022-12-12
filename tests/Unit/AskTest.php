<?php

namespace Tests\Unit;

use Tests\TestCase;

class AskTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_ask_test()
    {
       $response =  $this->call('POST','/user/question',[
            'title' => 'new title',
            'shortnote' => 'the new question is here',
        ]);
        //   dd($response);
        // $response->assertSuccessful();
    }
}
