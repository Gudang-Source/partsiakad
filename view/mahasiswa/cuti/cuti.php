<html>
<!-- ini isimu -->
<div class="container  form-control" style="height:585px">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pengajuan Cuti Kuliah
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

    <div class="row">
        <div class="col-lg-6">
            <a href="<?php echo URL; ?>cuti/formcuti" class="btn btn-primary">BUAT PENGAJUAN</a>
        </div>
        <br>
        <br>
        <br>
        <!--clo-lg-6-->
    </div>
    <!--row-->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Progress Persetujuan</th>
                <th>Status Verifikasi</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                            <span class="sr-only">30% Complete</span>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="label label-info">Sedang Proses</span>
                </td>
                <td>
                    <a href="<?php echo URL; ?>cuti/formcuti" class="btn btn-primary">Edit</a>
                    <button class="btn btn-default"><a href="#">Detail</a></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- akhir dari isimu -->

</div>
</div>
<!--end content-->

</body>