<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\AdminRequestCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Attribute;

use Illuminate\Http\Request;

class AdminCategoryController extends AdminController
{
    public function index(){
        return view ('admin.category.index');
    }
    public function create(){
        return view ('admin.category.create');
    }

    public function store(AdminRequestCategory $request ){
        $data   =   $request->except('_token');
        $data['c_slug']     =   Str::slug($request->c_name);
        $data['created_at'] =   Carbon::now();
        $id                 =   Category::insertGetId($data);

        return redirect()->back();
    }
}
