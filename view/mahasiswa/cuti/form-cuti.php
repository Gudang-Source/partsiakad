<html>
<body>
<!-- ini isimu -->
<div class="container  form-control" style="height:auto">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Form Pengajuan Cuti Kuliah
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>Cuti Kuliah
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i>Buat Pengajuan Cuti Kuliah
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!--form pengajuan pengunduran diri-->
    <div class="row">
        <div class="col-lg-6">
            <form role="form">
                <div class="form-group">
                    <label>NAMA</label>
                    <input class="form-control" placeholder="NAMA" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input class="form-control" placeholder="NIM" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Alasan Cuti Kuliah</label>
                    <textarea class="form-control" rows="5"
                              placeholder="Silahkan isi alasan pengajuan cuti anda"></textarea>
                </div>

                <div class="col-lg-6" style="margin-left : -16px">
                    <div class="form-group">
                        <label>Lama Cuti Kuliah</label>
                        <select class="form-control">
                            <option value="0">1 Semester</option>
                            <option value="1">2 Semester</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <a href="<?php echo URL; ?>cuti/cutimhs" type="submit" class="btn btn-primary"
                   style="margin-bottom: 10px">Submit</a>

            </form>
        </div>
        <!--col-lg-6-->
    </div>
    <!--row-->


</div>
<!-- akhir dari isimu -->
</body>