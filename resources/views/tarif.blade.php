@extends('master')
@section('content')
<div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="{{$ilktarif->resim}}" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>{{$ilktarif->yemek_adi}}</h1>
          <h4>Malzemeler</h4>
          {!!html_entity_decode($ilktarif->malzemeler)!!}
          <h4>Tarif</h4>
          {!!html_entity_decode($ilktarif->tarif)!!}
          <h4>Yapılış</h4>
          {!!html_entity_decode($ilktarif->yapilis)!!}
          
        </div>
        <!-- /.col-md-4 -->
      </div>
  </div>

@endsection