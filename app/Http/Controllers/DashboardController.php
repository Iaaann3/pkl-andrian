<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalProducts' => Product::count(),
            'totalCategories' => Category::count(),
            'totalUser' => User::count(),
            'totalOrder' => 100
        ];
        return view('admin.index', compact('data'));
    }
}
