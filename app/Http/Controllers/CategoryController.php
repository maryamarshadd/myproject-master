<?php 
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    //Index method
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
       
    }

    //Create method
    public function create()
    {
        $categories = Category::all(); // For parent category options
        return view('categories.create', compact('categories'));
    }

//Show method
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    //Edit method
    public function edit(Category $category)
    {
        $categories = Category::all(); // For parent category options
        return view('categories.edit', compact('category', 'categories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->save();

        Session::flash('success', 'Category created successfully.');

        return redirect()->route('categories.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->save();

        Session::flash('success', 'Category updated successfully.');

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        Session::flash('success', 'Category deleted successfully.');

        return redirect()->route('categories.index');
    }
}

