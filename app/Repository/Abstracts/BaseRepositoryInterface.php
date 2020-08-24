<?php


namespace App\Repository\Abstracts;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function create(array $attributes):Model;

    public function find($id):?Model;


}
