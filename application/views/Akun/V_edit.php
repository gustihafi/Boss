                    
                                                            <!-- Start Modal -->
                                                            <!-- Modaledit -->
                                                    <div id="edit<?= $dt['id_user'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog modal-lg">
                                                    <!-- konten modal-->
                                                    <div class="modal-content">
                                                        <!-- heading modal -->
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Edit Akun</h4>
                                                        </div>
                                                        <!-- body modal -->
                                                        <div class="modal-body">
                                                        <form method="POST" action="<?= site_url('C_boss/proses_edit_akun') ?>">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Email <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <!-- id_user -->
                                                                <input type="hidden" name="id_user" value="<?= $dt['id_user'] ?>" class="form-control" placeholder="contoh: thayibramadhan" required/>
                                                                <!-- username -->
                                                                <input type="email" name="email" value="<?= $dt['email'] ?>" class="form-control" placeholder="contoh: thayibramadhan" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Password Baru </label>
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="fas fa-lock"></i>
                                                                        </span>
                                                                    </span>
                                                                    <input type="password" name="pwd_baru" class="form-control" placeholder="********" />
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-sm-9">

                                                            </div> -->
                                                        </div>
                                                        <div class="form-group row">                                        
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Password Lama <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                    <div class="switch switch-sm switch-success">
                                                                        <input type="checkbox" name="pwd_lama" value="<?= $dt['password'] ?>" data-plugin-ios-switch />
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Level</label>
                                                            <div class="col-sm-6">
                                                                <select id="states" name="level" data-plugin-selectTwo class="form-control populate" title="Pilih Level" required>
                                                                    <option value="">Pilih Level</option>
                                                                    <option value="Admin" <?php if($dt['level'] == "Admin"){ echo "selected";} ?>>Admin</option>
                                                                    <option value="Kasir" <?php if($dt['level'] == "Kasir"){ echo "selected";} ?>>Kasir</option>
                                                                    <option value="Dapur" <?php if($dt['level'] == "Dapur"){ echo "selected";} ?>>Dapur</option>
                                                                    <option value="Pelayan" <?php if($dt['level'] == "Pelayan"){ echo "selected";} ?>>Pelayan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- footer modal -->
                                                    <div class="modal-footer">
                                                    <input type="submit" class="btn btn-success mr-2" name="simpan" value="Simpan">
                                                    
                                                    <button type="reset" class="btn btn-default">Reset</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button> 
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>