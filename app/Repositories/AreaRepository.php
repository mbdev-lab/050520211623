<?php


namespace App\Repositories;

use App\Models\Area;

class AreaRepository
{
    public function all()
    {
        return Area::all();
    }
}
