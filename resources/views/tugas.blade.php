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
          <h4 class="card-title">IDENTITAS PETUGAS</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputnamapetugas">Nama Petugas</label>
              <input type="text" class="form-control" id="exampleInputnamapetugas" placeholder="Nama Petugas">
            </div>
            <div class="form-group">
              <label for="exampleInputtanggalisikuesioner">Tanggal Isi Kuesioner</label>
              <input type="date" class="form-control" id="exampleInputtanggalisikuesioner" placeholder="Tanggal Isi Kuesioner">
            </div>
            <div class="form-group">
              <label for="exampleInputtelepon">Telp/HP Petugas</label>
              <input type="text" class="form-control" id="exampleInputtelepon" placeholder="Telp/HP Petugas">
            </div>
            <div class="form-group">
              <label for="exampleInputidnik">ID Petugas (nomor KTP)</label>
              <input type="number" class="form-control" id="exampleInputidnik" placeholder=" ID Petugas (nomor KTP)">
            </div>   
            <div class="form-group">
              <label for="exampleInputidjabatan">Jabatan (PD/PLD/Perangkat Desa/dll)</label>
              <input type="number" class="form-control" id="exampleInputidnik" placeholder="Jabatan (PD/PLD/Perangkat Desa/dll)">
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