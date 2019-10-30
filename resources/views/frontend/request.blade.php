<!-- Menghubungkan dengan view template master -->
@extends('/frontend/layouts/master')

@section('konten')

  <!-- BANNER START -->
<div class="container isiDasar">
  <div class="row mt-3">

    {{-- banner --}}
    <div class="col-md-8">
      <div class="card" id="card_banner">
        <div class="card-header" id="banner_top">
          <h4>Request Manga</h4>
        </div>
        <div class="card-body">
          <div class="font_request">
            <div>
              <p>Ingin request manga subtitle indonesia ? Disinilah tempatnya!</p>
              <p>Yang ingin request manga subtitle indonesia langsung saja ikuti cara dibawah ini.</p>
              <p>Syarat untuk request manga :</p>
              <ol>
                <li>Kunjungi sosial media kita
                  <ul>
                    <li>
                      <a href="#">
                        <img src="/img/logo_sosmed/discord.png" width="30" height="30" alt="Logo discord">
                      </a>
                      <a href="#">
                        <img src="/img/logo_sosmed/facebook.png" width="30" height="30" alt="Logo facebook">
                      </a>
                      <a href="#">
                        <img src="/img/logo_sosmed/gmail.png" width="30" height="30" alt="Logo gmail">
                      </a>
                    </li>
                  </ul>
                </li>
                <li>Tulislah judul yang benar</li>
                <li>Sertakan juga nama mangaka dan keterangan lain nya tentang manga yang kalian request.</li>
                <li>Doakan semoga request’an kamu cepat selesai. amin</li>
              </ol>
            </div>
            <br>
            <div>
              <h3 class="text-center">Lapor Link Download Bermasalah !!!</h3>
              <p>Laporkan juga link download google drive error/bermasalah jika kalian menemukannya. Mohon bantu laporkan disini dengan cara berkomentar dibawah ini, Terima kasih atas laporannya.</p>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col-sm-12">
          <h4 class="credit text-center">Shortcut</h4>
          <div class="card-body" id="banner_rumah">
            <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                <div id="banner" class="bannerr carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="img/cover1.jpg" alt="First slide" id="banner_req">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/cover2.jpg" alt="Second slide" id="banner_req">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/cover3.png" alt="Third slide" id="banner_req">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
                    <span class="carousel-control-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
                    <span class="carousel-control-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="col-sm-4"></div>
            </div>
          </div>
        </div>

      </div>
      
      </div>


      <br>
    </div>

  </div>
</div>

@endsection
