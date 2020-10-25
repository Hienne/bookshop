<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;

    public function index()
    {
        return view('front_end.home.index');
    }

    public function search()
    {
        $keyword = $_GET['keyword'];

        $products = $this->productRepository->getSearchProduct($keyword);

        return view('frontend.home.search', compact(['products', 'keyword']));
    }
}
