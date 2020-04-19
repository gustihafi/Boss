                    
                                                            <!-- Start Modal -->
                                                            <!-- Modaledit -->
                                                            <div id="edit<?= $dt['id_meja'] ?>" class="modal fade" role="dialog">
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
                                                        <form method="POST" action="<?= site_url('C_boss/proses_edit_meja') ?>">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Nomer Meja <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <!-- id_user -->
                                                                <input type="hidden" name="id_meja" value="<?= $dt['id_meja'] ?>" class="form-control" placeholder="contoh: thayibramadhan" required/>
                                                                <!-- username -->
                                                                <input type="text" name="nomer_meja" value="<?= $dt['nomer_meja'] ?>" class="form-control" placeholder="contoh: thayibramadhan" required/>
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