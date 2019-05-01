@extends('layouts.index')
@section('content')
		<!-- <section class="dcare__counterup__area section-padding--lg bg-image--6">	
			<div class="container">
				<div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="counterup__wrapper d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between">
        @foreach($infos as $data)
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">{{ $data->jumlah }}</span>
                                </div>
                                <div class="fact__title">
                                    <h2>{{ $data->nama }}</h2>
                                </div>
                            </div>       
          @endforeach
            </div>
          </div>
				</div>
			</div>
		</section> -->

		<div class="about-us-content-image">
			<img src="{{asset('assets/guest/images/guru.jpg')}}" alt="image">
		</div>
		
<section class="junior__welcome__area section-padding--lg poss-relative bg-image--21">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title--2">
							<h2 class="title__line" data-shadow="Visi Misi MTs AL IKHLAS">Visi Misi MTs AL IKHLAS</h2>
						</div>
					</div>
				</div>
				<div class="row jn__welcome__wrapper--2 align-items-center">
					<div class="col-md-12 col-lg-5 col-sm-12">
						<div class="welcome__juniro__three">
							<div class="welcome-tab nav" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#vission" role="tab">Visi MTs</a>
	                            <a class="nav-item nav-link " data-toggle="tab" href="#mission" role="tab">Misi MTs</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#object" role="tab">Tujuan</a>
                    		</div>
							<div class="welcome__tab__content">
								<!-- Start Single Content -->
								<div class="single__welcome__content tab-pane fade show active" id="vission" role="tabpanel">
									<p style="font-size: 17px; line-height:33px;">Meningkatkan Prestasi Siswa dalam bidang Imtek dan imtaq serta berakhlakul Karimah.</p>
								</div>
								<div class="single__welcome__content tab-pane fade" id="mission" role="tabpanel">
									<p style="font-size: 17px; line-height:33px;">1.Melaksanakan pembelajaran dan bimbingan secara efektif untuk mengoptimalkan potensi siswa<br>
                           2.Mengciptakan suasana yang kondusif untuk keefektipan seluruh kegiatan madrasah<br>
                           3.Mengembangkan budaya kompeletif bagi peningkatan prestasi siswa<br>
                           4.Menumbuhkembangkan penghayatan dan pengamalan terhadap Agama untuk membentuk budi pekerti yang baik.</p>
								</div>
								<div class="single__welcome__content tab-pane fade" id="object" role="tabpanel">
									<p style="font-size: 17px; line-height:33px;">1.Bersaing dalam penerapan ilmu pengetahuan dan teknologi<br>
									   2. Bersaing dalam kegiatan keagamaan dan kepedulian sekolah<br>
									   3. Bersaing dalam kebiasaan sopan santun dan berbudi pekerti.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="welcome__images wow fadeInUp" data-wow-delay="0.5s">
					<img src="{{asset('assets/baru/images/logo/bcmts.jpg')}}" style="width: 800px; height: 450px;" alt="welcome images">
				</div>
			</div>
		</section>
    <section class="about-us-content">
      <div class="container">
        <div class="row">
          <div class="section-content">
            <h2>SEJARAH  BERDIRINYA MTs AL IKHLAS KEBAN II</h2>
            <p>Desa Keban II adalah salah satu desa yang berada diwilayah Kecamatan Sanga Desa Kabupaten Musi Banyuasin. Sebelum tahun 1988 anak di desa Keban II setelah tamat dari Sekolah Dasar (SD) 70% nya tidak melanjutkan ketingkat SLTP dikarenakan pada saat itu sekolah SMP yang terdekat yaitu SMP PGRI Kemang yang ditempuhnya dari desa Keban II ke Kemang + 5 Km. Pada saat itu satu-satunya kendaraan yang bisa digunakan hanya sepeda karena keadaan jalan sangat jelek sekali (masih jalan tanah) yang apabila musim hujan jalan seperti kubangan Kerbau terpaksa untuk sekolah dilakukan dengan berjalan kaki untuk mencapai sekolahan.<br><br>Setelah menamatkan pendidikan pada KPG, seorang anak muda (Djusroh Hasali) saat itu mempunyai impian untuk mendirikan sekolah setingkat SLTP di desa Keban II, setelah berkonsultasi dengan Mertua (H. Abunawas) akhirnya impian tersebut disampaikan kepada Kepala Desa dan masyarakat Desa Keban II, dibantu dan didukung oleh anak-anak muda desa Keban II lainnya yang pada saat itu sudah lulus SMA untuk menjadi tenaga pengajar sehingga berdirilah Madrasah Tsanawiyah (MTs) Al Ikhlas Keban II pada tahun 1988 menggunakan Gedung SR/SD yang berada di SD Negeri 1 Keban II yang sudah tidak digunakan lagi, dengan sumber murid yang diharapkan masuk ke MTs Al Ikhlas yaitu dari :  <br>
            1.  SD Negeri 1 Keban II<br>
