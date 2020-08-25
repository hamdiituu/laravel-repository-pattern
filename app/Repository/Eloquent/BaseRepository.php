<?php


namespace App\Repository\Eloquent;
use http\Exception\BadQueryStringException;
use Illuminate\Database\Eloquent\Model;
use App\Repository\Abstracts\BaseRepositoryInterface;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface {

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


    public function delete($id)
    {
           return $this->model->where('id',$id)->delete();
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function update($id, array $attributes): Model
    {
        return $this->model->where('id',$id)->update($attributes);
    }

}
