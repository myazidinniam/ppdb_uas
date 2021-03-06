<div class="container" style="margin-top: 10px">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-8">
            <?php $this->load->view('home/part/menu') ?>
            <div class="col-md-12">
                <?php
                $attributes = array('id' => 'frm_login');
                echo form_open_multipart('daftar?source=send&feedback&utf8=✓', $attributes)
                ?>
                <div class="card">
                    <div class="card-content">
                        <h4>A. KETERANGAN CALON PESERTA DIDIK</h4>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <!-- Pilih kelas sd -->
                                <div class="col-md-3">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>
                                    SD/MI <input type="radio" onclick="pilih_sd();" name="asal_sekolah" value="SD/MI" id="yes_sd">
                                    <?php echo form_error('asal_sekolah'); ?>
                                </div>
                                <div class="col-md-3">

                                    <label> PENDAFTARAN KELAS
                                        <span class="required" style="color: red">*</span></label>
                                    <div id="form_sd" style="display: none">
                                        <select class="form-control" id="select_sd">
                                            <?php
                                            foreach($kelas_sd->result_array() as $sd)
                                            { 
                                             ?>
                                                <option><?php echo $sd['nama_kelas'] ?></option>
                                          <?php  }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Pilih Kelas smp -->
                                <div class="col-md-3">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>
                                    SMP/MTsN <input type="radio" value="SMP/MTsN" onclick="pilih_smp();" name="asal_sekolah" id="yes_smp">
                                    <?php echo form_error('asal_sekolah'); ?>
                                </div>
                                <div class="col-md-3">
                                    <label> PENDAFTARAN KELAS
                                        <span class="required" style="color: red">*</span></label>
                                    <div id="form_smp" style="display: none">
                                        <select class="form-control" id="select_smp">
                                            <?php
                                            foreach($kelas_smp->result_array() as $smp)
                                            { 
                                             ?>
                                                <option><?php echo $smp['nama_kelas'] ?></option>
                                          <?php  }
                                            ?>
                                        </select>
                                    </div>
                                    <?php echo form_error('pendaftaran_kelas'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap"> NAMA LENGKAP <i>(Sesuai Ijazah) <span class="required"</span></i></label>
                            <input type="text" class="form-control" id="nama_lengkap"
                                   value="<?php echo set_value('nama') ?>" name="nama"
                                   placeholder="Masukkan Nama Lengkap" style="border-radius: 0px" required>
                            <?php echo form_error('nama'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin"> JENIS KELAMIN <span class="required" style="color: red">*</span></label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?php echo form_error('jenis_kelamin'); ?>
                        </div>
                        <div class="form-group">
                            <label for="NISN"> NISN <i>(Nomor Induk Siswa Nasional) <span class="required"style="color: red">*</span></i></label>
                            <input type="text" class="form-control" id="nisn" name="nisn"
                                   value="<?php echo set_value('nisn') ?>"
                                   placeholder="Masukkan NISN" style="border-radius: 0px" required>
                            <?php echo form_error('nisn'); ?>
                        </div>
                        <div class="form-group">
                            <label for="NIK"> NIK <i>(Nomor Induk Kependudukan) <span class="required"style="color: red">*</span></i></label>
                            <input type="text" class="form-control" id="NIK" name="nik"
                                   value="<?php echo set_value('nik') ?>" placeholder="Masukkan NIK"
                                   style="border-radius: 0px" required>
                            <?php echo form_error('nik'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tempat"> Tempat Lahir <span class="required" style="color: red">*</span></label>
                            <input type="text" class="form-control" id="tempat" name="tempat_lahir"
                                   value="<?php echo set_value('tempat_lahir') ?>"
                                   placeholder="Masukkan Tempat Lahir" style="border-radius: 0px" required>
                            <?php echo form_error('tempat_lahir'); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal <span class="required"style="color: red">*</span></label>
                                    <select class="form-control" name="tanggal_lahir" id="tanggal" required>
                                        <option value="">-- Pilih --</option>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                        <option value='9'>9</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                        <option value='13'>13</option>
                                        <option value='14'>14</option>
                                        <option value='15'>15</option>
                                        <option value='16'>16</option>
                                        <option value='17'>17</option>
                                        <option value='18'>18</option>
                                        <option value='19'>19</option>
                                        <option value='20'>20</option>
                                        <option value='21'>21</option>
                                        <option value='22'>22</option>
                                        <option value='23'>23</option>
                                        <option value='24'>24</option>
                                        <option value='25'>25</option>
                                        <option value='26'>26</option>
                                        <option value='27'>27</option>
                                        <option value='28'>28</option>
                                        <option value='29'>29</option>
                                        <option value='30'>30</option>
                                        <option value='31'>31</option>
                                    </select>
                                    <?php echo form_error('tanggal_lahir'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bulan">Bulan <span class="required"
                                                                   style="color: red">*</span></label>
                                    <select style="" class="form-control" name="bulan_lahir" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                    <?php echo form_error('bulan_lahir'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tahun">Tahun <span class="required"
                                                                   style="color: red">*</span></label>
                                    <select class="form-control" name="tahun_lahir" id="tahun" required>
                                        <option value="">-- Pilih --</option>
                                        <option value='1990'>1990</option>
                                        <option value='1991'>1991</option>
                                        <option value='1992'>1992</option>
                                        <option value='1993'>1993</option>
                                        <option value='1994'>1994</option>
                                        <option value='1995'>1995</option>
                                        <option value='1996'>1996</option>
                                        <option value='1997'>1997</option>
                                        <option value='1998'>1998</option>
                                        <option value='1999'>1999</option>
                                        <option value='2000'>2000</option>
                                        <option value='2001'>2001</option>
                                        <option value='2002'>2002</option>
                                        <option value='2003'>2003</option>
                                        <option value='2004'>2004</option>
                                        <option value='2005'>2005</option>
                                        <option value='2006'>2006</option>
                                        <option value='2007'>2007</option>
                                        <option value='2008'>2008</option>
                                        <option value='2009'>2009</option>
                                        <option value='2010'>2010</option>
                                        <option value='2011'>2011</option>
                                        <option value='2012'>2012</option>
                                        <option value='2013'>2013</option>
                                        <option value='2014'>2014</option>
                                        <option value='2015'>2015</option>
                                        <option value='2016'>2016</option>
                                        <option value='2017'>2017</option>
                                    </select>
                                    <?php echo form_error('tahun_lahir'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anak_ke"> Anak Ke</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="anak_ke" placeholder="Jumlah"
                                               name="anak_ke" value="<?php echo set_value('anak_ke') ?>"
                                               style="border-radius: 0px">
                                        <?php echo form_error('anak_ke'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label style="margin-top: 7px;"> Dari</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="anak_ke" placeholder="Jumlah"
                                               name="jumlah_anak_ke" value="<?php echo set_value('jumlah_anak_ke') ?>"
                                               style="border-radius: 0px">
                                        <?php echo form_error('jumlah_anak_ke'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label style="margin-top: 7px;"> Bersaudara</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="saudara_kandung"> Jumlah Saudara Kandung </label>
                            <input type="text" class="form-control" id="saudara_kandung" name="jumlah_saudara_kandung"
                                   value="<?php echo set_value('jumlah_saudara_kandung') ?>"
                                   placeholder="Saudara Kandung" style="border-radius: 0px">
                            <?php echo form_error('jumlah_saudara_kandung'); ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jumlah Adik </label>
                                        <input type="text" name="jumlah_adik"
                                               value="<?php echo set_value('jumlah_adik') ?>" placeholder="Jumlah"
                                               class="form-control"
                                               style="border-radius: 0px">
                                        <?php echo form_error('jumlah_adik'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Jumlah Kakak </label>
                                    <input type="text" name="jumlah_kakak"
                                           value="<?php echo set_value('jumlah_kakak') ?>" placeholder="Jumlah"
                                           class="form-control"
                                           style="border-radius: 0px">
                                    <?php echo form_error('jumlah_kakak'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Asrama <i>(Bagi yang Tinggal Dipondok)</i></label>
                            <select class="form-control" name="asrama" required>
                            <?php
                                foreach($data_asrama->result() as $asrama)
                                { 
                                 ?>
                                    <option value="<?php echo $asrama->nama_asrama ?>"><?php echo $asrama->nama_asrama ?></option>
                              <?php  }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nomor Kartu Keluarga <i>(KK) <span class="required"                                                                      style="color: red">*</span></i></label>
                            <input type="text" placeholder="Nomor Kartu Keluarga" class="form-control" name="kk"
                                   value="<?php echo set_value('kk') ?>"
                                   style="border-radius: 0px" required>
                            <?php echo form_error('kk'); ?>
                        </div>
                        <div class="form-group">
                            <label>Nomor KIP/KPH <i>(*Jika Ada)</i></label>
                            <input type="text" placeholder="Nomor KIP/KPH" class="form-control" name="kip_pkh"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label>No. Telp./HP yang bisa dihubungi</label>
                            <input type="text" placeholder="No Hp/Telp" class="form-control" name="no_hp"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nama Madrasah Asal <i>(*Disertai Kota Madrasah) <span
                                                        class="required" style="color: red">*</span></i></label>
                                        <input type="text" placeholder="Nama Madrasah" name="madrasah_asal"
                                               value="<?php echo set_value('madrasah_asal') ?>"
                                               class="form-control" style="border-radius: 0px" required>
                                        <?php echo form_error('madrasah_asal'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Kota <span class="required" style="color: red">*</span></label>
                                    <input type="text" placeholder="Kota/Kabupaten" name="kota_madrasah"
                                           value="<?php echo set_value('kota_madrasah') ?>" class="form-control"
                                           style="border-radius: 0px" required>
                                    <?php echo form_error('kota_madrasah'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor NPSN <span class="required" style="color: red">*</span></label>
                            <input type="text" placeholder="No NPSN" class="form-control" name="npsn"
                                   value="<?php echo set_value('npsn') ?>"
                                   style="border-radius: 0px">
                            <?php echo form_error('npsn'); ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Seri Ijazah</label>
                                        <input type="text" placeholder="No Seri Ijazah" name="no_ijazah"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nomor Seri SKHUN atau SHUN</label>
                                    <input type="text" placeholder="No Seri SKHUN/SHUN" name="no_skhun"
                                           class="form-control" style="border-radius: 0px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Peserta Ujian Nasional </label>
                                <input type="text" placeholder="No UN" name="no_un"
                                       value="<?php echo set_value('no_un') ?>" class="form-control"
                                       style="border-radius: 0px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h4 style="margin-top: 30px">B. KETERANGAN BAKAT DAN MINAT CALON PESERTA DIDIK</h4>
                        <hr>
                        <div class="form-group">
                            <label> Hobi</label>
                            <input type="text" class="form-control" name="hobi" placeholder="Masukkan Hobi Anda"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Bidang Studi yang Paling Digemari</label>
                            <input type="text" class="form-control" name="bidang_studi_digemari"
                                   placeholder="Masukkan Bidang Studi Anda" style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Bakat yang Dimiliki</label>
                            <input type="text" class="form-control" name="bakat_dimiliki"
                                   placeholder="Masukkan Bakat Anda"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Olahraga yang Paling Digemari</label>
                            <input type="text" class="form-control" name="olahraga_digemari"
                                   placeholder="Masukkan Olahraga yang Digemari" style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Cita-cita</label>
                            <input type="text" class="form-control" name="cita_cita"
                                   placeholder="Masukkan Cita-cita Anda" style="border-radius: 0px">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h4 style="margin-top: 30px">C. KETERANGAN ORANG TUA KANDUNG</h4>
                        <hr>
                        <div class="form-group">
                            <label> Nama Lengkap <span class="required" style="color: red">*</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>a. Ayah <i>(Sesuai Dengan Ijazah Siswa) </i></label>
                                    <br/>
                                    <label style="padding-top:30px">b. Ibu </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_ayah" value="<?php echo set_value('nama_ayah') ?>"
                                           placeholder="Masukkan Nama Lengkap Ayah" style="border-radius: 0px" required>
                                    <?php echo form_error('nama_ayah'); ?>
                                    <br/>
                                    <input type="text" class="form-control" name="nama_ibu" value="<?php echo set_value('nama_ibu') ?>"
                                           placeholder="Masukkan Nama Ibu" style="border-radius: 0px" required>
                                    <?php echo form_error('nama_ibu'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Nomor KTP/NIK <span class="required" style="color: red">*</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>a. Ayah </label>
                                    <br/>
                                    <label style="padding-top:30px">b. Ibu </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="no_ktp_ayah" value="<?php echo set_value('no_ktp_ayah') ?>"
                                           placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px" required>
                                    <?php echo form_error('no_ktp_ayah'); ?>
                                    <br/>
                                    <input type="text" class="form-control" name="no_ktp_ibu" value="<?php echo set_value('no_ktp_ibu') ?>"
                                           placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px" required>
                                    <?php echo form_error('no_ktp_ibu'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <ins>Pekerjaan</ins>
                                &
                                <ins>Pendidikan</ins>
                                
                            </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>a. Ayah </label>
                                    <br/>
                                    <label style="padding-top:30px">b. Ibu </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo set_value('pekerjaan_ayah') ?>"
                                           placeholder="Masukkan Pekerjaan Ayah" style="border-radius: 0px">
                                    <br>
                                    <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo set_value('pekerjaan_ibu') ?>"
                                           placeholder="Masukkan Pekerjaan Ibu" style="border-radius: 0px">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="pendidikan_ayah">
                                        <option value="SD/MI">SD/MI</option>
                                        <option value="SLTP/MTs" >SLTP/MTs</option>
                                        <option value="SMU/SMA" > SMU/SMA</option>
                                        <option value="SARJANA" > SARJANA</option>
                                        <option value="PASCASARJANA" > PASCASARJANA</option>
                                    </select>
                                    <br>
                                     <select class="form-control" name="pendidikan_ibu">
                                        <option value="SD/MI">SD/MI</option>
                                        <option value="SLTP/MTs" >SLTP/MTs</option>
                                        <option value="SMU/SMA" > SMU/SMA</option>
                                        <option value="SARJANA" > SARJANA</option>
                                        <option value="PASCASARJANA" > PASCASARJANA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Alamat Tempat Tinggal <i>(Sesuai KK) <span class="required"
                                                                               style="color: red">*</span></i></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jln Dsn.</label>
                                        <input type="text" class="form-control" name="jln_dsn" value="<?php echo set_value('jln_dsn') ?>"
                                               placeholder="Masukkan Jalan Dusun " style="border-radius: 0px" required>
                                        <?php echo form_error('jln_dsn'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control" name="rt" style="border-radius: 0px" value="<?php echo set_value('rt') ?>"
                                               placeholder="RT" required>
                                        <?php echo form_error('rt'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control" name="rw" style="border-radius: 0px" value="<?php echo set_value('rw') ?>"
                                               placeholder="RW" required>
                                        <?php echo form_error('rw'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Desa.</label>
                                        <input type="text" class="form-control" name="desa" placeholder="Desa" value="<?php echo set_value('desa') ?>"
                                               style="border-radius: 0px" required>
                                        <?php echo form_error('desa'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kec.</label>
                                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo set_value('kecamatan') ?>"
                                               style="border-radius: 0px" required>
                                        <?php echo form_error('kecamatan'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kab.</label>
                                        <input type="text" class="form-control" name="kabupaten" value="<?php echo set_value('kabupaten') ?>"
                                               placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px" required>
                                        <?php echo form_error('kabupaten'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode POS</label>
                                        <input type="text" class="form-control" name="kode_pos" value="<?php echo set_value('kode_pos') ?>"
                                               placeholder="Masukkan Kode POS " style="border-radius: 0px" required>
                                        <?php echo form_error('kode_pos'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Aceh"> Aceh</option>
                                            <option value="Bali"> Bali</option>
                                            <option value="Banten"> Banten</option>
                                            <option value="Bengkulu"> Bengkulu</option>
                                            <option value="Gorontalo"> Gorontalo</option>
                                            <option value="Jakarta"> Jakarta</option>
                                            <option value="Jambi"> Jambi</option>
                                            <option value="Jawa Barat"> Jawa Barat</option>
                                            <option value="Jawa Tengah"> Jawa Tengah</option>
                                            <option value="Jawa Timur"> Jawa Timur</option>
                                            <option value="Kalimantan Barat"> Kalimantan Barat</option>
                                            <option value="Kalimat Selatan"> Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah"> Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur"> Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulaesi Utara">Sulawesi Utara</option>
                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                        </select>
                                        <?php echo form_error('alamat_provinsi'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Penghasilan Rata-rata Perbulan</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>a. Ayah </label>
                                    <br/>
                                    <label style="padding-top:30px">b. Ibu </label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="penghasilan_ayah">
                                        <option value="">-- Pilih --</option>
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                    </select>
                                    <br>
                                    <select class="form-control" name="penghasilan_ibu">
                                        <option value="">-- Pilih --</option>
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Keterangan Dan Nomor HP <span class="required" style="color: red">*</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>a. Ayah </label>
                                    <br/>
                                    <label style="padding-top:50px">b. Ibu </label>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Keterangan</label>
                                        <select class="form-control" name="keterangan_ayah" required>
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal Dunia">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label>Nomor HP Orang Tua</label>
                                            <input type="text" class="form-control" name="no_hp_ayah" value="<?php echo set_value('no_hp_ayah') ?>"
                                                   placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Keterangan</label>
                                        <select class="form-control" name="keterangan_ibu" required>
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal Dunia">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Nomor HP Orang Tua</label>
                                        <input type="text" class="form-control" name="no_hp_ibu" value="<?php echo set_value('no_hp_ibu') ?>"
                                               placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h4 style="margin-top: 30px">D. KETERANGAN WALI ( <i>diisi jika point <strong>C</strong> tidak
                                diisi</i> )</h4>
                        <hr>
                        <div class="form-group">
                            <label> Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_wali">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin_wali"> JENIS KELAMIN</label>
                            <select id="jenis_kelamin_wali" class="form-control" name="jenis_kelamin_wali">
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor KK Wali</label>
                                        <input type="text" placeholder="Nomor KK Wali" name="no_kk_wali"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nomor KTP Wali</label>
                                    <input type="text" placeholder="Nomor KTP Wali" name="no_ktp_wali"
                                           class="form-control" style="border-radius: 0px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" placeholder="Pekerjaan" name="pekerjaan_wali"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Pendidikan</label>
                                    <input type="text" placeholder="Pendidikan" name="pendidikan_wali"
                                           class="form-control" style="border-radius: 0px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Alamat Tempat Tinggal <i>(Sesuai KK)</i></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jln Dsn.</label>
                                        <input type="text" class="form-control" name="jl_dsn_wali"
                                               placeholder="Masukkan Jalan Dusun " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control" name="rt_wali"
                                               style="border-radius: 0px" placeholder="RT">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control" name="rw_wali"
                                               style="border-radius: 0px" placeholder="RW">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Desa.</label>
                                        <input type="text" class="form-control" name="desa_wali" placeholder="Desa"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kec.</label>
                                        <input type="text" class="form-control" name="kecamatan_wali"
                                               placeholder="Kecamatan"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kab.</label>
                                        <input type="text" class="form-control" name="kabupaten_wali"
                                               placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode POS</label>
                                        <input type="text" class="form-control" name="kode_pos_wali"
                                               placeholder="Masukkan Kode POS " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi_wali">
                                            <option value="">-- Pilih --</option>
                                            <option value="Aceh"> Aceh</option>
                                            <option value="Bali"> Bali</option>
                                            <option value="Banten"> Banten</option>
                                            <option value="Bengkulu"> Bengkulu</option>
                                            <option value="Gorontalo"> Gorontalo</option>
                                            <option value="Jakarta"> Jakarta</option>
                                            <option value="Jambi"> Jambi</option>
                                            <option value="Jawa Barat"> Jawa Barat</option>
                                            <option value="Jawa Tengah"> Jawa Tengah</option>
                                            <option value="Jawa Timur"> Jawa Timur</option>
                                            <option value="Kalimantan Barat"> Kalimantan Barat</option>
                                            <option value="Kalimat Selatan"> Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah"> Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur"> Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulaesi Utara">Sulawesi Utara</option>
                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label> Penghasilan Rata-rata Perbulan</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="penghasilan_wali">
                                        <option value="">-- Pilih --</option>
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo $img;?>
                            <input type="text" class="form-control" name="captcha"
                                   placeholder="Masukkan Kode Keamanan diatas"
                                   style="border-radius: 0px;margin-top: 5px">
                            <?php echo form_error('captcha'); ?>
                        </div>
                        <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Sending..." class="btn btn-sending btn-success btn-md" style="border-radius: 0px;-webkit-box-shadow: 0 2px 2px rgba(0,0,0,0.2);-moz-box-shadow: 0 2px 2px rgba(0,0,0,0.2);box-shadow: 0 2px 2px rgba(0,0,0,0.2);transition-duration: .2s;transition-timing-function: cubic-bezier(.4,0,.2,1);transition-property: max-height,box-shadow;">Daftar <i class="fa fa-send"></i> </button>
                        <button type="reset" class="btn btn-warning btn-md" style="border-radius: 0px;-webkit-box-shadow: 0 2px 2px rgba(0,0,0,0.2);-moz-box-shadow: 0 2px 2px rgba(0,0,0,0.2);box-shadow: 0 2px 2px rgba(0,0,0,0.2);transition-duration: .2s;transition-timing-function: cubic-bezier(.4,0,.2,1);transition-property: max-height,box-shadow;">Reset <i class="fa fa-repeat"></i></button>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>

        </div>
        <div class="col-md-4">
            <?php $this->load->view('home/part/sidebar') ?>
        </div>
    </div>
</div>
