<div class="content-wrapper">
    <section class="content">
        <?php foreach($karyawan as $kry) { ?>

        <form action="<?php echo base_url().'karyawan/update'; ?>" method="post">

            <div class="form-group">
                <label>Nama karyawan</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $kry->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $kry->nama ?>">
            </div>
            
            <div class="form-group">
                <label>Nomor Induk karyawan</label>
                <input type="text" name="nik" class="form-control" value="<?php echo $kry->nik ?>">
            </div>
            
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $kry->alamat ?>">
            </div>
            
            <div class="form-group">
                <label>Divisi</label>
                <input type="text" name="divisi" class="form-control" value="<?php echo $kry->divisi ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Save</button>

            </form>
        <?php } ?>
    </section>
</div>