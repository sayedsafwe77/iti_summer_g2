<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderProduct>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // order product
        // 1 10 20  50
        $product = Product::inRandomOrder()->first();
        $order = Order::inRandomOrder()->first();
        $quantity = fake()->numberBetween(0 , $product->quantity);
        $product->quantity -= $quantity;
        $product->save();
        $order->total += $quantity * $product->price;
        $order->save();
        return [
            'product_id' => $product->id,
            'order_id' => $order->id,
            'quantity' => $quantity,
            'price' => $product->price,
        ];
    }
}
