<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.create.product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Проверка загружаемого файла изображения
            'description' => 'required', // Проверка описания
        ]);

        // Сохранение продукта в базу данных
        $product = new Product();
        $product->description = $request->description;
        // Сохранение изображения
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('images', $fileName);
            $product->image = $fileName;
        }
        $product->save();

        // Перенаправление на страницу с данными о сохраненном продукте
        return redirect()->route('home', $product->id);
    }
}
