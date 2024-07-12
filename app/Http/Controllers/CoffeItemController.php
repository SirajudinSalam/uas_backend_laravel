<?php

namespace App\Http\Controllers;
use App\Models\Coffee_item;
use Illuminate\Http\Request;

class CoffeItemController extends Controller
{
    public function getCoffeeByCategory($categoryId)
    {
        $coffeeItems = Coffee_item::where('category_id', $categoryId)->get();

        if ($coffeeItems->isEmpty()) {
            return response()->json([
                'message' => 'No coffee items found for this category.'
            ], 404);
        }

        $coffeeItems->transform(function ($item) {
            $item->image_url = asset("storage/{$item->image_url}");
            return $item;
        });

        return response()->json($coffeeItems, 200);
    }
}
