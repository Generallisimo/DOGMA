<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.img', compact('products'));
    }
    public function home()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function collage(Product $product)
    {
        $products = $product->images; // Предположим, что у продукта есть отношение images
        return view('collage', compact('product', 'products'));
    }

    public function create(Product $product)
    {
        return view('admin.create.image', compact('product'));
    }
    
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка загружаемого файла изображения
        ]);

        // Сохранение изображения
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();

            // Перемещаем изображение в папку public/images
            $image->move(public_path('images'), $fileName);

            // Создаем новое изображение и связываем его с продуктом
            $newImage = new Image();
            $newImage->image = $fileName;
            $newImage->product_id = $product->id;
            $newImage->save();
        }

        // Перенаправление на страницу с данными о продукте
        return redirect()->route('admin.img');
    }
    
}
