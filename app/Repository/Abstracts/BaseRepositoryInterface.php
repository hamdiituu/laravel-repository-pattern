<?php


namespace App\Repository\Abstracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
interface BaseRepositoryInterface
{
    //create
    //all
    //find
    //update
    //delete
    public function create(array $attributes):Model;

    public function find($id):?Model;

    public function all():Collection;

    public function update($id,array  $attributes):Model;

    public function delete($id);


}
