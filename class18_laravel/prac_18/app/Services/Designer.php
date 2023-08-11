<?php

namespace App\Services;

use App\Interfaces\Member;

class Designer implements Member {
    public function setPosition() {
        return 'My position is Designer';
    }

    public function setName() {
        return 'My name is Designer';
    }
}