<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getUsers() {
        $data = DB::table('users')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getProducts() {
        $data = DB::table('products')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getOrders() {
        $data = DB::table('orders')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getCategories() {
        $data = DB::table('categories')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getBrands() {
        $data = DB::table('brands')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getCarts() {
        $data = DB::table('carts')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getCartItems() {
        $data = DB::table('cart_items')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getDashboard() {
        $data = DB::table('dashboard')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getLogin() {
        $data = DB::table('login')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getOrderItems() {
        $data = DB::table('order_items')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getPayments() {
        $data = DB::table('payments')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getProductImages() {
        $data = DB::table('product_images')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getProductSizes() {
        $data = DB::table('product_sizes')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getReviews() {
        $data = DB::table('reviews')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function getSizes() {
        $data = DB::table('sizes')->get();
        return response()->json(['status' => true, 'data' => $data]);
    }
}