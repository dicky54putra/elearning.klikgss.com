<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Data Siswa
      <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_siswa_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div>
    </div>
    <div class="panel-body">


      <table class="table table-bordered">
        <thead>
          <tr>
            <th width="4%">No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>email</th>
            <th width="30%">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php
          if (!empty($data)) {
            $no = 1;
            foreach ($data as $d) {
              echo '<tr>
                      <td class="ctr">' . $no . '</td>
                      <td>' . $d->nama . '</td>
                      <td>' . $d->nis . '</td>
                      <td>' . $d->kelas . '</td>
                      <td>' . $d->email . '</td>
                      <td class=""><center>
                        <div class="btn-group">
                          <a href="#" onclick="return m_siswa_e(' . $d->id . ');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="#" onclick="return m_siswa_h(' . $d->id . ');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                          <a href="#" onclick="return m_siswa_matpel(' . $d->id . ');" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-list" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Mata Pelajaran</a>
                          ';
              if ($d->ada == "0") {
                echo '        <a href="#" onclick="return m_siswa_u(' . $d->id . ');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-user" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Aktifkan User</a>';
              }


              echo '</div>
                      </center>
                      </td>
                      </tr>
                      ';
              $no++;
            }
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
</div>





<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Siswa</h4>
      </div>
      <div class="modal-body">
        <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
          <input type="hidden" name="id" id="id" value="0">
          <table class="table table-form">
            <tr>
              <td style="width: 25%">Nama</td>
              <td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td>
            </tr>
            <tr>
              <td style="width: 25%">Nis</td>
              <td style="width: 75%"><input type="text" class="form-control" name="nis" id="nis" required></td>
            </tr>
            <tr>
              <td style="width: 25%">Kelas</td>
              <!-- <td style="width: 75%"><input type="text" class="form-control" name="kelas" id="kelas" required></td> -->
              <td>
                <select name="kelas" id="kelas" type="text" class="form-control select2" required>
                  <option value="">--Pilih Kelas--</option>
                  <option value="X AKL 1">X AKL 1</option>
                  <option value="X AKL 2">X AKL 2</option>
                  <option value="X OTKP 1">X OTKP 1</option>
                  <option value="X OTKP 2">X OTKP 2</option>
                  <option value="X BDP 1">X BDP 1</option>
                  <option value="X BDP 2">X BDP 2</option>
                  <option value="X TKJ 1">X TKJ 1</option>
                  <option value="X TKJ 2">X TKJ 2</option>

                  <option value="XI AKL 1">XI AKL 1</option>
                  <option value="XI AKL 2">XI AKL 2</option>
                  <option value="XI OTKP 1">XI OTKP 1</option>
                  <option value="XI OTKP 2">XI OTKP 2</option>
                  <option value="XI BDP 1">XI BDP 1</option>
                  <option value="XI BDP 2">XI BDP 2</option>
                  <option value="XI TKJ 1">XI TKJ 1</option>
                  <option value="XI TKJ 2">XI TKJ 2</option>

                  <option value="XII AKL 1">XII AKL 1</option>
                  <option value="XII AKL 2">XII AKL 2</option>
                  <option value="XII OTKP 1">XII OTKP 1</option>
                  <option value="XII OTKP 2">XII OTKP 2</option>
                  <option value="XII BDP 1">XII BDP 1</option>
                  <option value="XII BDP 2">XII BDP 2</option>
                  <option value="XII TKJ 1">XII TKJ 1</option>
                  <option value="XII TKJ 2">XII TKJ 2</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">Email</td>
              <td style="width: 75%"><input type="text" class="form-control" name="email" id="email" required></td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
      </form>
    </div>
  </div>
</div>