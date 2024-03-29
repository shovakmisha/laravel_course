<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function AllCAt()
    {
        // $categories = Category::latest()->get();
        // $categories = Category::latest()->paginate(5);
        // $categories = DB::table('categories')->latest()->paginate(5);

        // Вибери все з категорій, а також вибери name з таблиці users.
        $categories = DB::table('categories')
                                                ->join('users', 'categories.user_id', 'users.id')
                                                ->select('categories.*', 'users.name');

        return view('admin.category.index', compact('categories'));
    }

    public function AddCAt(Request $request)
    {
        $validatedData = $request->validate(
        [
            'category_name' => 'required|unique:categories|max:255'
        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category Les THen 255 Chars'
        ]
        );

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        // інший спосіб додати категорії в БД
        // $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->user_id = Auth::user()->id;
        // $category->save();

        // Ще 1 спосіб додати категорії в БД
        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // DB::table('categories')->insert($data);

        return Redirect()->back()->with('success', 'Category Inserted Successfully');
    }
}
