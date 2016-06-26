<?php

use App\Models\Phone;
use App\Repositories\PhoneRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PhoneRepositoryTest extends TestCase
{
    use MakePhoneTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PhoneRepository
     */
    protected $phoneRepo;

    public function setUp()
    {
        parent::setUp();
        $this->phoneRepo = App::make(PhoneRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePhone()
    {
        $phone = $this->fakePhoneData();
        $createdPhone = $this->phoneRepo->create($phone);
        $createdPhone = $createdPhone->toArray();
        $this->assertArrayHasKey('id', $createdPhone);
        $this->assertNotNull($createdPhone['id'], 'Created Phone must have id specified');
        $this->assertNotNull(Phone::find($createdPhone['id']), 'Phone with given id must be in DB');
        $this->assertModelData($phone, $createdPhone);
    }

    /**
     * @test read
     */
    public function testReadPhone()
    {
        $phone = $this->makePhone();
        $dbPhone = $this->phoneRepo->find($phone->id);
        $dbPhone = $dbPhone->toArray();
        $this->assertModelData($phone->toArray(), $dbPhone);
    }

    /**
     * @test update
     */
    public function testUpdatePhone()
    {
        $phone = $this->makePhone();
        $fakePhone = $this->fakePhoneData();
        $updatedPhone = $this->phoneRepo->update($fakePhone, $phone->id);
        $this->assertModelData($fakePhone, $updatedPhone->toArray());
        $dbPhone = $this->phoneRepo->find($phone->id);
        $this->assertModelData($fakePhone, $dbPhone->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePhone()
    {
        $phone = $this->makePhone();
        $resp = $this->phoneRepo->delete($phone->id);
        $this->assertTrue($resp);
        $this->assertNull(Phone::find($phone->id), 'Phone should not exist in DB');
    }
}
