<?php


namespace App\Repository\Eloquent;
use Illuminate\Database\Eloquent\Model;
use App\Repository\Abstracts\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterfacepublic {

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find($id): ?Model
    {
       return $this->model->find($id);
    }


}
