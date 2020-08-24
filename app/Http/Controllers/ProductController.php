<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\ProductRepository;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
         $this->productRepository =$productRepository;
    }

    public function index()
    {
        return 'ProductController@index';
    }

    public function allProduct(){
        //return Product::all()->where('id','>',1);
        return Product::all();
    }

    public function allProduct2(){
        //return Product::all()->where('id','>',1);
        return $this->productRepository->all();
    }

    public function search($id){
        //return $id;
        //return $this->productRepository->search($id);
       return $this->productRepository->find($id);
    }

    public function del($id){
        //return $id;
        //return $this->productRepository->search($id);
        return $this->productRepository->delete($id);
    }
}
