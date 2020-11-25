@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>垃圾桶</h1>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>標題</th>
                    <th>建立時間</th>
                    <th>最後修改時間</th>
                    <th></th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{route('trash.restore',['id'=>$post->id])}}" class="btn btn-info">還原</a>
                        <form action="" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection