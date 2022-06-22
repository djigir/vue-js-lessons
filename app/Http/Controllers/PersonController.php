<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'age'=> 20,
                'name' => 'Masha',
                'job' => 'realtor',
            ],

            [
                'id' => 2,
                'age'=> 33,
                'name' => 'Kiril',
                'job' => 'it',
            ],

            [
                'id' => 2,
                'age'=> 35,
                'name' => 'Luba',
                'job' => 'sexedw',
            ]
        ];

        return $persons;
    }
}
