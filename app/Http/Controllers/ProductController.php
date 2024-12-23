<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'Laptop',
       'description' => 'High-performance laptop',
       'price' => 1500, 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmXO5e4g--8nXnZDYiqnybyhz9NNu0EngtUg&s'],
        ['id' => 2, 'name' => 'Smartphone',
       'description' => 'Latest smartphone with great features',
       'price' => 800, 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNZC2wZIiq8h20MtDSHDC4-UFuqhzYz9LmDw&s'],
        ['id' => 3, 'name' => 'Tablet',
       'description' => 'Portable tablet for everyday use',
       'price' => 500, 'img' => 'https://s.alicdn.com/@sc04/kf/Hdb08e8068c324493834a35cdff169277E.jpg_720x720q50.jpg'],
       ['id' => 4, 'name' => 'Mouse',
       'description' => 'Portable mouse for everyday use',
       'price' => 1200, 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERLU1NX6f9_e9lGMgi2UGkor6_ZQe1EFM-A&s'],
       ['id' => 5, 'name' => 'Key Boards',
       'description' => 'Portable key board for everyday use',
       'price' => 1200, 'img' => 'https://media.education.studio7thailand.com/55318/Signo-Gaming-Keyboard-Maiden-KB-761-TKL-Mechanical-(Blue-Switch)-3-square_medium.jpg'],
       ['id' => 6, 'name' => 'shirt',
       'description' => 'Portable shirt for everyday use',
       'price' => 230, 'img' => 'https://i5.walmartimages.com/seo/T-Shirts-for-Men-Men-s-Summer-Fashion-Hawaiian-Style-Short-Sleeve-Casual-Shirts-Mens-Dress-Shirts-Mens-T-Shirts-Casual-Tank-Tops-Men-Dark-Gray-3XL_cbefabea-b807-4590-b502-b62a0898318e.df606a206d0f41895164a0a3037b47f1.jpeg'],
       ['id' => 7, 'name' => 'T-Shirt',
       'description' => 'Portable t-shirt for everyday use',
       'price' => 240, 'img' => 'https://marketplace.canva.com/print-mockup/bundle/E9Me4jcyzMX/fit%3Afemale%2Cpages%3Adouble-sided%2Csurface%3Amarketplace/product%3A171618%2Csurface%3Amarketplace/EAFLsJd5odY/1/0/933w/canva-black-bold-logo-text-graphic-t-shirt-xBtZhbBcHcY.png?sig=64788a1a4a704de7ec24a4b06ed394d5&width=800'],
       ['id' => 8, 'name' => 'Shoes',
       'description' => 'Portable shoue for everyday use',
       'price' => 2400, 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxc7u5t790oBbvxGKedhgocMg8WJfupBBLcA&s'],
       ['id' => 9, 'name' => 'Socks',
       'description' => 'Portable socks for everyday use',
       'price' => 100, 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS68I4pW64N9Pl2fXUM19TAw8ZiiaxaqiiNuw&s'],
       ['id' => 10, 'name' => 'Cap',
       'description' => 'Portable cap for everyday use',
       'price' => 200, 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8aKOhJHziztzhes-i62ZHDBTUHpCdYVrL0Q&s']
        ];

    /**
     * Display a listing of the resource.
     */
    public function index()
 {
 return Inertia::render('Products/Index', ['products' => $this->products]);
 }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
 {
 $product = collect($this->products)->firstWhere('id', $id);
 if (!$product) {
 abort(404, 'Product not found');
 }
 return Inertia::render('Products/Show', ['product' => $product]);
 }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
