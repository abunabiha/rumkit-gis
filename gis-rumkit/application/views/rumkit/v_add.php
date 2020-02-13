<div class="col-lg-7">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Lokasi Rumah Sakit
                                </div>
                                <div class="panel-body">
                                    <?= $map['html'];?>
                                </div>
                                
                            </div>
                        </div>

<div class="col-lg-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Input Data Rumah Sakit
                                </div>
                                <div class="panel-body">
                                    <!-- Form input data -->
                                <?php echo form_open('rumkit/input');?>
                                     <div class="form-group">
                                                    <label>Nama Rumah Sakit</label>
                                                    <input class="form-control" name="nama_rumkit" placeholder="Nama Rumah Sakit" required>
                                                   
                                     </div>

                                <div class="form-group">
                                                    <label>No Telpon</label>
                                                    <input class="form-control" name="no_telpon" placeholder="No Telpon" required>
                                                   
                                     </div>

                                     <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input class="form-control" name="alamat" placeholder="Alamat Rumah Sakit" required>
                                                   
                                     </div>

                                     <div class="form-group">
                                                    <label>Latitude</label>
                                                    <input class="form-control" name="latitude" placeholder="latitude" required readonly>
                                                   
                                     </div>

                                     <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input class="form-control" name="longitude" placeholder="Longitude" required readonly>
                                                   
                                     </div>

                                     <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
</div>
                                    <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-sn">Submit</button>
                                                <button type="reset" class="btn btn-success btn-sn">Reset</button>
                                                  </div>
                                <?php echo form_close() ?>
                                    <!-- end input data -->
                                </div>
                                
                            </div>
                        </div>