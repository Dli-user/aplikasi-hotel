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
                    <?php foreach ($reservasi->result() as $value) : ?>
                    <form class="form-horizontal" method="post" action="<?php echo base_url('reservasi/update') ?>">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Id Reservasi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?php echo $value->id_reservasi; ?>"
                                        disabled>
                                    <input type="hidden" class="form-control" name="id_reservasi"
                                        value="<?php echo $value->id_reservasi; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Id Pelanggan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="id_pelanggan"
                                        value="<?php echo $value->id_pelanggan; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kode Booking</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="kode_booking"
                                        value="<?php echo $value->kode_booking; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal In</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tanggal_in"
                                        value="<?php echo $value->tanggal_in; ?>" placeholder="Keterangan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jam In</label>
                                <div class="col-sm-8">
                                    <input type="time" class="form-control" name="jam_in"
                                        value="<?php echo $value->jam_in; ?>" placeholder="Keterangan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Out</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="tanggal_out"
                                        value="<?php echo $value->tanggal_out; ?>" placeholder="Keterangan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jam Out</label>
                                <div class="col-sm-8">
                                    <input type="time" class="form-control" name="jam_out"
                                        value="<?php echo $value->jam_out; ?>" placeholder="Keterangan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Biaya</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="biaya"
                                        value="<?php echo $value->biaya; ?>" placeholder="Keterangan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pajak</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pajak"
                                        value="<?php echo $value->pajak; ?>" placeholder="Keterangan" required>
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