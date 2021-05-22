@extends('template.index')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Wilayah Dan tahun</h4>
          <form class="forms-sample">
              <div class="form-group">
              <label for="exampleSelectprovinsi">Provinsi</label>
                <select class="form-control" id="exampleSelectprovinsi">
                  <option selected="selected">Pilih Provinsi</option>
                  <option>Jawa Timur</option>
                </select>
              </div>
                <div class="form-group">
              <label for="exampleSelectkabupaten">Kabupaten</label>
                <select class="form-control" id="exampleSelectkabupaten">
                  <option selected="selected">Pilih Kabupaten</option>
                  <option>Probolinggo</option>
                  <option>Pasuruan</option>
                </select>
              </div>
                <div class="form-group">
              <label for="exampleSelectkecamtan">Kecamatan</label>
                <select class="form-control" id="exampleSelectkecamtan">
                  <option selected="selected">Pilih Kecamatan</option>
                  <option>Kraksaan</option>
                  <option>Paiton</option>
                </select>
              </div>
                <div class="form-group">
                <label for="exampleSelectdesa">Desa</label>
                  <select class="form-control" id="exampleSelectdesa">
                    <option selected="selected">Pilih Desa</option>
                    <option>patokan</option>
                    <option>bulu</option>
                  </select>
              </div>
            <div class="form-group">
              <label for="exampleInpudatatahun">Data Tahun</label>
              <input type="number" class="form-control" id="exampleInpudatatahun" placeholder="Data Tahun">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">DIMENSI EKONOMI</h4>
          <form class="forms-sample">
            <div class="form-group">
                  <label><b>Ketersediaan Sarana Kesehatan</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sarana kesehatan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sarana kesehatan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke sarana kesehatan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Rumah Sakit</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Rumah Sakit di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Rumah Sakit terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Rumah Sakit terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Rumah Sakit Bersalin</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Rumah Sakit Bersalin di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Rumah Sakit bersalin terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Rumah Sakit bersalin terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Puskesmas Rawat inap</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Puskesmas dengan rawat inap di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Puskesmas dengan rawat inap terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Puskesmas dengan rawat inap terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Puskesmas Tanpa Rawat Inap</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Puskesmas tanpa rawat inap di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Puskesmas tanpa rawat inap terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Puskesmas tanpa rawat inap terdekat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Puskesmas Pembantu</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Puskesmas Pembantu di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Puskesmas Pembantu terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Puskesmas Pembantu terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Rumah Bersalin</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Rumah Bersalin di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Rumah bersalin terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Rumah bersalin terdekat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
            <div class="form-group">
                  <label><b>Poliklinik/Balai Pengobatan</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Poliklinik/Balai Pengobatan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Poliklinik/Balai Pengobatan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Poliklinik/Balai Pengobatan terdekat  </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="form-group">
                  <label><b>Tempat Praktek Dokter</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Tempat Praktek Dokter di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Tempat Praktek Dokter terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Tempat Praktek Dokter terdekat  </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
              <div class="form-group">
                  <label><b>Tempat Praktek Bidan</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Tempat Praktek Bidan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Tempat Praktek Bidan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Tempat Praktek Bidan terdekat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
              <div class="form-group">
                  <label><b>Apotik</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Apotek di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Apotek terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Apotek terdekat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="form-group">
                  <label><b>Ketersediaan Tenaga Kesehatan Bidan</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan tenaga kesehatan bidan Desa (BDD)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah bidan Desa (BDD) di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="form-group">
                  <label><b>Ketersediaan Tenaga Kesehatan Dokter</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan tenaga kesehatan dokter</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah dokter di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
              <div class="form-group">
                  <label><b>Ketersediaan Tenaga Kesehatan Lainnya</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan tenaga kesehatan lainnya selain dokter dan bidan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah tenaga kesehatan lainnya selain dokter dan bidan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
              <div class="form-group">
                  <label><b>Akses Ke Poskesdes/ Polindes dan Posyandu</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan sarana Poskesdes/ Polindes</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak ke Poskesdes/Polindes terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh untuk menuju ke Poskesdes/ Polindes terdekat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Fungsi Poskesdes/ Polindes</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Ketersediaan rumah singgah / rumah tunggu untuk ibu hamil</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Posyandu di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah posyandu yang melaksanakan kegiatan / pelayanan sebulan sekali</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah posyandu yang melaksanakan kegiatan / pelayanan 2 bulan sekali atau lebih</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Mayoritas warga Desa berpartisipasi aktif dalam kegiatan Posyandu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sumber Dana Pembiayaan Kegiatan Posyandu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
              <div class="form-group">
                  <label><b>Tingkat Kepesertaan BPJS/ JKN/ KIS</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah warga yang terdaftar menjadi peserta BPJS Kesehatan/ Jaminan Kesehatan Nasional/ Kartu Indonesia Sehat (KIS)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Warga Desa memanfaatkan pelayanan BPJS/JKN/KIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah warga yang terdaftar menjadi peserta Jamkesda/BPJS/JKN/KIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
              <div class="form-group">
                  <label><b>Derajat Kesehatan dan Gizi Buruk</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terdapat kejadian kematian ibu melahirkan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah kejadian kematian ibu melahirkan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat kejadian kematian balita di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah kejadian kematian balita di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat kejadian kematian bayi (0-12 Bulan) di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah kejadian kematian bayi (0-12 Bulan) di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat kejadian balita gizi buruk di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah kejadian balita gizi buruk di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat kejadian luar biasa di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Penyakit yang menyebabkan kejadian luar biasa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
              <div class="form-group">
                  <label><b>Sasaran 1.000 Hari Pertama Kehidupan (HPK) (Ibu hamil dan anak 0-23 bulan)</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Total Rumah Tangga 1.000 HPK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Usia Anak 0-23 Bulan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
              <div class="form-group">
                  <label><b>Pengukuran Tikar Pertumbuhan (Deteksi Dini Stunting) Usia Anak 0-23 Bulan</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pengukuran Tikar Pertumbuhan (Deteksi Dini Stunting) Usia Anak 0-23 Bulan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Pengukuran Tikar Pertumbuhan (Deteksi Dini Stunting) Usia Anak 0-23 Bulan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Panjang Anak 0-23 Bulan Pertumbuhan Terindikasi Stunting (Merah)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
              <div class="form-group">
                  <label><b>Kelengkapan Konvergensi Paket Layanan Pencegahan Stunting bagi 1.000 HPK</b></label>
                  <br>
                  <label><b>Ibu Hamil</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Periksa 4 Kali Selama Kehamilan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Mendapat dan Meminum Pil FE Selama 90 Hari</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Bersalin yang Mendapat Layanan Pemeriksaan NIFAS 3 Kali</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Mengikuti Konseling Gizi/ Kelas Ibu Minimal 4 Kali</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil Mengalami Kekurangan Energi Kronis (KEK)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Mengalami KEK Mendapat Kunjungan Rumah Bulanan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil Mengalami Resiko Tinggi Kehamilan (RESTI)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Mengalami RESTI Mendapat Kunjungan Rumah Bulanan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Memiliki Akses Air Minum Aman</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil Memiliki Jamban Layak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Ibu Hamil yang Memiliki Jaminan Kesehatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Tingkat Konvergensi Desa Terhadap Ibu Hamil (Indikator yang Diterima)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Tingkat Konvergensi Desa Terhadap Ibu Hamil (Indikator yang Seharusnya Diterima)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Tingkat Konvergensi Desa Terhadap Ibu Hamil</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>                                     
                        </div>
                    </div>
                </div>
            </div>  
              <div class="form-group">
                  <label><b>Anak Usia 0-23 Bulan (0-2 Tahun)</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah Anak Usia < 12 Bulan yang Mendapat Imunisasi Dasar Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak yang Ditimbang Rutin Setiap Bulan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak yang Diukur Panjang/Tinggi Badan 2 Kali Dalam Setahun</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Orang Tua/Pengasuh Laki-laki yang Mengikuti Konseling Gizi Bulanan Anak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Orang Tua/Pengasuh Perempuan yang Mengikuti Konseling Gizi Bulanan Anak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak Gizi Buruk Mendapat Kunjungan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak Gizi Kurang Mendapat Kunjungan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak Stunting Mendapat Kunjungan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak 0-2 Tahun yang Memiliki Akses Air Minum Aman</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak 0-2 Tahun yang Memiliki Jamban Layak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak Usia 0-2 Tahun yang Memiliki Jaminan Kesehatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak Usia 0-2 Tahun yang Memiliki Akta Kelahiran</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Orang Tua/Pengasuh yang Mengikuti Parenting Bulanan (PAUD)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Tingkat Konvergensi Desa Terhadap Anak Usia 0-23 Bulan (Indikator yang Diterima)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div> 
                            <label class="col-sm-3 col-form-label">Tingkat Konvergensi Desa Terhadap Anak Usia 0-23 Bulan (Indikator yang Seharusnya Diterima)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div> 
                            <label class="col-sm-3 col-form-label">Tingkat Konvergensi Desa Terhadap Anak Usia 0-23 Bulan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>                                     
                        </div>
                    </div>
                </div>
            </div>
              <div class="form-group">
                  <label><b>Anak Usia > 2-6 Tahun</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Jumlah Anak Usia > 2-6 Tahun</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Anak Usia > 2-6 Tahun yang Aktif Dalam Kegiatan PAUD</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                                                                                                                           
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection