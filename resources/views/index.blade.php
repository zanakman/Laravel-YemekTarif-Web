@extends('master')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      @if($ilktarif != NULL)
      <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="{{$ilktarif->resim}}" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>{{$ilktarif->yemek_adi}}</h1>
          <h4>Günün Tarifi</h4>
          
          <a class="btn btn-primary btn-lg" href="/tarif/{{$ilktarif->id}}">Tarifi Gör</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
      @endif
      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0"></p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
      @foreach($tarifler as $tarif)
        <div class="col-md-4 mb-4">
          <div class="card h-100 imgwrapper">
            <div class="card-body">
              <img class="img-fluid" src="{{$tarif->resim}}">
            </div>

            

            <div class="card-footer">
              
              <h1>{{$ilktarif->yemek_adi}}</h1>
            
                <a href="/tarif/{{$tarif->id}}" class="btn btn-primary">Tarifi Gör</a>
            </div>

          </div>
        </div>
        <!-- /.col-md-4 -->
        @endforeach

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection