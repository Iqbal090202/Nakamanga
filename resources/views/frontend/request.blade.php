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
      
      </div>


      <br>
    </div>
        <div class="col-md-4">
          <div class="card" id="iklan">
            <div class="card-body text-center" id="judul_iklan">
              <img src="img/iklan/iklan5.jpg" width="300" height="250">
              <img src="img/iklan/iklan6.gif" width="300" height="250">
              <img src="img/iklan/iklan4.gif" width="300" height="250">
            </div>
          </div>
        </div>

  </div>
</div>

@endsection
