<?php


namespace App\Repository\Eloquent;
use App\Models\Product;
use Illuminate\Support\Collection;
use App\Repository\Abstracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
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
}
