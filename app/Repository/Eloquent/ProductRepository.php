<?php


namespace App\Repository\Eloquent;
use App\Models\Product;
use App\Repository\Abstracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Repository\Abstracts\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all()->where('id','>',1);
    }

    public function search($id): Collection
    {
        return $this->model->where('id',$id)->get();
    }

}
