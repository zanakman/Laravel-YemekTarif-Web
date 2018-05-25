@extends('admin.master')

@section('content')

<div class="container">
<form action="/admin/tarifEklePost" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="yemek_adi">Yemeğin Adı</label>
        <input type="text" class="form-control" id="yemek_adi" name="yemek_adi" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="resim">Resim Seçiniz</label>
        <input type="file" class="form-control-file" id="resim" name="resim" required>
    </div>
    <div class="form-group">
      <label for="sel1">Select list:</label>
      <select name="category_id" class="form-control" id="sel1">
      <option value = "0">Kategori Seçiniz</option>
      @if(count($categories) > 0)
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        @endif
      </select>
    </div>
  
    <div id="editor" class="form-group">
        <label for="tarif">Tarif</label>
          <textarea id="tarif" class="form-control" name="tarif" required></textarea>

    </div>

    <div id="editor" class="form-group">
        <label for="malzemeler">Malzemeler</label>
          <textarea id="malzemeler" class="form-control" name="malzemeler" required></textarea>

    </div>

    <div id="editor" class="form-group">
        <label for="yapilis">Yapılışı</label>
          <textarea id="yapilis" class="form-control" name="yapilis" required></textarea>

    </div>



    <script>
        $('#tarif').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
      });
    </script>

    <script>
        $('#malzemeler').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
      });
    </script>

    <script>
        $('#yapilis').summernote({
        placeholder: '',
        tabsize: 2,
        height: 400
      });
    </script>
    <div class="form-group">>
    <button class="btn btn-primary form-control" type="submit">Ekle</button>
    </div>
</form>

</div>
@endsection


