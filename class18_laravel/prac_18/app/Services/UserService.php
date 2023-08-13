<?php

namespace App\Services;


use Illuminate\Support\Facades\DB;

class UserService {
    public function roles() {
        $roles = [
            new Designer(),
            new Hr(),
            new Programmer()
        ];

        $name_array = [];
        $position_array = [];
        foreach($roles as $role) {
            array_push($name_array, $role->setName());
            array_push($position_array, $role->setPosition());
        }

        return $name_array, $position_array;
    }
}