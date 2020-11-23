@extends('template.master')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="{{route('post.update',['id'=>$post->id])}}" method="post">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="title">文章標題</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="tag">文章標籤</label>
                        <input type="text" class="form-control" id="tag" name="tag" value="{{$post->toTagString()}}">
                    </div>
                    <div class="form-group">
                    <label for="category_id">分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" 
                            @if($category->id===$post->category_id) 
                                selected 
                            @endif>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label for="content">文章內文</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                    </div>
                    <input type="submit" value="更新文章" class="btn btn-primary">
                    <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">

                </form>
            </div>
        </div>
    </div>
@endsection