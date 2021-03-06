@extends('template.master')
@section('main')
    <h1>Show</h1>
    <div class="container">
        <div class="row justify-content-center">
            {{--@foreach($posts as $post)--}}
            <div class="col-8 border mb-5 p-4">
                <h2>{{$post->title}}</h2>
                <div>
                    作者: {{$post->user->name}}
                </div>
                <div>
                    {!! $post->content !!}
                </div>
                <div>
                {{$post->created_at}}
                </div>
                <div class="mt-3">
                    @if($post->user->id == Auth::id())
                    <form action="{{route('post.destroy',['id'=>$post->id])}}" method="post" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                    </form>
                    <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-success">編輯內容</a>
                    @endif
                    <a href="{{route('post.index')}}" class="btn btn-info">文章列表</a>
                </div>
            </div>
            {{--@endforeach       --}}
        </div>
    </div>
@endsection