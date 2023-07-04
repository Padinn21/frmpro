<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Karyawan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Karyawan</li>
      </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Employee Data</button>
        <br>
        <br>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA KARYAWAN</th>
                <th>NOMOR INDUK KARYAWAN</th>
                <th>ALAMAT</th>
                <th>DIVISI</th>
                <th colspan="2">ACTION</th>
            </tr>

            <?php
            $no = 1;
            foreach ($karyawan as $kry) : ?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $kry->nama ?> </td>
                <td> <?php echo $kry->nik ?> </td>
                <td> <?php echo $kry->alamat ?> </td>
                <td> <?php echo $kry->divisi ?> </td>
                <td> <?php echo anchor('karyawan/delete/'.$kry->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>' )?> </td>
                <td><?php echo anchor('karyawan/edit/'.$kry->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                
                
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Input Employee Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="<?php echo base_url().'karyawan/add_action' ?>">

            <div class="from-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama" class="form-control"
            </div>

            <div class="from-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control"
            </div>

            <div class="from-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control"
            </div>

            <div class="from-group">
                <label>Divisi</label>
                <input type="text" name="divisi" class="form-control"
            </div>

            <br>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Save</button>

            </form>
        </div>
      </div>
  </div>
</div>
</div>