2.  SD Negeri 2 Keban II<br>
3.  SD Negeri 1 Keban I<br>
4.  SD Negeri 2 Keban I<br>
5.  SD Negeri Air Itam<br>
6.  SD Negeri Tanjung Raya.<br><br>

Murid pada tahun pertama (1988/1989) berdiri MTs Al Ikhlas Keban II berjumlah 8 orang, dan honor untuk para guru setahun hanya berupa 1 (satu) botol orson (sirup), pada tahun ajaran berikutnya 1989/1990 jumlah murid baru sebanyak 23 orang. Pada tahun 1989 terdaftar di Kantor Wilayah Departemen Agama Sumatera Selatan dengan status TERDAFTAR. Setelah itu Kepala Madrasah (Djusroh Hasali) bingung karena muridnya terancam tidak bisa mengikuti Ujian (EBTA/EBTANAS) karena belum teregistrasi di Kantor Wilayah Departemen Agama Sumatera Selatan, untuk bisa mendaftarkan/meregistrasi muridnya MTs Al Ikhlas Keban II harus ada lembaga yang menaunginya (Yayasan). Maka berangkatlah Kepala Madrasah ke Palembang untuk membuat Yayasan dengan bekal modal awal sebidang tanah yang diberikan (wakaf) dari mertuanya (H. Abunawas) dan uang seadanya. Sampai di Palembang ternyata untuk membuat Akte Yayasan tidak bisa dalam waktu sehari, dengan niat yang tulus dan demi menyelamatkan murid-muridnya di MTs Al Ikhlas Keban II supaya bisa ikut Ujian Akhir maka dibuatlah Akte Yayasan Pendidikann Islam Al Ikhlas (YPIA) dibuat oleh Notaris Darbi, SH dengan nomor Akte 161. <br><br>Dalam pembuatan Akte Yayasan ini Kepala Madrasah (Djusroh Hasali) terpaksa menunjuk beberapa orang dari jauh (dengan tujuan agar murid MTs Al Ikhlas bisa ikut Ujian dan MTs Al Ikhlas bisa berdiri dan bisa tetap melaksanakan kegiatan Belajar mengajar) untuk menjadi Pengawas dan Pengurus Yayasan, yaitu<br> I.  Pengawas YPIA
1.  Abdul Hamid, BA  <br>
2.  M. Zen Hamid, BA<br>
3.  Drs. Yusman Haris<br>
4.  Drs. Mesir Sidiq<br>
5.  Hamzah Adris, BA<br>
<br>II. Pengurus
1.  Ketua     : H. Abunawas<br>
2.  Wakil Ketua   : Sumi Hamid<br>
3.  Sekretaris      : Effendi<br>
4.  Wakil Sekretaris    : Suarno Zaibi<br>
5.  Bendahara     : Suryani<br>
6.  Wakil Bendahra    : Suhaidi<br>
<br>Setelah Akte Yayasan diterbitkan Kepala Madrasah (Djusroh Hasali) langsung mendaftarkan murid-murid MTs Al Ikhlas Keban II ke Kantor Wilayah Departemen Agama Provinsi Sumatera Selatan<br><br>Setelah resmi MTs Al Ikhlas Keban II terus berkembang dibuktikan dengan terus bertambahnya murid baru dari tahun ketahun. Pada tahun 1993 Nomor Statistik Madrasah diterbitkan dengan NSM : 212160601035.<br><br>Tahun Ajaran 1993/1994 MTs Al Ikhlas Keban II mendapat hibah Gedung SR/SD yang selama ini hanya dipinjamkan dipindahkan ke lokasi tanah wakaf dari H. Abunawas dan mendapat bantuan dari Pemda Musi Banyuasin sebesar Rp. 1.000.000,-  dengan berbekal bantuan tersebut H. Abunawas (Ketua YPIA) memindahkan Gedung SR/SD tersebut dari dua lokal dibangun lagi menjadi 3 ruang kelas dan 1 ruang kantor MTs Al Ikhlas. Setelah bangunan tersebut selesai untuk menempati gedung baru tersebut diresmikan langsung oleh Bupati Musi Banyuasin (H. Arifin Djalil).<br><br>Pada tahun 2002 Djusroh Hasali membeli sebidang tanah dari saudara Manaris (Uang Sendiri) dan digunakan untuk membangun 1 unit RKB (2 ruang kelas) yang diberikan oleh Pemerintah Kabupaten Musi Banyuasin melalui Dinas Pendidikan Nasional. Tahun 2004 kembali Djusroh Hasali (Kepala Madrasah) membeli sebidang tanah yang memisahkan antara gedung MTs yang lama dan RKB yang dibangun tahun 2002. Pada Tahun 2005 MTs Al Ikhlas kembali mendapat bantuan 1 unit RKB (2 ruang kelas) lagi sehingga sampai saat ini MTs Al Ikhlas sudah memiliki 3 unit gedung yang digunakan untuk : <br>1.  6 Ruang Belajar<br>
2.  1 Ruang Kepala Madrasah dan Tata Usaha<br>
3.  1 Ruang Guru<br>
4.  1 Ruang Gudang<br><br>Pada tahun 2006 MTs Al Ikhlas membangun Mushollah dengan sumber dana swadaya dari wali murid. <br>Sampai saat ini tahun pelajaran 2012/2013 jumlah murid pada MTs Al Ikhlas sudah lebih dari 200 orang siswa.<br><br>Sejak berdiri sampai sekarang sudah terjadi 3 kali pergantian Kepala Madrasah pada MTs Al Ikhlas Keban II yaitu : <br>
1. Djusroh Hasali     : 1988 s.d 2007<br>
2. Suhairin     : 2007 s.d 2016<br>
3. Mahyudin, S.Pd.I : 2016 s.d Sekarang.<br>
</p>
          </div>
        </div>
      </div>
    </section>

