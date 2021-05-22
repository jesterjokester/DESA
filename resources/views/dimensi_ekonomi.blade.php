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
          <h4 class="card-title">DATA KESEHATAN</h4>
          <form class="forms-sample">
            <div class="form-group">
                  <label><b>Keragaman Produksi Masyarakat Desa</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sumber penghasilan utama penduduk Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat produk unggulan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Produk Unggulan Pertama di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Produk Unggulan Kedua di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Perubahan (meningkat/menurun) produk komoditi pertanian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Produk Komiditi pertanian yang mengalami peningkatan/peneruman</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat produksi hasil tangkapan laut</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Perubahan (meningkat/menurun) produksi hasil tangkapan laut</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah industri mikro dan kecil komoditas industri rumah tangga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah industri mikro dan kecil komoditas pariwisata</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah industri mikro dan kecil komoditas perikanan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah industri mikro dan kecil komoditas pertanian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jumlah industri mikro dan kecil komoditas peternakan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah industri mikro dan kecil Lainnya di Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Total industri mikro dan kecil di Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Total industri menengah di Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                  <label><b>Sarana dan Prasarana Ekonomi di Desa</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Mayoritas Peralatan Teknologi Tepat Guna pertanian yang digunakan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah peralatan Tekonologi Tepat Guna pertanian di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Mayoritas Peralatan Teknologi Tepat Guna petenakan yang digunakan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jumlah alat bantu Tekonologi Tepat Guna  peternakan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Mayoritas Peralatan Teknologi Tepat Guna perikanan yang digunakan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah alat bantu Tekonologi Tepat Guna  Perikanan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                  <label><b>Akses Ke Pusat Perdagangan</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Ketersediaan kelompok pertokoan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jarak ke kelompok pertokoan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah pasar dengan bangunan permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jumlah pasar dengan bangunan semi permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat pasar tanpa bangunan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah pasar tanpa bangunan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jumlah toko / warung kelontong di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat warung / kedai makanan dan minuman di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat hotel / penginapan di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jarak ke hotel / penginapan terdekat </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Waktu tempuh menuju hotel / penginapan terdekat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Masyarakat yang memanfaatkan Biogas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Agen Penjual LPG/Minyak Tanah/</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Mayoritas Bahan Bakar Memasak untuk kebutuhan keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Bahan bakar Masak Lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                  <label><b>Akses Distribusi / Logistik</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terdapat kantor pos / pos pembantu / rumah pos / pos keliling di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat pelayanan jasa ekspedisi di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                  <label><b>Akses Lembaga Keuangan</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terdapat Bank Umum Pemerintah di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bank Swasta di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat BPR di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Kredit Berupa KUR</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Kredit Berupa KKP-E </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Kredit Berupa KUK </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Fasilitas Kredit Lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                  <label><b>Ketersediaan Lembaga Ekonomi</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Terdapat BUMDesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nama BUMDesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Status Bumdesa (Aktif/Tidak Aktif)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Keikutsertaan Desa Terhadap BUMDesa Bersama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nama BUMDesa Bersama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Kantor Bumdesa Bersama di Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Status Bumdesa Bersama (Aktif/Tidak Aktif)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">BUMDesa Bisnis Sosial</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Bisnis Sosial Bidang Air Bersih</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Bumdesa Bisnis Sosial Bidang Listrik</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Bisnis Sosial Bidang Sampah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Bisnis Sosial Bidang Jasa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">BUMDesa Jasa Penyewaan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Jasa Sewa Gedung</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Jasa Sewa Tenda</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Jasa Sewa Peralatan Sound System</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Jasa Sewa Peralatan Lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> BUMDesa Perdagangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perdagangan Bidang Pertanian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sebutkan Bumdesa Perdagangan Bidang Pertanian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perdagangan Bidang Perkebunan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sebutkan Bumdesa Perdagangan Bidang Perkebunan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perdagangan Bidang Peternakan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sebutkan Bumdesa Perdagangan Bidang Peternakan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perdagangan Bidang Sembako</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">BUMDesa Keuangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Keuangan Simpan Pinjam</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Bumdesa Keuangan UED SP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Keuangan Mikro Finance</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Keuangan Brilink</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Bumdesa Keuangan Agen 46</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Keuangan Kredit </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Keuangan Koperasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Keuangan PPOB</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">BUMDesa Perantara (Layanan)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Bidang Jasa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Terdapat Bumdesa Perantara Bidang Perbengkelan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Toko/Kios</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Bidang Percetakan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Bidang Photo Copy</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Bidang Penggilingan Padi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">BUMDesa Usaha</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Usaha Bidang Kelompok Usaha</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Bidang Penjualan Tiket</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Perantara Bidang Karaoke</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">BUMDesa Pariwisata</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Pariwisata Bidang Wisata Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Pariwisata Bidang Agrowisata</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Pariwisata Bidang Wisata Alam</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Bumdesa Pariwisata Bidang Transpotasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Omset Bumdes 1 Tahun Terakhir </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Omset Bumdes Bersama 1 Tahun Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah Bidang Usaha Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nomor Perdes Pembentukan Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Tahun Pendirian Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Total Tenaga Kerja Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nama Pengelola_Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nama_Ketua_Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nama Sekretaris</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Nama Bendahara</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label"> Jumlah Anggota Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">SK Pengelola Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Alamat Email Bumdesa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                  <label><b>Keterbukaan Wilayah</b></label>
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Angkutan Umum di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Angkutan Umum Utama di Desa Beroperasi Setiap Hari</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jam Operasional Angkutan Umum Utama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jalan di Desa Dapat Dilalui Kendaraan Bermotor Roda Empat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jenis Permukaan Jalan di Desa yang Terluas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Kualitas Permukaan Jalan di Desa</label>
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