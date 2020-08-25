<?php


namespace App\Repository\Abstracts;

use App\Models\Product;
use Illuminate\Support\Collection;

interface ProductRepositoryInterface
{
   // public function all():Collection;
    public function search($id):Collection;
}
