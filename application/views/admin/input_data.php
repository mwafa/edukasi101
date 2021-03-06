<!-- SELECT `kategori` AS 'Kategori', count(*) AS '#' FROM `user` WHERE `username` = "dudung" GROUP BY `kategori` WITH ROLLUP -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card card-body mailbox">
            <h5 class="card-title">Daftar Kelas</h5>
            <div class="message-center ps ps--theme_default ps--active-y" data-ps-id="a045fe3c-cb6e-028e-3a70-8d6ff0d7f6bd">
                <!-- Message -->
                <a href="#">
                    <div class="btn btn-primary btn-circle">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="mail-contnet">
                        <h5>Kelas X</h5>
                        <span class="mail-desc">IPA</span>
                        <span class="time">Jumlah Siswa: 46</span>
                    </div>
                </a>

                <!-- Message -->
                <a href="#">
                    <div class="btn btn-primary btn-circle">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="mail-contnet">
                        <h5>Kelas X</h5>
                        <span class="mail-desc">IPS</span>
                        <span class="time">Jumlah Siswa: 46</span>
                    </div>
                </a>

                <!-- Message -->
                <a href="#">
                    <div class="btn btn-primary btn-circle">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="mail-contnet">
                        <h5>Kelas XII</h5>
                        <span class="mail-desc">IPA</span>
                        <span class="time">Jumlah Siswa: 46</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Upload Data Siswa</h5>
                <label for="upload-file">Mendukung format file
                    <code>.xlsx</code>
                </label>
                <form action="" method="post" class="form-horizontal form-material">
                    <input type="file" id="input-file-disable-remove" data-allowed-file-extensions="xlsx" class="dropify" data-show-remove="false">
                    <label for="contoh-file">
                        Contoh file <code>.xlsx</code> dapat diunduh <a href="#">disini</a>.
                    </label>
                    <hr>
                    <button class="btn btn-success">Upload Data</button>

                </form>
            </div>
        </div>
    </div>
</div>