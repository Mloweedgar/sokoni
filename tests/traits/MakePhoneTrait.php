<?php

use Faker\Factory as Faker;
use App\Models\Phone;
use App\Repositories\PhoneRepository;

trait MakePhoneTrait
{
    /**
     * Create fake instance of Phone and save it in database
     *
     * @param array $phoneFields
     * @return Phone
     */
    public function makePhone($phoneFields = [])
    {
        /** @var PhoneRepository $phoneRepo */
        $phoneRepo = App::make(PhoneRepository::class);
        $theme = $this->fakePhoneData($phoneFields);
        return $phoneRepo->create($theme);
    }

    /**
     * Get fake instance of Phone
     *
     * @param array $phoneFields
     * @return Phone
     */
    public function fakePhone($phoneFields = [])
    {
        return new Phone($this->fakePhoneData($phoneFields));
    }

    /**
     * Get fake data of Phone
     *
     * @param array $postFields
     * @return array
     */
    public function fakePhoneData($phoneFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'phone_number' => $fake->randomDigitNotNull,
            'user' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $phoneFields);
    }
}
