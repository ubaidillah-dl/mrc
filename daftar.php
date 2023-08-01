<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Lomba</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Prompt:wght@100;300;400;700&display=swap" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/daftar.css" />

  <!-- Favicon -->
  <link rel="shorcut icon" href="assets/LogoMRC.png" type="image/png" />
</head>

<body>
  <!-- Daftar lomba start -->
  <section class="daftar-lomba" id="Daftar-Lomba">
    <!-- Logo start -->
    <div class="logo">
      <h2>Daftar <span>Sekarang</span> Dan Raih Hadiah <span>Jutaan</span> Rupiah</h2>
      <img src="assets/LogoMRC.png" alt="" />
    </div>
    <!-- Logo end -->

    <div class="row">
      <!-- Kontent start -->
      <div class="content">
        <form action="">
          <div class="nama-tim input"><label for="nama-tim">Nama Tim</label><input autofocus autocomplete="off" type="text" placeholder="Masukkan Nama Tim" id="nama-tim" /></div>
          <div class="nama-instansi input"><label for="nama-instansi">Nama Instansi</label><input type="text" id="nama-instansi" placeholder="Masukkan Nama Instansi" /></div>
          <div class="nama-pembina input"><label for="nama-pembina">Nama Pembina (tidak wajib)</label><input type="text" id="nama-pembina" placeholder="Masukkan Nama Pembina" /></div>
          <div class="bukti-pembayaran input">
            <label for="bukti-pembayaran">Bukti Pembayaran</label>
            <input type="file" id="bukti-pembayaran" />
          </div>

          <div class="nama-ketua input"><label for="nama-ketua">Nama Ketua</label><input type="text" id="nama-ketua" placeholder="Masukkan Nama Ketua" /></div>
          <div class="email-ketua input"><label for="email-ketua">Email Ketua</label><input type="email" id="email-ketua" placeholder="Masukkan Email Ketua" /></div>
          <div class="wa-ketua input"><label for="wa-ketua">Nomor Whatsapp Ketua</label><input type="tel" id="wa-ketua" placeholder="Masukkan Nomor Whatsapp Ketua" /></div>
          <div class="ktm-ketua input"><label for="ktm-ketua">KTM Ketua</label><input class="unggah" type="file" id="ktm-ketua" /></div>
          <div class="bukti-uptwibbon-ketua input"><label for="bukti-uptwibbon-ketua">Bukti Up Twibbon
              Ketua</label><input class="unggah" type="file" id="bukti-uptwibbon-ketua" /></div>

          <div class="nama-anggota input"><label for="nama-anggota">Nama Anggota</label><input type="text" id="nama-anggota" placeholder="Masukkan Nama Anggota" /></div>
          <div class="ktm-anggota input"><label for="ktm-anggota">KTM Anggota</label><input class="unggah" type="file" id="ktm-anggota" /></div>
          <div class="bukti-uptwibbon-anggota input"><label for="bukti-uptwibbon-anggota">Bukti Up Twibbon
              Anggota</label><input class="unggah" type="file" id="bukti-uptwibbon-anggota" /></div>

          <a href="https://chat.whatsapp.com/BcvSS6QzrZFHr2PKZRVj41" type="submit">Kirim</a>
        </form>
      </div>
      <!-- Kontent end -->
    </div>
  </section>
  <!-- Daftar lomba end -->
</body>

</html>