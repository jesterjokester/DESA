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
          <h4 class="card-title">AKTIVITAS DESA</h4>
          <form class="forms-sample">
            <div class="form-group">
                    <div class="row">
                        <div class="col-md">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ketersediaan pendamping Lokal Desa di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah pendamping lokal Desa di Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah anggota KPMD(Kader Pembangunan Masyarakat Desa) (Kader Posyandu/ Kader Kesehatan) yang Aktif</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah anggota Tim  Perumusan RPJMDes) yang Aktif</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Ketersediaan kebun gizi di Desa yang dimanfaatkan Masyarakat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sumber pangan yang paling sering dikonsumsi masyarakat Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>  
                            <label class="col-sm-3 col-form-label">Terdapat Peraturan Desa tentang Kesehatan dan Pendidikan</label>
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