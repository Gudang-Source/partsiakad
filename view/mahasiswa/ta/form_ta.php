<html>
<body>
<!-- ini isimu -->
<div class="container  form-control" style="height:auto">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style='text-align:center'>
                Pengajuan Tugas Akhir
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>Tugas Akhir
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i>Pengajuan Tugas Akhir
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-4">
                <?php
                $cekta = session::get('cek');
                if ($this->status == 3) {
                    ?>
                    <h3>Upload Proposal Final</h3>
                    <form action="<?php echo URL . 'ta/uploadProposal'; ?>" method="POST" enctype="multipart/form-data">
                        <input type="file" name="proposal">
                        <br>
                        <button type="submit" name="simpan">Submit</button>
                    </form>
                <?php } elseif ($this->status == 7) {
                    ?>
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" readonly="readonly" value="<?php echo session::get('nim'); ?>">
                    </div>
                    <div class="form-group">
                        <label>NAMA</label>
                        <input class="form-control" readonly="readonly" value="<?php echo session::get('nama'); ?>">
                    </div>

                    <h3>Cetak Berita Acara Seminar Proposal</h3>
                    <br>

                    <a type="button" class="btn btn-md btn-success"
                       href="<?php echo URL; ?>ta/cetaksempro/<?php echo session::get('nim'); ?>">Cetak</a>
                <?php } elseif ($this->status == 8) { ?>
                    <h3>Upload File Tugas Akhir Final</h3>
                    <form action="<?php echo URL . 'ta/uploadtafinal'; ?>" method="POST" enctype="multipart/form-data">
                        <input type="file" name="proposal">
                        <br>
                        <button type="submit" name="simpan">Submit</button>
                    </form>
                <?php } elseif ($this->status == 9) { ?>
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" readonly="readonly" value="<?php echo session::get('nim'); ?>">
                    </div>
                    <div class="form-group">
                        <label>NAMA</label>
                        <input class="form-control" readonly="readonly" value="<?php echo session::get('nama'); ?>">
                    </div>

                    <h3>Cetak Berita Acara Tugas Akhir</h3>
                    <br>

                    <a type="button" class="btn btn-md btn-success"
                       href="<?php echo URL; ?>ta/cetak_ta/<?php echo session::get('nim'); ?>">Cetak</a>
                <?php } else {
                    ?>
                    <div class="form-group">
                        <label>NAMA</label>
                        <input class="form-control" readonly="readonly" value="<?php echo session::get('nama'); ?>">
                    </div>

                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" readonly="readonly" value="<?php echo session::get('nim'); ?>">
                    </div>
                    <?php
                    if ($cekta == false) {
                        ?>
                        <form class="form-horizontal" role="form" action="<?php echo URL; ?>ta/createTA" method="POST">
                            <div class="form-group">
                                <label>Judul Tugas Akhir</label>
                                <textarea class="form-control" rows="4" name="judulta"
                                          placeholder="isi judul tugas akhir anda"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Judul Tugas Akhir (Versi Inggris)</label>
                                <textarea class="form-control" rows="4" name="judultaing"
                                          placeholder="isi judul tugas akhir anda dalam bahasa inggris"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="submit">
                            </div>
                        </form>

                        <?php
                    } else {
                        ?>
                        <div class="form-group">
                            <label>Judul Tugas Akhir</label>
                                <textarea class="form-control" readonly="readonly" rows="4"
                                          placeholder="isi judul tugas akhir anda"><?php echo $this->judul['judul_TA'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Judul Tugas Akhir (Versi Inggris)</label>
                                <textarea class="form-control" readonly="readonly" rows="4"
                                          placeholder="isi judul tugas akhir anda dalam bahasa inggris"><?php echo $this->judul['judul_TA_ing'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit" disabled>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="form-group">
                        <label>Pembimbing Utama </label>
                        <label style="text-indent: 5em;"> : <?php echo $this->pembimbing ?> </label>
                        <br>
                        <label>Penguji Utama</label>
                        <label style="text-indent: 7.8em;"> : <?php echo $this->penguji ?> </label>
                    </div>
                <?php }
                ?>
            </div>
            <!--col-lg-6-->
            <div class="col-lg-1">
            </div>
            <div class="col-lg-5">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="background-color: #8c8c8c;width: 60%">Prosedur</th>
                            <th style="background-color: #8c8c8c">Proses</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="background-color: #ececec;font-size:90%">[Mahasiswa]
                                <br><label class="custom-file-upload"">
                                <input type="file" name="draf" style="display:none;"/><span
                                    style="font-size:small">Upload file draf</span>
                                </label>
                            </td>
                            <?php
                            if ($cekta == false) {
                                ?>
                                <td style="background-color: #ececec">-</td>
                            <?php } else {

                                ?>
                                <td style="background-color: #ececec">Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[KOMBI]
                                <br>

                                <p style="font-size: small"><b>Penetapan Judul dan Pembimbing</b></p></td>
                            <?php
                            if ($this->status < 2) {
                                ?>
                                <td>-</td>
                            <?php } else {
                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[Operator Fakultas]
                                <br>

                                <p style="font-size: small"><b>Cetak Surat Tugas Pembimbing</b></p></td>
                            <?php
                            if ($this->status < 3) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #ececec;font-size:90%">[Mahasiswa]
                                <br><label class="custom-file-upload"">
                                <input type="file" style="display:none;"/><span style="font-size:small">Upload File Proposal Final</span>
                                </label></td>
                            <?php
                            if ($this->status < 4) {
                                ?>
                                <td style="background-color: #ececec">-</td>
                            <?php } else {

                                ?>
                                <td style="background-color: #ececec">Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[Dosen Pembimbing]
                                <br>

                                <p style="font-size: small"><b>Persetujuan Proposal Final</b></p></td>
                            <?php
                            if ($this->status < 5) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[KOMBI]
                                <br>

                                <p style="font-size: small"><b>Penetapan Penguji</b></p></td>
                            <?php
                            if ($this->status < 6) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[Operator Fakultas]
                                <br>

                                <p style="font-size: small"><b>Cetak Surat Tugas Penguji</b></p></td>
                            <?php
                            if ($this->status < 7) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #ececec;font-size: 90%">[Mahasiswa]
                                <br>

                                <p style="font-size: small"><b>Cetak Berita Acara Seminar Proposal</b></p></td>
                            <?php
                            if ($this->status < 8) {
                                ?>
                                <td style="background-color: #ececec">-</td>
                            <?php } else {

                                ?>
                                <td style="background-color: #ececec">Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #ececec;font-size: 90%">[Mahasiswa]
                                <br><label class="custom-file-upload"">
                                <input type="file" style="display:none;"/><span style="font-size:small">Upload File Tugas Akhir Final</span>
                                </label></td>
                            <?php
                            if ($this->status < 9) {
                                ?>
                                <td style="background-color: #ececec">-</td>
                            <?php } else {

                                ?>
                                <td style="background-color: #ececec">Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[Dosen Pembimbing]
                                <br>

                                <p style="font-size: small"><b>Persetujuan Tugas Akhir</b></p></td>
                            <?php
                            if ($this->status < 10) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #ececec;font-size: 90%">[Mahasiswa]
                                <br>

                                <p style="font-size: small"><b>Cetak Berita Acara Ujian Tugas Akhir</b></p></td>
                            <?php
                            if ($this->status < 11) {
                                ?>
                                <td style="background-color: #ececec">-</td>
                            <?php } else {

                                ?>
                                <td style="background-color: #ececec">Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #ececec;font-size: 90%;">[Mahasiswa]
                                <br>

                                <p style="font-size: small"><b>Upload File Revisi Tugas Akhir dan File Artike Ilmiah</b>
                                </p></td>
                            <td style="background-color: #ececec">-
                                <br><select style="width: 100%;font-size: small">
                                    <option> Pilih Jurnal</option>
                                    <option> REPUBLIKA BUDAYA</option>
                                    <option> BERKALA SAINTEK</option>
                                    <option> E-JOURNAL LENTERA HUKUM</option>
                                    <option> E-JOURNAL PUSTAKA KESEHATAN</option>
                                    <option> BERKALA ILMIAH PERTANIAN</option>
                                    <option> E-JOURNAL EKONOMI BISNIS DAN AKUNTANSI UNIVERSITAS JEMBER</option>
                                    <option> JURNAL EDUKASI UNIVERSITAS JEMBER</option>
                                    <option> E-SOSPOL</option>
                                    <option> Jurnal Lain</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[Dosen Pembimbing]
                                <br>

                                <p style="font-size: small"><b>Persetujuan Revisi Tugas Akhir</b></p></td>
                            <?php
                            if ($this->status < 13) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[KOMBI]
                                <br>

                                <p style="font-size: small"><b>Entry Nilai Tugas Akhir</b></p></td>
                            <?php
                            if ($this->status < 14) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[REVIEWER]
                                <br>

                                <p style="font-size: small"><b>Memeriksa Artikel Ilmiah</b></p></td>
                            <?php
                            if ($this->status < 15) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="background-color: #ececec;font-size: 90%">[Mahasiswa]
                                <br><label class="custom-file-upload"">
                                <input type="file" style="display:none;"/><span style="font-size:small">Upload File Revisi Artikel Ilmiah</span>
                                </label></td>
                            <?php
                            if ($this->status < 16) {
                                ?>
                                <td style="background-color: #ececec">-</td>
                            <?php } else {

                                ?>
                                <td style="background-color: #ececec">Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td style="font-size:90%">[REVIEWER]
                                <br>

                                <p style="font-size: small"><b>Persetujuan Artikel Ilmiah</b></p></td>
                            <?php
                            if ($this->status < 17) {
                                ?>
                                <td>-</td>
                            <?php } else {

                                ?>
                                <td>Selesai</td>
                                <?php
                            }
                            ?>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--row-->

<!-- akhir dari isimu -->
</body>