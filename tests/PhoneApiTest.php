<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PhoneApiTest extends TestCase
{
    use MakePhoneTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePhone()
    {
        $phone = $this->fakePhoneData();
        $this->json('POST', '/api/v1/phones', $phone);

        $this->assertApiResponse($phone);
    }

    /**
     * @test
     */
    public function testReadPhone()
    {
        $phone = $this->makePhone();
        $this->json('GET', '/api/v1/phones/'.$phone->id);

        $this->assertApiResponse($phone->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePhone()
    {
        $phone = $this->makePhone();
        $editedPhone = $this->fakePhoneData();

        $this->json('PUT', '/api/v1/phones/'.$phone->id, $editedPhone);

        $this->assertApiResponse($editedPhone);
    }

    /**
     * @test
     */
    public function testDeletePhone()
    {
        $phone = $this->makePhone();
        $this->json('DELETE', '/api/v1/phones/'.$phone->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/phones/'.$phone->id);

        $this->assertResponseStatus(404);
    }
}
