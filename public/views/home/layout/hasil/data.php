<div class="container" style="margin-top: 10px">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-bell fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            PENGUMUMAN
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>panduan/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-book-open fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            PANDUAN
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>daftar/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-user-follow fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            DAFTAR ONLINE
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>kontak/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-question fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            KONTAK
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="main-menu-panduan" style="font-family: Roboto;font-weight: 300;font-size: 18px;text-decoration: none">
                          <div class="row">
                            <div class="col-md-6">
                              <i class="icon-user-following"></i> Hasil Seleksi
                            </div>
                            <div class="col-md-6">
                                <form method="GET" action="<?php echo base_url('auth/developers/search');?>">
                                    <div class = "input-group">
                                        <input type = "text" name = "q" class = "form-control" placeholder="Cari berdasarkan NISN" autocomplete="off" id="developers">
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <span class = "input-group-btn">
                              <button class = "btn btn-default" type = "submit">
                                 <i class="fa fa-search"></i> Search
                              </button>
                           </span>
                                    </div>
                                </form>
                            </div>
                          </div>
                            <hr>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>No. Ujian</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>619</td>
                                    <td>Peserta</td>
                                    <td>Lulus</td>
                                  </tr>
                                </tbody>
                            </table>
                            <p class="pull-left">Jombang: Tangal-Bulan-Tahun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <form>
                        <div class="form-group">
                            <label for="user_id"><i class="icon-user"></i> User ID</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                        </div>
                        <button type="submit" class="btn btn-success" style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">Masuk <i class="icon-login"></i> </button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <i class="fa fa-building"></i> Alamat Kantor : <br />
                    Jl. KH. Wahab Hasbullah, Gg. PPBU No. 28, RT02/RW03, Bahrul Ulum, Tambakberas, Jombang, Jawa Timur, Indonesia
                    <br>
                    <br>
                    <i class="fa fa-phone"></i> Telephone : <br />
                    +62 321 865280
                    <br>
                    <br>
                    <i class="fa fa-envelope"></i> Alamat Email:<br />
                    madrasatuna_1953@gmail.com
                </div>
            </div>
        </div>
    </div>
</div>
