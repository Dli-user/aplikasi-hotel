<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo $title; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $title; ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0"><?php echo $subtitle; ?></h5>
                    </div>

                    <?php foreach ($tipekamar->result() as $value) : ?>
                    <!-- <form class="form-horizontal" method="post" action="<?php echo base_url('tipekamar/update') ?>"> -->

                    <?php echo form_open_multipart('tipekamar/update') ?>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Id Kamar Tipe</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $value->id_kamar_tipe; ?>"
                                    disabled>
                                <input type="hidden" class="form-control" name="id_kamar_tipe"
                                    value="<?php echo $value->id_kamar_tipe; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Kamar Tipe</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_kamar_tipe"
                                    value="<?php echo $value->nama_kamar_tipe; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fasilitas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fasilitas"
                                    value="<?php echo $value->fasilitas; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="gambar"
                                    value="<?php echo $value->gambar; ?>" placeholder="Keterangan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="harga"
                                    value="<?php echo $value->harga; ?>" placeholder="Keterangan" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                    </form>

                    <?php endforeach; ?>

                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->