<!-- <section class="we-have-faith">
      <div class="container">
        <div class="row">
          <div class="section-header">
            <h3>KAMI MEMILIKI KEYAKINAN DALAM MASA DEPAN SISWA KAMI</h3>
            <p style="font-size: 17px;">Siswa kami berbakat, pekerja keras, dan penuh ide bagus. Kami mendorong dan memberdayakan mereka untuk mewujudkan ide mereka. Peluang langsung adalah apa yang kita semua tentang.</p>
          </div>
          <div class="section-content">
            <div class="col-sm-6 col-md-3">
              <img src="{{asset('assets/guest/images/we-have-faith-img-2.png')}}" alt="img">
              <h4>Pendidikan berbasis keunggulan lokal dan global</h4>
              <p style="font-size: 17px;">Globalisasi yang meramba dunia telah mengakibatkan bangsa bangsa di dunia berinteraksi secara
bebas. Inter aksi ini telah bernuansa dalam berbagai aspek kehidupan, baik dalam ilmu pengetahuan
dan teknologi, sosial budaya, politik, ekonomi, dan lain lain. Globalisasi telah membawa perubahan
sosial budaya dan prilaku manusia baik yang berdampak positif dan negativ. Secara sederhana
pengaruh dari sisi positif dapat dilihat berkembang dan meningkatnya ilmu pengetahuan dan teknology</p>
            </div>
            <div class="col-sm-6 col-md-3">
            <img src="{{asset('assets/guest/images/we-have-faith-img-1.png')}}" alt="img">
              <h4> Pengembangan diri</h4>
              <p style="font-size: 17px;">Pengembangan diri merupakan kegiatan pendidikan diluar mata pelajaran sebagai bagian integral dari
kurikulum. Kegiatan Pengembangan diri merupakan upaya pembentukan watak dan kepribadian
peserta didik
Pengembangan diri bertujuan memberikan kesempatan kepada peserta didik untuk mengembangkan
dan mengekspresikan diri sesuai dengan kebutuhan, potensi, bakat, minat, kondisi dan perkembangan
peserta didik, dengan memperhatikan kondisi Madrasah. Kegiatan Pengembangan Diri yang
dilaksanakan kegiatan ektrakurikuler dan Kegiatan Layanan Konseling, adapun Kegiatan ektrakurikuler
sbb:
- Kepramukaan
- Olahraga Volly
- Seni Tari</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="{{asset('assets/guest/images/we-have-faith-img-3.png')}}" alt="img">
              <h4>Kelulusan</h4>
              <p style="font-size: 17px;">1. Peserta didik dinyatakan lulus dari satuan pendidikan dasar dan menengah setelah<br>
                a. Menyelesaikan seluruh program pembelajaran.<br>
                b. Memperoleh nilai minimal baik pada penilaian akhir tahun seluruh mata pelajaran Agana dan
