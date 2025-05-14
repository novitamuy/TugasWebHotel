<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Kamar</title>
  <link rel="stylesheet" href="style1.css">
  <script>
    function tampilkanPesanan(event) {
      event.preventDefault(); // Mencegah pengiriman form

      // Mengambil data dari form
      const nama = document.getElementById("nama").value;
      const checkin = document.getElementById("checkin").value;
      const checkout = document.getElementById("checkout").value;
      const jumlahKamar = document.getElementById("jumlah-kamar").value;
      const tipeKamar = document.getElementById("tipe-kamar").value;

      // Harga untuk masing-masing tipe kamar
      let hargaPerMalam;
      if (tipeKamar === "Single Room") {
        hargaPerMalam = 500000;
      } else if (tipeKamar === "Double Room") {
        hargaPerMalam = 800000;
      } else if (tipeKamar === "Suite") {
        hargaPerMalam = 1200000;
      }

      // Menghitung total harga
      const totalHarga = hargaPerMalam * jumlahKamar;

      // Menampilkan hasil pesanan
      const hasilPesanan = `
        <h3>Terima kasih, ${nama}!</h3>
        <p>Berikut adalah rincian pesanan Anda:</p>
        <ul>
          <li><b>Tanggal Check-in:</b> ${checkin}</li>
          <li><b>Tanggal Check-out:</b> ${checkout}</li>
          <li><b>Jumlah Kamar:</b> ${jumlahKamar}</li>
          <li><b>Tipe Kamar:</b> ${tipeKamar}</li>
          <li><b>Harga per malam:</b> Rp ${hargaPerMalam.toLocaleString()}</li>
          <li><b>Total Harga:</b> Rp ${totalHarga.toLocaleString()}</li>
        </ul>
      `;

      // Menampilkan hasil ke dalam div dengan id 'hasil-pemesanan'
      document.getElementById("hasil-pemesanan").innerHTML = hasilPesanan;

      // Menampilkan bagian selanjutnya (slide)
      document.getElementById("info-pemesanan").classList.add
      document.getElementById("hasil-pemesanan").classList.add("slide-in");
      document.getElementById("info-pemesanan").classList.add("slide-out");
    }

    function lanjutkanPesanan() {
      // Aksi setelah melanjutkan pesanan
      alert("Pesanan Anda telah diproses.");
      // Bisa diarahkan ke halaman konfirmasi atau terima kasih
    }
  </script>
</head>
<body>

  <nav>
    <ul>
      <li><a href="#beranda">Beranda</a></li>
      <li><a href="#pesan-kamar">Pesan Kamar</a></li>
      <li><a href="#info-pemesanan">Info Pemesanan</a></li>
      <li><a href="#kontak">Kontak</a></li>
      <li><a href="#info-kamar">Info Kamar</a></li>
    </ul>
  </nav>

  <section id="beranda">
    <h1>Selamat datang di Hotel Mumuy</h1>
    <p>Temukan kenyamanan dan yang kami tawarkan.</p>
  </section>

  <section id="pesan-kamar">
    <h2>Pesan Kamar</h2>
    <form id="form-pesanan" onsubmit="tampilkanPesanan(event)">
      <label for="nama"><b>nama:</b></label>
      <input type="text" id="nama" name="nama" required><br>

      <label for="checkin"><b>tanggal </b><colgroup></colgroup>heck-in:</label>
      <input type="date" id="checkin" name="checkin" required><br>

      <label for="checkout"><b>tanggal check-out:</b></label>
      <input type="date" id="checkout" name="checkout" required><br>

      <label for="jumlah-kamar"><b>jumlah kamar:</b></label>
      <input type="number" id="jumlah-kamar" name="jumlah-kamar" min="1" required><br>

      <label for="tipe-kamar"><b>tipe kamar:</b></label>
      <select id="tipe-kamar" name="tipe-kamar" required>
        <option value="Single Room"><b>single room</b></option>
        <option value="Double Room">double room</option>
        <option value="Suite"><b>suite</b></option>
      </select><br>

      <button type="submit">pesan sekarang</button>
    </form>

    <div id="hasil-pemesanan" style="margin-top: 15px; padding: 10px; border: 1px solid #ccc;"></div>
  </section>

  <section id="info-pemesanan" class="hidden">
    <h2>Info Pemesanan</h2>
    <p>Setelah Anda memesan, Anda akan menerima konfirmasi pemesanan melalui email.</p>
    <button onclick="lanjutkanPesanan()">Lanjutkan</button>
  </section>

  <section id="kontak">
    <h2>Kontak</h2>
    <p><b>Jika Anda memiliki pertanyaan, silakan hubungi kami di:</b></p>
    <p><b>Email: mumuy@gmail.com</b></p>
    <p><b>Telepon: 0832-4444-6769</b></p>
  </section>

  <section id="info-kamar">
    <h2>Info Kamar</h2>
    <p>Kami menawarkan berbagai tipe kamar, mulai dari kamar standar hingga suite mewah.</p>
    <ul>
      <li><b>single room: Rp 700.000 per malam</b></li>
      <li><b>double room: Rp 900.000 per malam</b</li>
      <li><b>suite: Rp 1.200.000 per malam</b></li>
    </ul>
  </section>

  <footer>
    <p>&copy; 2025 Hotel Kami</p>
  </footer>

  <link rel="stylesheet" href="style1.css">
</body>
</html>
