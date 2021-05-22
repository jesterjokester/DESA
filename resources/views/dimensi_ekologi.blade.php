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
          <h4 class="card-title">DIMENSI EKOLOGI</h4>
          <form class="forms-sample">
            <div class="form-group">
                  <label><b>Kondisi Linkungan</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan Sumber Air di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terjadi pencemaran air di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terjadi pencemaran tanah di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terjadi pencemaran udara di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Dampak pencemaran lingkungan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat sungai yang terkena pembuangan limbah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>  
                            <label class="col-sm-3 col-form-label">Terdapat perencanaan tata ruang Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>  
                            <label class="col-sm-3 col-form-label">Terdapat perubahan penggunaan lahan dari sektor pertanian menjadi non-pertanian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Potensi Bencana</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Tanah Longsor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Banjir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Gempa Bumi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Tsunami</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Gelombang Pasang Laut</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Angin Puyuh / Puting Beliung / Topan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Gunung Meletus</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Kebakaran Hutan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Kekeringan Lahan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Frekuensi Kejadian Bencana Lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Mitigasi Bencana Alam di Desa Berupa  Peringatan Dini Bencana</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Mitigasi Bencana Alam di Desa Berupa Sistem Peringatan Dini Khusus Tsunami</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Mitigasi Bencana Alam di Desa Berupa Perlengkapan Keselamatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat Fasilitas Mitigasi Bencana Alam di Desa Berupa Jalur Evakuasi</label>
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