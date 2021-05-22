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
                  <label><b>Kondisi Permukiman Desa</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memiliki rumah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang tidak memiliki rumah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memiliki rumah permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Kondisi KK Memiliki Rumah Permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memiliki rumah semi permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Kondisi KK Memilik rumah semi permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>  
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memiliki rumah non permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>  
                            <label class="col-sm-3 col-form-label">Kondisi rumah non permanen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Akses Air Bersih dan Air Minum</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari air kemasan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari air ledeng dengan meteran (PAM/PDAM)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari air ledeng tanpa meteran</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari sumur bor / pompa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari sumur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari mata air</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari sungai / danau / kolam</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari air hujan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air minum warga di Desa bersumber dari lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Cara warga Desa memperoleh air minum</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari air ledeng dengan meteran (PAM/PDAM)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari air ledeng tanpa meteran)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari sumur bor / pompa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari sumur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari mata air</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari sungai / danau / kolam</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari air hujan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Air untuk mandi / cuci warga di Desa bersumber dari lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Akses Sanitasi</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Warga Desa BAB (Buang Air Besar)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK Warga BAB Jamban Sendiri</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK Warga BAB Jamban Bersama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK Warga BAB Jamban Umum</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK Warga BAB Bukan Jamban</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Warga Desa membuang sampah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Ketersediaan TPS (Tempat Penampungan Sampah Sementara)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Kebiasaan warga Desa membuang limbah cair atau air kotor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Akses Listrik</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah keluarga di Desa yang menggunakan sumber listrik dari PLN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah keluarga di Desa yang menggunakan sumber listrik dari non-PLN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah keluarga yang belum teraliri listrik</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Matahari</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Angin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Biomasa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Bahan Bakar Gas</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Bahan Bakar Hayati Cair</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Microhydro</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah KK yang memanfaatkan energi Tenaga Panas Bumi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jumlah sumber energi terbarukan dimanfaatkan warga Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapatnya Penerangan di Jalan Utama (PJU) di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sumber Energi PJU dari PLN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sumber Energi PJU dari Diesel Non PLN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sumber Energi PJU dari EBT Non PLN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                  <label><b>Akses Informasi & Komunikasi</b></label>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sinyal telepon seluler / handphone di Desa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Operator / provider telepon seluler Telkomsel dapat menerima sinyal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Operator / provider telepon seluler Indosat dapat menerima sinyal </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Operator / provider telepon seluler XL dapat menerima sinyal </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Operator / provider telepon seluler lainnya dapat menerima sinyal </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Siaran program televisi saluran TVRI Nasional dan TVRI daerah </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Siaran program televisi saluran swasta </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Siaran program televisi saluran luar negeri </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Terdapat fasilitas internet di kantor kepala Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Warga Desa memiliki akses internet </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Informasi Desa ada di Papan informasi </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Informasi Desa Websitei </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Sarana informasi Lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Tersedia Tower BTS di Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Mayoritas warga yang menggunakan Parabola di Desa </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                            <label class="col-sm-3 col-form-label">Jarak Tower Provider terdekat di Desa </label>
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