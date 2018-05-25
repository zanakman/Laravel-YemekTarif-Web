@extends('master')

@section('content')
<div class="container">
<div class="">
	<button class="btn btn-primary" onclick="window.location.href='/tarifEkle'">Ekle</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tarifler as $tarif)
    <tr>
      <th scope="row">{{$tarif->id}}</th>
      <td>{{$tarif->yemek_adi}}</td>
      <td>{{$tarif->created_at}}</td>
      <td>{{$tarif->updated_at}}</td>
      <td><button class="btn btn-warning" onclick="window.location.href='tarifDuzenle/{{$tarif->id}}'">Düzenle</button></td>
      <td><button class="btn btn-danger" onclick="window.location.href='tarifSil/{{$tarif->id}}'">Sil</button></td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection