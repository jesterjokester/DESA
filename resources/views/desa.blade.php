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
          <h4 class="card-title">IDENTITAS DESA</h4>
          <form class="forms-sample">

            <div class="form-group">
              <label for="exampleInputnamainforman">Nama Informan</label>
              <input type="text" class="form-control" id="exampleInputnamainforman" placeholder="Nama Informan">
            </div>
            <div class="form-group">
              <label for="exampleInputJabatan">Jabatan</label>
              <input type="text" class="form-control" id="exampleInputJabatan" placeholder="Jabatan">
            </div>  
            <div class="form-group">
              <label for="exampleInputTel_Informan">No. Telepon Rumah / Hp Informan</label>
              <input type="text" class="form-control" id="exampleInputTel_Informan" placeholder="No. Telepon Rumah / Hp Informan">
            </div> 
            <div class="form-group">
              <label for="exampleInputTL_Informan">Tanggal Lahir Informan</label>
              <input type="text" class="form-control" id="exampleInputTL_Informan" placeholder="Tanggal Lahir Informan">
            </div> 
            <div class="form-group">
              <label for="exampleInputJK_Informan">Jenis Kelamin Informan</label>
              <input type="text" class="form-control" id="exampleInputJK_Informan" placeholder="Jenis Kelamin Informan">
            </div> 
            <div class="form-group">
              <label for="exampleInputLU/LS">Latitude (LU/LS)</label>
              <input type="text" class="form-control" id="exampleInputLU/LS" placeholder="Latitude (LU/LS)">
            </div> 
            <div class="form-group">
              <label for="exampleInputBB/BT">Longitude (BB/BT)</label>
              <input type="text" class="form-control" id="exampleInputBB/BT" placeholder="Longitude (BB/BT)">
            </div> 
              <div class="form-group">
              <label for="exampleInputAlamat">Alamat Lengkap Kantor Desa</label>
              <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat Lengkap Kantor Desa">
            </div>      
            <div class="form-group">
              <label for="exampleInputPend_Plt/Kades">Pendidikan Terakhir Plt/ Kepala Desa </label>
              <input type="text" class="form-control" id="exampleInputPend_Plt/Kades" placeholder="Pendidikan Terakhir Plt/ Kepala Desa ">
            </div>   
            <div class="form-group">
              <label for="exampleInputLama_Masa_Plt/Kades">Lama Masa Jabatan sebagai Plt/ Kepala Desa </label>
              <input type="text" class="form-control" id="exampleInputLama_Masa_Plt/Kades" placeholder="Lama Masa Jabatan sebagai Plt/ Kepala Desa">
            </div> 
            <div class="form-group">
              <label for="exampleInputPend_Plt/Sekdes ">Pendidikan Terakhir Plt/ Sekretaris Desa </label>
              <input type="text" class="form-control" id="exampleInputPend_Plt/Sekdes" placeholder="Pendidikan Terakhir Plt/ Sekretaris Desa">
            </div> 
            <div class="form-group">
              <label for="exampleInputLama_Masa_Plt/Sekdes ">Lama Masa Jabatan sebagai Plt/ Sekretaris Desa </label>
              <input type="text" class="form-control" id="exampleInputLama_Masa_Plt/Sekdes" placeholder="Lama Masa Jabatan sebagai Plt/ Sekretaris Desa">
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
          <h4 class="card-title">Kuesioner</h4>
          <form class="forms-sample">
                <div class="form-group">
                  <label>Sekretaris Desa</label>
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
                  <label>Kepala Urusan Tata Usaha dan Umum </label>
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
                  <label>Kepala Urusan Keuangan  </label>
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
                  <label>Kepala Urusan Perencanaan </label>
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
                  <label>Kepala seksi pemerintahan </label>
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
                  <label>Kepala seksi kesejahteraan  </label>
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
                  <label>Kepala seksi pelayanan  </label>
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
                  <label>Staf petugas Desa</label>
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
                  <label>BPD dan Anggota </label>
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
                  <label>LPM dan Anggota </label>
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
                  <label>TP. PKK Desa  </label>
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
                  <label>Kepala Dusun  </label>
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
                  <label>Ketua RW  </label>
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
                  <label>Ketua RT  </label>
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
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection