@extends('master')

@section('content')
    <!-- Page Content -->
    <div class="container">

      

      <!-- Content Row -->
      <div class="row">
      @foreach($tarifs as $tarif)
        <div class="col-md-4 mb-4">
          <div class="card h-100 imgwrapper">
            <div class="card-body">
              <img class="img-fluid" src="{{$tarif->resim}}">
            </div>

            

            <div class="card-footer">
              
              <h1>{{$tarif->yemek_adi}}</h1>
            
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