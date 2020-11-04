<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
@foreach($posts as $post)
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
                        <label for="content">文章內文</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                    </div>
                    <input type="submit" value="更新文章" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endforeach
</body>
</html>