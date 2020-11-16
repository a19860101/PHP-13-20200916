@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="{{route('category.store')}}" method="post">
            @csrf
                <div class="form-group">
                    <label for="title">分類標題</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="slug">分類slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                </div>
                <input type="submit" value="建立分類" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
        <div class="col-4">
            <ul class="list-group">
                @foreach($category as $cate)
                <li class="list-group-item">
                    {{$cate->title}}
                    <form action="{{route('category.destroy',['id'=>$cate->id])}}" method="post" class="d-inline-block float-right">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
