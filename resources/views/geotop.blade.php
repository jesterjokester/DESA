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
          <h4 class="card-title">DATA GEOGRAFI DAN LUAR WILAYAH</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputLWil_Desa">Total Luas Wilayah Desa </label>
              <input type="text" class="form-control" id="exampleInputLWil_Desa" placeholder="Total Luas Wilayah Desa">
            </div>
            <div class="form-group">
              <label for="exampleInputHutan_Desa">Hutan Desa</label>
              <input type="text" class="form-control" id="exampleInputHutan_Desa" placeholder="Hutan Desa">
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
          <h4 class="card-title">DATA TOPOGRAFI</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputJenisWil_Desa">Jenis Wilayah Desa  </label>
              <input type="text" class="form-control" id="exampleInputJenisWil_Desa" placeholder="Jenis Wilayah Desa">
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
          <h4 class="card-title">DATA PENDUDUK</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputTotal_Pend">Jumlah Total Penduduk</label>
              <input type="text" class="form-control" id="exampleInputTotal_Pend" placeholder="Jumlah Total Penduduk">
            </div>
            <div class="form-group">
              <label for="exampleInputTotal_Lk">Jumlah Penduduk Laki-laki</label>
              <input type="text" class="form-control" id="exampleInputTotal_Lk" placeholder="Jumlah Penduduk Laki-laki">
            </div>
            <div class="form-group">
                <label for="exampleInputTotal_pr">Jumlah Penduduk Perempuan</label>
              <input type="text" class="form-control" id="exampleInputTotal_pr" placeholder="Jumlah Penduduk Perempuan">
            </div>
            <div class="form-group">
              <label for="exampleInputPendatang">Jumlah Penduduk Pendatang</label>
              <input type="text" class="form-control" id="exampleInputPendatang" placeholder="Jumlah Penduduk Pendatang">
            </div>
            <div class="form-group">
              <label for="exampleInputPend_pergi">Jumlah Penduduk Pergi</label>
              <input type="text" class="form-control" id="exampleInputPend_pergi" placeholder="Jumlah Penduduk Pergi">
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
          <h4 class="card-title">DATA KEPALA KELUARGA</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputTotal_Pend">Jumlah Total Kepala Keluarga</label>
              <input type="text" class="form-control" id="exampleInputTotal_Pend" placeholder="Jumlah Total Penduduk">
            </div>
            <div class="form-group">
              <label for="exampleInputTotal_Lk">Jumlah Total Kepala Keluarga Perempuan</label>
              <input type="text" class="form-control" id="exampleInputTotal_Lk" placeholder="Jumlah Total Kepala Keluarga Perempuan">
            </div>
            <div class="form-group">
                <label for="exampleInputTotal_KKmis">Jumlah Keluarga Miskin</label>
              <input type="text" class="form-control" id="exampleInputTotal_pr" placeholder="Jumlah Keluarga Miskin">
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
          <h4 class="card-title">JUMLAH PENDUDUK BERDASARKAN STRUKTUR USIA</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputTotal_By">Kurang dari 1 tahun</label>
              <input type="text" class="form-control" id="exampleInputTotal_By" placeholder="Kurang dari 1 tahun">
            </div>
            <div class="form-group">
              <label for="exampleInputTotal_Balita">1-4 tahun</label>
              <input type="text" class="form-control" id="exampleInputTotal_Balita" placeholder="1-4 tahun">
            </div>
            <div class="form-group">
              <label for="exampleInputTotal_Rmj">5-14 tahun</label>
              <input type="text" class="form-control" id="exampleInputTotal_Rmj" placeholder="5-14 tahun">
            </div>
            <div class="form-group">
              <label for="exampleInputTotal_Dw1">15-39 tahun</label>
              <input type="text" class="form-control" id="exampleInputTotal_Dw1" placeholder="15-39 tahun">
            </div>
            <div class="form-group">
              <label for="exampleInputTotal_Lansia">65 tahun ke atas</label>
              <input type="text" class="form-control" id="exampleInputTotal_Lansia" placeholder="65 tahun ke atas">
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
          <h4 class="card-title">JUMLAH PENDUDUK BERDASARKAN PEKERJAAN</h4>
          <form class="forms-sample">
                <div class="form-group">
                  <label>Petani</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  
                <div class="form-group">
                  <label>Nelayan </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>   
                <div class="form-group">
                  <label>Buruh Tani/Buruh Nelayan  </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Buruh Pabrik </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>PNS </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Pegawai Swasta  </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Wiraswasta / pedagang  </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>TNI</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  
                <div class="form-group">
                  <label>POLRI </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Dokter (Swasta/ Honorer) </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group">
                  <label>Bidan (Swasta/ Honorer)  </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group">
                  <label>Perawat (Swasta/ Honorer)  </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <div class="form-group">
                  <label>Lainnya  </label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <label class="col-sm-3 col-form-label">apakah itu?</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <label class="col-sm-3 col-form-label">apakah itu?</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                </div>
                </div> 
                <div class="form-group">
                  <label>Jumlah warga penyandang kebutuhan khusus</label>
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Laki-laki</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <label class="col-sm-3 col-form-label">apakah itu?</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perempuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" />
                        </div>
                        <label class="col-sm-3 col-form-label">apakah itu?</label>
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