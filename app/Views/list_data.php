<?= $this->extend('/layouts/master') ?>
<?= $this->section('head-content') ?>

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">List Data</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">List Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
<?= $this->endSection() ?>
<?= $this->section('main-content') ?>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">List Data</h6>
            <h2 class="mt-2">Tribun Aceh Jaya</h2>
        </div>
        <div class="row g-4">
            <div class="">
                <ul class="lsi">
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/12/30/video-heboh-akibat-cuaca-buruk-angin-puting-beliung-terjadi-di-aceh-jaya" title="VIDEO Heboh, Akibat Cuaca Buruk, Angin Puting Beliung Terjadi di Aceh Jaya" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Angin-Puting-Beliung-Terjadi-di-Aceh-Jaya.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Angin-Puting-Beliung-Terjadi-di-Aceh-Jaya.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/12/30/video-heboh-akibat-cuaca-buruk-angin-puting-beliung-terjadi-di-aceh-jaya" title="VIDEO Heboh, Akibat Cuaca Buruk, Angin Puting Beliung Terjadi di Aceh Jaya" class="fbo f18 ln24" aria-label="link">
                                        VIDEO Heboh, Akibat Cuaca Buruk, Angin Puting Beliung Terjadi di Aceh Jaya </a>
                                </h3>
                                <h4 class="grey2 pt5">Sejumlah masyakarat di kecamatan Krueng Sabee, dihebohkan dengan kemunculan angin puting beliung yang terjadi dikawasan tersebut.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Sabtu, 30 Desember 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/12/09/video-cegah-banjir-dan-wabah-penyakit-kodim-0114aceh-jaya-gelar-karya-bakti-di-pasar-pagi-calang" title="VIDEO Cegah Banjir Dan Wabah Penyakit, Kodim 0114/Aceh Jaya Gelar Karya Bakti Di Pasar Pagi Calang" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Kodim-0114Aceh-Jaya-Gelar-Karya-Bakti-Di-Pasar-Pagi-Calang.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Kodim-0114Aceh-Jaya-Gelar-Karya-Bakti-Di-Pasar-Pagi-Calang.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/12/09/video-cegah-banjir-dan-wabah-penyakit-kodim-0114aceh-jaya-gelar-karya-bakti-di-pasar-pagi-calang" title="VIDEO Cegah Banjir Dan Wabah Penyakit, Kodim 0114/Aceh Jaya Gelar Karya Bakti Di Pasar Pagi Calang" class="fbo f18 ln24" aria-label="link">
                                        VIDEO Cegah Banjir Dan Wabah Penyakit, Kodim 0114/Aceh Jaya Gelar Karya Bakti Di Pasar Pagi Calang </a>
                                </h3>
                                <h4 class="grey2 pt5">Kegiatan pelaksanaan karya bakti/Korve yang dilakukan oleh personil Kodim 0114/Aceh Jaya, dan masyarakat membersihkan pasar pagi calang.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Sabtu, 9 Desember 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/12/06/harga-emas-di-aceh-jaya-turun-drastis-per-mayam-anjlok-hingga-rp-100-ribu-ini-rincian-lengkapnya" title="Harga Emas di Aceh Jaya Turun Drastis, Per Mayam Anjlok Hingga Rp 100 Ribu, Ini Rincian Lengkapnya" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/harga-emas-di-Calang-Aceh-Jaya-naik-lagi.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="harga-emas-di-Calang-Aceh-Jaya-naik-lagi.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/12/06/harga-emas-di-aceh-jaya-turun-drastis-per-mayam-anjlok-hingga-rp-100-ribu-ini-rincian-lengkapnya" title="Harga Emas di Aceh Jaya Turun Drastis, Per Mayam Anjlok Hingga Rp 100 Ribu, Ini Rincian Lengkapnya" class="fbo f18 ln24" aria-label="link">
                                        Harga Emas di Aceh Jaya Turun Drastis, Per Mayam Anjlok Hingga Rp 100 Ribu, Ini Rincian Lengkapnya </a>
                                </h3>
                                <h4 class="grey2 pt5">Husaini Hasbullah, salah seorang pedagang emas menyebutkan, jika saat ini harga jual emas murni berada di angka Rp 3.250.000 per mayam.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 6 Desember 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/11/14/masyarakat-keluhkan-pemadaman-listrik-ini-penjelasan-pln-ulp-calang" title="Masyarakat Keluhkan Pemadaman Listrik, Ini Penjelasan PLN ULP Calang" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Kondisi-kabel-terkena-longsor.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Kondisi-kabel-terkena-longsor.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/11/14/masyarakat-keluhkan-pemadaman-listrik-ini-penjelasan-pln-ulp-calang" title="Masyarakat Keluhkan Pemadaman Listrik, Ini Penjelasan PLN ULP Calang" class="fbo f18 ln24" aria-label="link">
                                        Masyarakat Keluhkan Pemadaman Listrik, Ini Penjelasan PLN ULP Calang </a>
                                </h3>
                                <h4 class="grey2 pt5">Manager PLN ULP Calang, Zulfahmi menyebutkan, dalam bulan ini ada dua kali pemadaman terjadwal yang dilakukan PLN.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Selasa, 14 November 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/08/21/sekelompok-wanita-muda-melakukan-aksi-tak-terpuji-di-kmp-sabuk-nusantara-rute-simeulue-calang" title="Sekelompok Wanita Muda Melakukan Aksi tak Terpuji di KMP Sabuk Nusantara Rute Simeulue-Calang" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/aksi-tak-terpuji-wanita-muda-di-KMP-Sabuk-Nusantara-rute-Simeulue-Calang.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="aksi-tak-terpuji-wanita-muda-di-KMP-Sabuk-Nusantara-rute-Simeulue-Calang.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/08/21/sekelompok-wanita-muda-melakukan-aksi-tak-terpuji-di-kmp-sabuk-nusantara-rute-simeulue-calang" title="Sekelompok Wanita Muda Melakukan Aksi tak Terpuji di KMP Sabuk Nusantara Rute Simeulue-Calang" class="fbo f18 ln24" aria-label="link">
                                        Sekelompok Wanita Muda Melakukan Aksi tak Terpuji di KMP Sabuk Nusantara Rute Simeulue-Calang </a>
                                </h3>
                                <h4 class="grey2 pt5">Sekelompok penumpang wanita muda melakukan aksi tidak terpuji saat menaiki Kapal KMP Sabuk Nusantara 110</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Senin, 21 Agustus 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/07/26/kronologis-terganjalnya-izin-berlayar-kmp-aceh-hebat-1-diduga-ekses-kegamangan-dalam-kewenangan" title="Kronologis Terganjalnya Izin Berlayar KMP Aceh Hebat 1, Diduga Ekses Kegamangan dalam Kewenangan" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/KMP-Aceh-Hebat-di-Meulaboh.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="KMP-Aceh-Hebat-di-Meulaboh.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/07/26/kronologis-terganjalnya-izin-berlayar-kmp-aceh-hebat-1-diduga-ekses-kegamangan-dalam-kewenangan" title="Kronologis Terganjalnya Izin Berlayar KMP Aceh Hebat 1, Diduga Ekses Kegamangan dalam Kewenangan" class="fbo f18 ln24" aria-label="link">
                                        Kronologis Terganjalnya Izin Berlayar KMP Aceh Hebat 1, Diduga Ekses Kegamangan dalam Kewenangan </a>
                                </h3>
                                <h4 class="grey2 pt5">Namun tiba-tiba BPTD menghentikan penerbitan izin berlayar untuk KMP Aceh Hebat 1.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 26 Juli 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/07/26/hampir-3-pekan-berhenti-kmp-aceh-hebat-akan-kembali-berlayar-dari-calang-ke-sinabang-dan-sebaliknya" title="Hampir 3 Pekan Berhenti, KMP Aceh Hebat akan Kembali Berlayar dari Calang ke Sinabang dan Sebaliknya" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/KMP-Aceh-Hebat-di-Meulaboh.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="KMP-Aceh-Hebat-di-Meulaboh.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/07/26/hampir-3-pekan-berhenti-kmp-aceh-hebat-akan-kembali-berlayar-dari-calang-ke-sinabang-dan-sebaliknya" title="Hampir 3 Pekan Berhenti, KMP Aceh Hebat akan Kembali Berlayar dari Calang ke Sinabang dan Sebaliknya" class="fbo f18 ln24" aria-label="link">
                                        Hampir 3 Pekan Berhenti, KMP Aceh Hebat akan Kembali Berlayar dari Calang ke Sinabang dan Sebaliknya </a>
                                </h3>
                                <h4 class="grey2 pt5">Kepala Dinas Perhubungan atau Kadishub Aceh, Teuku Faisal, menyampaikan KMP Aceh Hebat 1 dari Calang ke Sinabang, Simeulue,&nbsp; dan sebaliknya akan seger</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 26 Juli 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/07/26/aceh-hebat-1-akan-kembali-berlayar-dari-calang-kadishub-sudah-surati-asdp" title="Aceh Hebat 1 akan Kembali Berlayar dari Calang, Kadishub Sudah Surati ASDP" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/kmp-aceh-hebat-1-sebelum-meninggalkan-pelabuhan-calang-selasa-932021.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="kmp-aceh-hebat-1-sebelum-meninggalkan-pelabuhan-calang-selasa-932021.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/07/26/aceh-hebat-1-akan-kembali-berlayar-dari-calang-kadishub-sudah-surati-asdp" title="Aceh Hebat 1 akan Kembali Berlayar dari Calang, Kadishub Sudah Surati ASDP" class="fbo f18 ln24" aria-label="link">
                                        Aceh Hebat 1 akan Kembali Berlayar dari Calang, Kadishub Sudah Surati ASDP </a>
                                </h3>
                                <h4 class="grey2 pt5">Hal itu seiring sudah ada petunjuk dari Kementerian Perhubungan (Kemenhub) RI terkait penerbitan izin berlayar.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 26 Juli 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/07/11/menunggu-prosedur-perizinan-kmp-aceh-hebat-1-berhenti-sementara-layari-rute-calang-sinabang" title="Menunggu Prosedur Perizinan, KMP Aceh Hebat 1 Berhenti Sementara Layari Rute Calang-Sinabang" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/kmp-aceh-hebat-1-sandar-di-pelabuhan-lama-teluk-sinabang-kabupaten-simeulue.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="kmp-aceh-hebat-1-sandar-di-pelabuhan-lama-teluk-sinabang-kabupaten-simeulue.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/07/11/menunggu-prosedur-perizinan-kmp-aceh-hebat-1-berhenti-sementara-layari-rute-calang-sinabang" title="Menunggu Prosedur Perizinan, KMP Aceh Hebat 1 Berhenti Sementara Layari Rute Calang-Sinabang" class="fbo f18 ln24" aria-label="link">
                                        Menunggu Prosedur Perizinan, KMP Aceh Hebat 1 Berhenti Sementara Layari Rute Calang-Sinabang </a>
                                </h3>
                                <h4 class="grey2 pt5">Karena tidak ada lembaga yang mengeluarkan SPB di Aceh, maka kapal tidak bisa lanjut berlayar.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Selasa, 11 Juli 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/07/04/terpilih-secara-aklamasi-tgk-mustafa-pimpin-ikatan-santri-aceh-jaya-periode-2023-2025" title="Terpilih Secara Aklamasi, Tgk Mustafa Pimpin Ikatan Santri Aceh Jaya Periode 2023-2025" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Tgk-Mustafa-Ketua-Isaja.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Tgk-Mustafa-Ketua-Isaja.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/07/04/terpilih-secara-aklamasi-tgk-mustafa-pimpin-ikatan-santri-aceh-jaya-periode-2023-2025" title="Terpilih Secara Aklamasi, Tgk Mustafa Pimpin Ikatan Santri Aceh Jaya Periode 2023-2025" class="fbo f18 ln24" aria-label="link">
                                        Terpilih Secara Aklamasi, Tgk Mustafa Pimpin Ikatan Santri Aceh Jaya Periode 2023-2025 </a>
                                </h3>
                                <h4 class="grey2 pt5">Acara tersebut berlangsung di Masjid Baitul Izzah Kota Calang, Aceh Jaya, dan dihadiri oleh ratusan santri dari berbagai dayah...</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Selasa, 4 Juli 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/05/24/sukses-di-sejumlah-daerah-aceh-kutaradja-fried-chicken-buka-cabang-di-calang-ini-pesan-pj-bupati" title="Sukses di Sejumlah Daerah Aceh, Kutaradja Fried Chicken Buka Cabang di Calang, Ini Pesan Pj Bupati" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/KFC-Calang1.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="KFC-Calang1.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/05/24/sukses-di-sejumlah-daerah-aceh-kutaradja-fried-chicken-buka-cabang-di-calang-ini-pesan-pj-bupati" title="Sukses di Sejumlah Daerah Aceh, Kutaradja Fried Chicken Buka Cabang di Calang, Ini Pesan Pj Bupati" class="fbo f18 ln24" aria-label="link">
                                        Sukses di Sejumlah Daerah Aceh, Kutaradja Fried Chicken Buka Cabang di Calang, Ini Pesan Pj Bupati </a>
                                </h3>
                                <h4 class="grey2 pt5">Outlet ke 14 Kutaradja Fried Chicken ini di Simpang Cleopatra, Kota Calang, Kecamatan Krueng Sabee, Aceh Jaya, tepatnya arah menuju Pelabuhan Calang.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 24 Mei 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/04/29/tiket-habis-ratusan-penumpang-kapal-aceh-hebat-1-rute-sinabang-calang-gagal-berangkat" title="Tiket Habis, Ratusan Penumpang Kapal Aceh Hebat 1 Rute Sinabang-Calang Gagal Berangkat" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/kapal-aceh-hebat-1-rute-sinabang-calang-membludak.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="kapal-aceh-hebat-1-rute-sinabang-calang-membludak.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/04/29/tiket-habis-ratusan-penumpang-kapal-aceh-hebat-1-rute-sinabang-calang-gagal-berangkat" title="Tiket Habis, Ratusan Penumpang Kapal Aceh Hebat 1 Rute Sinabang-Calang Gagal Berangkat" class="fbo f18 ln24" aria-label="link">
                                        Tiket Habis, Ratusan Penumpang Kapal Aceh Hebat 1 Rute Sinabang-Calang Gagal Berangkat </a>
                                </h3>
                                <h4 class="grey2 pt5">Ratusan calon penumpang kapal Aceh Hebat 1 dengan tujuan Pelabuhan Kolok, Sinabang-Calang terpaksa gagal berangkat, Simeulue, Sabtu (29/4/2023)</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Sabtu, 29 April 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/04/29/kmp-aceh-hebat-1-disesaki-penumpang-ratusan-calon-penumpang-gagal-berlayar" title="KMP Aceh Hebat 1 Disesaki Penumpang, Ratusan Calon Penumpang Gagal Berlayar" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Simeulue-tujuan-Calang.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Simeulue-tujuan-Calang.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/04/29/kmp-aceh-hebat-1-disesaki-penumpang-ratusan-calon-penumpang-gagal-berlayar" title="KMP Aceh Hebat 1 Disesaki Penumpang, Ratusan Calon Penumpang Gagal Berlayar" class="fbo f18 ln24" aria-label="link">
                                        KMP Aceh Hebat 1 Disesaki Penumpang, Ratusan Calon Penumpang Gagal Berlayar </a>
                                </h3>
                                <h4 class="grey2 pt5">Akibat ramainya calon penumpang, banyak yang tidak dapat tiket kapal baik penumpang maupun kenderaan.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Sabtu, 29 April 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/04/26/pidie-turut-rasakan-gempa-calang-sebagian-warga-sempat-keluar-rumah" title="Pidie Turut Rasakan Gempa Calang, Sebagian Warga Sempat Keluar Rumah" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Data-BMKG-gempa-di-Aceh-jaya-terasa-di-Pidie.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Data-BMKG-gempa-di-Aceh-jaya-terasa-di-Pidie.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/04/26/pidie-turut-rasakan-gempa-calang-sebagian-warga-sempat-keluar-rumah" title="Pidie Turut Rasakan Gempa Calang, Sebagian Warga Sempat Keluar Rumah" class="fbo f18 ln24" aria-label="link">
                                        Pidie Turut Rasakan Gempa Calang, Sebagian Warga Sempat Keluar Rumah </a>
                                </h3>
                                <h4 class="grey2 pt5">Warga Kabupaten Pidie turut merasakan gempa terjadi, Rabu (26/4/2023) sekitar pukul 9.57 WIB.&nbsp;</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 26 April 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/04/26/gempa-guncang-calang-aceh-jaya-terasa-hingga-banda-aceh-berikut-keterangan-bmkg" title="Gempa Guncang Calang Aceh Jaya, Terasa hingga Banda Aceh, Berikut Keterangan BMKG" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Ilustrasi-gempa-bumi-Pixabay.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Ilustrasi-gempa-bumi-Pixabay.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/04/26/gempa-guncang-calang-aceh-jaya-terasa-hingga-banda-aceh-berikut-keterangan-bmkg" title="Gempa Guncang Calang Aceh Jaya, Terasa hingga Banda Aceh, Berikut Keterangan BMKG" class="fbo f18 ln24" aria-label="link">
                                        Gempa Guncang Calang Aceh Jaya, Terasa hingga Banda Aceh, Berikut Keterangan BMKG </a>
                                </h3>
                                <h4 class="grey2 pt5">Gempa mengguncang Calang, Kabupaten Aceh Jaya pada Rabu (26/4/2023), dirasakan hingga Aceh Besar dan Banda Aceh</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 26 April 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/04/19/ratusan-pemudik-padati-pelabuhan-penyeberangan-sinabang-kmp-aceh-hebat-1-juga-dipenuhi-mobilmotor" title="Ratusan Pemudik Padati Pelabuhan Penyeberangan Sinabang, KMP Aceh Hebat 1 Juga Dipenuhi Mobil/Motor" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/arus-mudik-di-sinabang.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="arus-mudik-di-sinabang.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/04/19/ratusan-pemudik-padati-pelabuhan-penyeberangan-sinabang-kmp-aceh-hebat-1-juga-dipenuhi-mobilmotor" title="Ratusan Pemudik Padati Pelabuhan Penyeberangan Sinabang, KMP Aceh Hebat 1 Juga Dipenuhi Mobil/Motor" class="fbo f18 ln24" aria-label="link">
                                        Ratusan Pemudik Padati Pelabuhan Penyeberangan Sinabang, KMP Aceh Hebat 1 Juga Dipenuhi Mobil/Motor </a>
                                </h3>
                                <h4 class="grey2 pt5">Selain penumpang, tampak puluhan mobil dan sepeda motor turut antre naik ke atas kapal penyeberangan KMP Aceh Hebat 1 yang akan berlayar dari Pelabuha</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 19 April 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/03/22/jadwal-imsakiyah-aceh-jaya-23-maret-awal-puasa-ramadhan-2023-imsak-mulai-pukul-0516-wib" title="Jadwal Imsakiyah Aceh Jaya, 23 Maret Awal Puasa Ramadhan 2023, Imsak Mulai Pukul 05:16 WIB" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/jadwal-Imsakiyah-Ramadhan-1444-H2023-untuk-wilayah-Kabupaten-Aceh-Jaya.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="jadwal-Imsakiyah-Ramadhan-1444-H2023-untuk-wilayah-Kabupaten-Aceh-Jaya.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/03/22/jadwal-imsakiyah-aceh-jaya-23-maret-awal-puasa-ramadhan-2023-imsak-mulai-pukul-0516-wib" title="Jadwal Imsakiyah Aceh Jaya, 23 Maret Awal Puasa Ramadhan 2023, Imsak Mulai Pukul 05:16 WIB" class="fbo f18 ln24" aria-label="link">
                                        Jadwal Imsakiyah Aceh Jaya, 23 Maret Awal Puasa Ramadhan 2023, Imsak Mulai Pukul 05:16 WIB </a>
                                </h3>
                                <h4 class="grey2 pt5">Berikut jadwal Imsakiyah Ramadhan 1444 H/2023 untuk wilayah Kabupaten Aceh Jaya, yang dimulai pada Kamis, 23 Maret 2023.</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 22 Maret 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/03/03/cek-layanan-sekda-aceh-jaya-tinjau-dinkes-dan-rsud-teuku-umar-di-calang" title="Cek Layanan, Sekda Aceh Jaya Tinjau Dinkes dan RSUD Teuku Umar di Calang" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Sekda-Aceh-Jaya-di-Dinkes.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Sekda-Aceh-Jaya-di-Dinkes.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/03/03/cek-layanan-sekda-aceh-jaya-tinjau-dinkes-dan-rsud-teuku-umar-di-calang" title="Cek Layanan, Sekda Aceh Jaya Tinjau Dinkes dan RSUD Teuku Umar di Calang" class="fbo f18 ln24" aria-label="link">
                                        Cek Layanan, Sekda Aceh Jaya Tinjau Dinkes dan RSUD Teuku Umar di Calang </a>
                                </h3>
                                <h4 class="grey2 pt5">Kedatangan Sekda Aceh Jaya ini disambut Kepala Dinas Kesehatan Aceh Jaya, Rosniar, bersama para pejabat struktural di dinas tersebut.&nbsp;</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Jumat, 3 Maret 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/03/01/dukung-aktivitas-ekspor-impor-pelabuhan-calang-aceh-jaya-butuh-breakwater" title="Dukung Aktivitas Ekspor-Impor, Pelabuhan Calang Butuh Breakwater, Gubernur Sudah Usul ke Menhub" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Pelabuhan-Calang-dari-udara.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Pelabuhan-Calang-dari-udara.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/03/01/dukung-aktivitas-ekspor-impor-pelabuhan-calang-aceh-jaya-butuh-breakwater" title="Dukung Aktivitas Ekspor-Impor, Pelabuhan Calang Butuh Breakwater, Gubernur Sudah Usul ke Menhub" class="fbo f18 ln24" aria-label="link">
                                        Dukung Aktivitas Ekspor-Impor, Pelabuhan Calang Butuh Breakwater, Gubernur Sudah Usul ke Menhub </a>
                                </h3>
                                <h4 class="grey2 pt5">Hal itu disampaikan oleh Kepala Dinas Perhubungan Aceh, Teuku Faisal saat bertemu dengan Kepala Kantor Unit Penyelenggara Pelabuhan (UPP) Kelas III Ca</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Rabu, 1 Maret 2023 </span></div>
                            </div>
                        </div>
                    </li>
                    <li class="ptb15 list-unstyled mb-4">
                        <div class="row">
                            <div class="fr mt3 pos_rel col-2">
                                <a href="https://aceh.tribunnews.com/2023/02/25/harga-emas-di-aceh-jaya-turun-rp-14000-per-gram-sejak-seminggu-terakhir-ini-rincian-harganya" title="Harga Emas di Aceh Jaya Turun Rp 14.000 Per Gram Sejak Seminggu Terakhir, Ini Rincian Harganya" aria-label="link">
                                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/thumbnails2/Harga-Emas_-Perhiasan-emas-dipajang-di-toko-emas-di-Sigli_Pidie.jpg" class="img-thumbnail" height="90" class="shou2" width="120" alt="Harga-Emas_-Perhiasan-emas-dipajang-di-toko-emas-di-Sigli_Pidie.jpg">
                                </a>
                            </div>
                            <div class="mr140 col-10">
                                <h3>
                                    <a href="https://aceh.tribunnews.com/2023/02/25/harga-emas-di-aceh-jaya-turun-rp-14000-per-gram-sejak-seminggu-terakhir-ini-rincian-harganya" title="Harga Emas di Aceh Jaya Turun Rp 14.000 Per Gram Sejak Seminggu Terakhir, Ini Rincian Harganya" class="fbo f18 ln24" aria-label="link">
                                        Harga Emas di Aceh Jaya Turun Rp 14.000 Per Gram Sejak Seminggu Terakhir, Ini Rincian Harganya </a>
                                </h3>
                                <h4 class="grey2 pt5">"Harga emas turun sejak seminggu lalu, sekitar Rp 14 ribu per gramnya," kata Husaini Hasballlah, pemilik Toko Emas Mulia Jaya, Jumat (24/2/2023).</h4>
                                <div class="grey pt5"><span class="fa fa-clock-o mr5"></span><span class="grey">Sabtu, 25 Februari 2023 </span></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>