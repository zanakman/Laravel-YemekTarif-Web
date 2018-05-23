@extends('admin.master')

@section('content')
<div class="container">
<div class="">
	<button class="btn btn-primary" onclick="window.location.href='/admin/category/create'">Ekle</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori Adı</th>
      <th scope="col">Oluşturulma Tarihi</th>
      <th scope="col">Güncellenme Tarihi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->created_at}}</td>
      <td>{{$category->updated_at}}</td>
      <td><button class="btn btn-warning" onclick="window.location.href='/admin/category/edit/{{$category->id}}'">Düzenle</button></td>
      <td><button class="btn btn-danger" onclick="window.location.href='/admin/category/delete/{{$category->id}}'">Sil</button></td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection