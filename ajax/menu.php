 <form method="post" autocomplete="off" id="username" action="proses/simpan_petugas.php"  class="panel-body form-horizontal form-padding" >

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Username</label>
                        <div class="col-md-9">
                            <input type="text" name="username"   maxlength="15" class="form-control" placeholder="Masukan nama" onKeyUp="return checkInput(this);" required>
                        </div>
                    </div>
                    <!--Email Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-email-input">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" name="email" id="demo-email-input" maxlength="50" class="form-control" placeholder="Masukan email" required>
                        </div>
                    </div>
                    <!--Password-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-password-input">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" id="password1" class="form-control" placeholder="Masukan password" required>
                            <small id="pass-info" class="help-block"></small>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-password-input">Nama Petugas</label>
                        <div class="col-md-9">
                            <input type="text" name="nama_petugas" id="demo-text-input" class="form-control" placeholder="Masukan alamat" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">No Telpon</label>
                        <div class="col-md-9">
                            <input type="text" name="no_telpon" id="date" class="form-control" placeholder="Masukan tanggal lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Jenis Kelamin</label>
                        <div class="col-md-9">                                                 
                            <select  name="id_level" class="form-control" id="demo-select2" class="demo_select2 form-control" required>
                              <option value="" disabled selected>Pilih Jenis Kelamin</option>
                              <?php
                              include "../koneksi.php";
                              $query = mysqli_query($conn, "SELECT * from level");
                              while ($data=mysqli_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $data['id_level']; ?>"><?php echo $data['nama_level']; ?></option>
                            <?php } ?>

                        </optgroup>
                    </select>
                </div>

            </div>
               <div class="form-group">
                        <label for="demo-text-input level"  class="col-md-3 control-label label-control">Gambar</label><br>
                                 <div class="col-md-9">                                                 
                        <img src="../img/tour_3.jpg" alt="" id="image_upload_preview" style="height: 120px; width: 120px"><br>
                        <input type="file" class="btn btn-default btn-block" name="gambar_menu" id="inputGambar" required><br>
                    </div>
                </div>
            </div>
            <div  class="panel-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">

                        <button class="btn btn-mint btn-rounded"  name="action" type="submit">Simpan</button>
                        <button class="btn btn-warning btn-rounded" type="reset">Reset</button>

                    </div>
                </div>
            </div>
            <!--Readonly Input-->


        </form>