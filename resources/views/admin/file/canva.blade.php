@extends('layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success ml-2">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger ml-2">
            {{ session('danger') }}
        </div>
    @endif
    <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
        <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0r_hyEis&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
        </iframe>
    </div>
    https://www.canva.com/design/DAF0r_hyEis/view
    <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0r_hyEis&#x2F;view?utm_content=DAF0r_hyEis&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">1b. Menjawab Pertanyaan</a> by Ririn Setia Rahmawati
@endsection