Akhlak mulia, kelompok mata pelajaran kewarganegaraan dan kepribadian, kelompok mata
pelajaran estetika, dan kelompok mata pelajaran jasmani, olahraga dan kesehatan.<br>
                c. Lulus Ujian Sekolah/Madrasah untukkelompok mata pelajaran ilmu pengetahuan dan
teknologi dan
                d. Lulus Ujian Nasional.
                <br>2. Kelulusan peserta didik dari satuan pendidikan ditetapkan oleh satuan pendidikan yang
bersangkutan sesuai dengan kriteria yang dikembangkan oleh Badan Standar Nasional
Pendidikan (BSNP) dan ditetapkan dengan peraturan mentri.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="{{asset('assets/guest/images/we-have-faith-img-4.png')}}" alt="img">
              <h4>Pendidikan Kecakapan Hidup</h4>
              <p style="font-size: 17px;">a. Ruang lingkup<br>
              Kecakapan hidup yang ingin di capai MTs Al Ikhlas Keban II sebagai berikut :
              - Siswa kelas VII dapat mengoperasikan word<br>
- Siswa kelas VIII dapat mengoperasikan exel<br> - Siswa kelas IX dapat mengoperasikan internet
<br>b. Target
Yang ingin dicapai dari pendidikan kecakapan hidup ini adalah agar setelah siswa lulus sekolah,
mereka telah memiliki kemampuhan menguasai ilmu pengetahuan dan teknologi, trampil, dan
memiliki jiwa tanggap terhadap iptek</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<section class="about-us-content">
			<center><h2>Profile Madrasah</h2></center><br>
			<div class="container">
				<div class="row">
					<div class="section-content">
		 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (1.Identitas)</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NSM</th>
                  <th>NPSN</th>
                  <th>Status Madrasah</th>
                  <th>Waktu Belajar</th>
                  <th>Nama Madarasah</th>
                  <th>NPWP</th>
                  <th>Nomor Telpon</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td>121216060009</td>
                  <td> 10600249/69853334</td>
                  <td>Swasta</td>
                  <td>Siang, Jam 11.30 s/d 5.15 wib</td>
                  <td>MTs. Al Ikhlas Keban II</td>
                  <td> - </td>
                  <td>08127446510</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
         <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (2.Data Kepala)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kepala Madrasah</th>
                  <th>Jenis Kelamin</th>
                  <th>Status Kepegawaian</th>
                  <th>NIP/NUPTK</th>
                  <th>NRG Sertifikasi</th>
                  <th>Pendidikan Terakhir</th>
                  <th>Nomor Telpon/HP</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> Mahyudin, S.Pd.I</td>
                  <td> Laki - Laki</td>
                  <td>PNS</td>
                  <td>197712072006041001 / 9539755656200003</td>
                  <td> - </td>
                  <td> Starata Satu (S1) </td>
                  <td>08127446510</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (3.Alamat Madrasah)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
               <tr>
                  <th>Jalan/Kampung</th>
                  <th>Propins</th>
                  <th>Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Desa</th>
                  <th>Kode Pos</th>
                  <th>Alamat E-mail</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> Jl. Kabupaten Desa Keban II</td>
                  <td> Sumatera Selatan</td>
                  <td> Musi Banyuasin</td>
                  <td>Sanga Desa</td>
                  <td> Keban II </td>
                  <td> 30752 </td>
                  <td>mtsalikhlaskeban2@yahoo.com</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (4. Informasi Dokumen dan Perijinan)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tahun berdiri</th>
                  <th>No. SK Pendirian</th>
                  <th>Tgl SK Pendirian</th>
                  <th>No. SK Akreditasi</th>
                  <th>Status Akreditasi</th>
                  <th>Tahun Akreditas</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> 1988</td>
                  <td>  Wf.6.308.152.89</td>
                  <td>11 Juli 1988</td>
                  <td> KPTS/Kw.06.4/4/PP.<br>03.2/220/2012 </td>
                  <td>Terakreditasi C </td>
                  <td> 2012 </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
         <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (5. Data Bantuan Oprasional Sekolah)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Bendahara BOS</th>
                  <th>Nomor Rekening Sekolah</th>
                  <th>Pemilik Rekening</th>
                  <th>Nama Bank</th>
                  <th>Kantor Cabang</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> Tetty Arpita</td>
                  <td>   1490985695</td>
                  <td>MTs Al Ikhlas Keban II</td>
                  <td> Bank SUMSEL</td>
                  <td> Sekayu </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      </section>
		@endsection