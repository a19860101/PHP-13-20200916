@extends('template.master')

@section('main')
<h1>INDEX</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)
            <div class="col-8 border mb-5 p-4">
                <div>
                    @if($post->cover != '')
                    <img src="{{asset('storage/images/'.$post->cover)}}" class="w-100">
                    @else
                    <img src="http://via.placeholder.com/800x600/?text=no-picture" class="w-100">
                    @endif
                </div>
                <h2>{{$post->title}}</h2> 
                <div>
                    @foreach($post->tags as $tag)
                       <a href="{{route('tag.post',['id'=>$tag->id])}}" class="badge badge-info">{{$tag->title}}</a>
                    @endforeach
                </div>
                <div>分類: {{$post->category->title}}</div>
                <div>
                    作者: {{$post->user->name}}
                </div>
                <div>
                    {{ Str::limit(strip_tags($post->content),200) }}
                </div>
                <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
                <div>
                    建立時間 {{$post->created_at}}
                    <br> 
                    更新時間 {{$post->updated_at}}
                </div>
                <div>
                    
                    @php Carbon\Carbon::setLocale('zh_TW');  @endphp
                    建立時間 {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                    <br>
                    更新時間 {{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}
                </div>
            </div>
            @endforeach  
            <div class="col-8">
                {{$posts->links()}}
            </div>     
        </div>
    </div>
@endsection