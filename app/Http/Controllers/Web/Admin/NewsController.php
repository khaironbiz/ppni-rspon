<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreEventRequest;
use App\Http\Requests\Admin\News\StoreNewsRequest;
use App\Models\Code;
use App\Models\Event;
use App\Models\News;
use App\Models\User;

class NewsController extends Controller
{
    public function index()
    {
        $code_news_category = Code::where('code', 'news-category')->first();
        $news_categories = Code::where('parent_id', $code_news_category->code)->get();
        $news = News::all();
        $data = [
            'class' => 'News',
            'sub_class' => 'All News',
            'title' => 'News All',
            'news' => $news,
            'news_categories'   => $news_categories
        ];
        return view('admin.news.index', $data);
    }
    public function create()
    {
        $code_news_category = Code::where('code', 'news-category')->first();
        $news_categories = Code::where('parent_id', $code_news_category->code)->get();
        $users      = User::orderBy('nama_depan', 'ASC')->get();
        $data = [
            'class'             => 'News',
            'sub_class'         => 'Create News',
            'title'             => 'Create News',
            'news_categories'   => $news_categories,
            'authors'           => $users,
        ];
        return view('admin.news.create', $data);
    }
    public function store(StoreNewsRequest $request){
        $news               = new News();
        $data_post          = $request->all();
        $create             = $news->create($data_post);
        if($create){
            return back()->with('success', 'Data Event success created');
        }else{
            return back()->with('danger', 'Data gagal disimpan');
        }
    }
}
