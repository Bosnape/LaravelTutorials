<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=> 200],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=> 50],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=> 70],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=> 150],
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        $viewData = [];
        if ($id > count(ProductController::$products) || $id < 1) {
            return redirect()->route('home.index');
        }
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request): View
    {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);

        $viewData = [];
        $viewData["title"] = "Success - Online Store";
        $viewData["subtitle"] = "Product Created Successfully";
        $viewData["message"] = "The product has been created successfully";
        
        return view('product.success')->with("viewData", $viewData);
    }

}
