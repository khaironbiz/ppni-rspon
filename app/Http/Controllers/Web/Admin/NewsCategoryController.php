<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use App\Models\News;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(){
        $code_news_category = Code::where('code', 'news-category')->first();
        $news_categories = Code::where('parent_id', $code_news_category->id)->get();
//        dd($news_categories);
        $data = [
            'class'             => 'News',
            'sub_class'         => 'News Category',
            'title'             => 'News Category All',
            'news_categories'   => $news_categories,
            'code_news_category'=> $code_news_category
        ];
        return view('admin.news_category.index', $data);
    }
    public function show($id){
        $code = Code::find($id);
        $child_codes = Code::where('parent_id', $id)->orderBy('urutan','ASC')->get();
//        dd($child_codes);
        $data = [
            'class'         => 'Code',
            'sub_class'     => 'Code By ID',
            'title'         => 'Code ByID',
            'code'          => $code,
            'child_codes'   => $child_codes
        ];
        return view('admin.code.show', $data);
    }
}
