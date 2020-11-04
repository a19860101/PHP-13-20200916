<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <h1>Show</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)
            <div class="col-8 border mb-5 p-4">
                <h2>{{$post->title}}</h2>
                <div>
                    {{$post->content}}
                </div>
                <div>
                {{$post->created_at}}
                </div>
                <div>
                    <form action="{{route('post.destroy',['id'=>$post->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                    </form>
                    <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-success">編輯內容</a>
                </div>
            </div>
            @endforeach       
        </div>
    </div>
</body>
</html>