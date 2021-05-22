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
          <h4 class="card-title">Awal Dan akhir tahun Pendapatan Dana</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInpudatatahunawal">Tahun Awal</label>
              <input type="number" class="form-control" id="exampleInpudatatahunawal" placeholder="Data Tahun">
            </div>
            <div class="form-group">
              <label for="exampleInpudatatahunakhir">Tahun Akhir</label>
              <input type="number" class="form-control" id="exampleInpudatatahunakhir" placeholder="Data Tahun">
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
          <h4 class="card-title">SUMBER PENDAPATAN DESA</h4>
          <form class="forms-sample">
                <div class="form-group">
                  <label>Pendapatan Asli Desa</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Dana Desa (DD)</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Bagi Hasil Pajak dan Retribusi Daerah</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Alokasi Dana Desa</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Bantuan Provinsi</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label> Bantuan Kabupaten/Kota</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Lain-lain</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Awal</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Akhir</label>
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
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ASET/ KEKAYAAN DESA</h4>
          <form class="forms-sample">

            <div class="form-group">
              <label for="exampleInputTanah_kasDesa">Terdapat Tanah Kas Desa/ Ulayat</label>
              <input type="text" class="form-control" id="exampleInputTanah_kasDesa" placeholder="Terdapat Tanah Kas Desa/ Ulayat">
            </div>
            <div class="form-group">
              <label for="exampleInputBangunan_bangunanKantor">Terdapat Bangunan Kantor Desa</label>
              <input type="text" class="form-control" id="exampleInputBangunan_bangunanKantor" placeholder="Terdapat Bangunan Kantor Desa">
            </div>  
            <div class="form-group">
              <label for="exampleInputBangunan_bangunanBalai">Terdapat Bangunan Balai Desa</label>
              <input type="text" class="form-control" id="exampleInputBangunan_bangunanBalai" placeholder="Terdapat Bangunan Balai Desa">
            </div>  
            <div class="form-group">
              <label for="exampleInputBangunan_desaLainnya">Terdapat Bangunan Desa Lainnya (sebutkan)</label>
              <input type="text" class="form-control" id="exampleInputBangunan_desaLainnya" placeholder="Terdapat Bangunan Desa Lainnya (sebutkan)">
            </div>  
            <div class="form-group">
              <label for="exampleInputPasar_terdapatPasar">Terdapat Pasar Hewan</label>
              <input type="text" class="form-control" id="exampleInputPasar_terdapatPasar" placeholder="Terdapat Pasar Hewan">
            </div>  
            <div class="form-group">
              <label for="exampleInputPasar_pasarPelelangan">Terdapat Pasar Pelelangan Ikan</label>
              <input type="text" class="form-control" id="exampleInputPasar_pasarPelelangan" placeholder="Terdapat Pasar Pelelangan Ikan">
            </div>   
            <div class="form-group">
              <label for="exampleInputPasar_pelelanganHasil">Terdapat Pasar Pelelangan Hasil Pertanian</label>
              <input type="text" class="form-control" id="exampleInputPasar_pelelanganHasil" placeholder="Terdapat Pasar Pelelangan Hasil Pertanian">
            </div>    
            <div class="form-group">
              <label for="exampleInputPasar_desaLainnya">Terdapat Pasar Desa Lainnya (sebutkan)</label>
              <input type="text" class="form-control" id="exampleInputPasar_desaLainnya" placeholder="Terdapat Pasar Desa Lainnya (sebutkan)">
            </div>   
            <div class="form-group">
              <label for="exampleInputAset_desaLainnya">Terdapat Aset Desa Lainnya (sebutkan)</label>
              <input type="text" class="form-control" id="exampleInputAset_desaLainnya" placeholder="Terdapat Aset Desa Lainnya (sebutkan)">
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
          <h4 class="card-title">Penyebaran Informasi APBDes disebarkan ke Masyarakat</h4>
          <form class="forms-sample">

            <div class="form-group">
              <label for="exampleInputInfoAPBDes_mading">Papan informasi</label>
              <input type="text" class="form-control" id="exampleInputInfoAPBDes_mading" placeholder="Papan informasi">
            </div>
            <div class="form-group">
              <label for="exampleInputInfoAPBDes_mus">Musyawarah Desa</label>
              <input type="text" class="form-control" id="exampleInputInfoAPBDes_mus" placeholder="Musyawarah Desa">
            </div>  
            <div class="form-group">
              <label for="exampleInputInfoAPBDes_web">Website</label>
              <input type="text" class="form-control" id="exampleInputInfoAPBDes_web" placeholder="Website">
            </div>  
            <div class="form-group">
              <label for="exampleInputInfoAPBDes_lain">Lainnya</label>
              <input type="text" class="form-control" id="exampleInputInfoAPBDes_lain" placeholder="Lainnya">
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
          <h4 class="card-title">JARAK, WAKTU DAN BIAYA DESA KE KECAMATAN DAN KABUPATEN</h4>
          <form class="forms-sample">

            <div class="form-group">
              <label for="exampleInputKtr_KtrDesa_KtrCamat">Jarak Kantor Desa Ke kantor Camat</label>
              <input type="text" class="form-control" id="exampleInputKtr_KtrDesa_KtrCamat" placeholder="Jarak Kantor Desa Ke kantor Camat">
            </div>
            <div class="form-group">
              <label for="exampleInputWkt_KtrDesa_KtrCamat">Waktu Tempuh dari Kantor Desa Ke Kantor Camat</label>
              <input type="text" class="form-control" id="exampleInputWkt_KtrDesa_KtrCamat" placeholder="Waktu Tempuh dari Kantor Desa Ke Kantor Camat">
            </div>  
            <div class="form-group">
              <label for="exampleInputBiaya_KtrDesa_KtrCamat">Total Biaya Transportasi Dari Kantor Desa Ke Kantor Camat</label>
              <input type="text" class="form-control" id="exampleInputBiaya_KtrDesa_KtrCamat" placeholder="Total Biaya Transportasi Dari Kantor Desa Ke Kantor Camat">
            </div>  
            <div class="form-group">
              <label for="exampleInputJrk_KtrDesa_KtrBupati/Walikota">Jarak Kantor Desa Ke kantor Bupati/Walikota</label>
              <input type="text" class="form-control" id="exampleInputJrk_KtrDesa_KtrBupati/Walikota" placeholder="Jarak Kantor Desa Ke kantor Bupati/Walikota">
            </div>  
            <div class="form-group">
              <label for="exampleInputWkt_KtrDesa_KtrBupati/Walikota">Waktu Tempuh Kantor Desa Ke Kantor Bupati/Walikota</label>
              <input type="text" class="form-control" id="xampleInputWkt_KtrDesa_KtrBupati/Walikota" placeholder="Waktu Tempuh Kantor Desa Ke Kantor Bupati/Walikota">
            </div>        
            <div class="form-group">
              <label for="exampleInputBiaya_KtrDesa_KtrBupati/Walikota">Total Biaya Transportasi Dari Kantor Desa Ke Kantor Bupati/Walikota</label>
              <input type="text" class="form-control" id="xampleInputBiaya_KtrDesa_KtrBupati/Walikota" placeholder="Total Biaya Transportasi Dari Kantor Desa Ke Kantor Bupati/Walikota">
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