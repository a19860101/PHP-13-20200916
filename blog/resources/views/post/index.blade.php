@extends('template.master')

@section('main')
<h1>INDEX</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)
            <div class="col-8 border mb-5 p-4">
                <h2>{{$post->title}}</h2>
                <div>
                    {{Str::limit($post->content,200)}}
                </div>
                <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
                <div>
                {{$post->created_at}}
                </div>
            </div>
            @endforeach       
        </div>
    </div>
@endsection