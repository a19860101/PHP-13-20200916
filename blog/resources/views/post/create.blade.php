@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="{{route('post.store')}}" method="post">
            @csrf
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">文章內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="建立文章" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>

@endsection
