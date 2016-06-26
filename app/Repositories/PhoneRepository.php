<?php

namespace App\Repositories;

use App\Models\Phone;
use InfyOm\Generator\Common\BaseRepository;

class PhoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Phone::class;
    }
}
