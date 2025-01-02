<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Event\StoreEventRequest;
use App\Http\Requests\Admin\News\StoreNewsRequest;
use App\Models\Code;
use App\Models\Event;
use App\Models\File;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
//        dd($code_news_category);
        $news_categories = Code::where('parent_id', $code_news_category->id)->get();
        $users      = User::orderBy('nama_depan', 'ASC')->get();
        $files      = File::where('user_id', Auth::id())->where('file_type', 'file')->get();
        $data = [
            'class'             => 'News',
            'sub_class'         => 'Create News',
            'title'             => 'Create News',
            'news_categories'   => $news_categories,
            'authors'           => $users,
            'files'             => $files
        ];
        return view('admin.news.create', $data);
    }
    public function store(StoreNewsRequest $request){
        $file = File::find($request->poster);
        $news               = new News();
        $data_post          = $request->all();
        $data_post['poster']= $file->url;
        $data_post['created_by']= Auth::id();
        $create             = $news->create($data_post);
        if($create){
            return back()->with('success', 'Data Event success created');
        }else{
            return back()->with('danger', 'Data gagal disimpan');
        }
    }
    public function edit($id){
        $news               = News::find($id);
        $code_news_category = Code::where('code', 'news-category')->first();
        $news_categories    = Code::where('parent_id', $code_news_category->id)->get();
        $users              = User::orderBy('nama_depan', 'ASC')->get();
        $files              = File::where('user_id', Auth::id())->where('file_type', 'file')->get();
        $data = [
            'class'             => 'News',
            'sub_class'         => 'Update',
            'title'             => 'Update News',
            'news_categories'   => $news_categories,
            'authors'           => $users,
            'files'             => $files,
            'news'              => $news
        ];
        return view('admin.news.edit', $data);

    }
    public function update(StoreNewsRequest $request, $id){
        $news               = News::find($id);
        $file               = File::find($request->poster);
        $data_post          = $request->all();
        $data_post['poster']= $file->url;
        $data_post['created_by']= Auth::id();
        $update             = $news->update($data_post);
        if($update){
            return back()->with('success', 'Data Event success created');
        }else{
            return back()->with('danger', 'Data gagal disimpan');
        }
    }
}
