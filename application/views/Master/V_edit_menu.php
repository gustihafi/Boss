                    
                                                            <!-- Start Modal -->
                                                            <!-- Modaledit -->
                                                    <div id="edit<?= $dt['id_menu'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog modal-lg">
                                                    <!-- konten modal-->
                                                    <div class="modal-content">
                                                        <!-- heading modal -->
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Edit Menu</h4>
                                                        </div>
                                                        <!-- body modal -->
                                                        <div class="modal-body">
                                                        <form method="POST" action="<?= site_url('C_boss/proses_edit_menu') ?>" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Kode Menu <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="id_menu" value="<?= $dt['id_menu'] ?>" class="form-control" readonly required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Nama Menu <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="nama_menu" value="<?= $dt['nama_menu'] ?>" class="form-control" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Jenis Menu <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="jenis_menu" value="<?= $dt['jenis_menu'] ?>" class="form-control" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Harga Menu <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="harga_menu" value="<?= $dt['harga_menu'] ?>" class="form-control" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 control-label text-sm-right pt-2">Foto Menu <span class="required">*</span></label>
                                                            <div class="col-sm-6">
                                                                <img width="100px" src="<?php echo base_url('images/').$dt['foto'] ?>" class="img-md"> <br><br>
                                                                <input type="file" name="foto" class="form-control" />
                                                                <input type="hidden" name="old_foto" value="<?= $dt['foto'] ?>">
                                                                *Hanya ekstensi .jpg, .png, .jpeg <br>
                                                                *Jika tidak ingin ganti foto tidak usah upload
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