<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Requests\AdminRequestKeyword;
use App\Models\Keyword;

class AdminKeywordController extends Controller
{
    public function index(){
        $keywords   =   Keyword::paginate(10);
        $viewData       = [
            'keywords'  => $keywords
        ];
        return view ('admin.keyword.index',$viewData);
    }

    public function create(){
        return view ('admin.keyword.create');
    }
    public function store(AdminRequestKeyword $request){
        $data   =   $request->except('_token');
        $data['k_slug']     =   Str::slug($request->k_name);
        $data['created_at'] =   Carbon::now();
        $id                 =   Keyword::insertGetId($data);

        return redirect()->back();
    }

    public function edit($id){
        $keywords   =   Keyword::find($id);
        return view ('admin.keyword.update',compact('keywords'));
    }
    public function update(AdminRequestKeyword $request,$id){
        $keywords   =   Keyword::find($id);
        $data       =   $request->except('_token');
        $data['k_slug']     =   Str::slug($request->k_name);
        $data['updated_at'] =   Carbon::now();

        $keywords->update($data);
        return redirect()->back();
    }

    public function hot($id){
        $keywords   =   Keyword::find($id);
        $keywords->k_hot    = ! $keywords->k_hot;
        $keywords->save();

        return redirect()->back();

    }

    public function delete($id){
        $keywords   =   Keyword::find($id);
        if($keywords)   $keywords->delete();
        return redirect()->back();
    }
}
