@extends('admin.master')

@section('content')

<div class="container">
<form action="/admin/category/update/{{$category->id}}" method="post"">
    @csrf
    <div class="form-group">
        <label for="name">Kategori Adı</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="">
    </div>

    <div class="form-group">
        <label for="slug">Link</label>
        <input type="text" class="form-control" id="slug" value="{{$category->slug}}" name="slug" placeholder="">
    </div>
   
    <div class="form-group">
    <button class="btn btn-primary form-control" type="submit">Güncelle</button>
    </div>
</form>

</div>
@endsection


