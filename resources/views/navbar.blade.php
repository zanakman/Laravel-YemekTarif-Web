<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Yemek Tarifleri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Anasayfa
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hakkimda">Tüm Yemekler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hakkimda">Kategoriler</a>
            </li>
            
            @if(! \Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="/login">Giriş Yap</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/register">Üye Ol</a>
            </li>
            
            @else
            <li class="nav-item">
              <a class="nav-link" href="/tarifEkle">Yemek Tarif Ekle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tarifler">Tariflerim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/iletisim">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">Çıkış Yap</a>
            </li>
            @endif


          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation -->