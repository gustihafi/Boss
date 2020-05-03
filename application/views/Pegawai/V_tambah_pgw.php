                    <!-- start: page -->
                    <section role="main" class="content-body">
                    <header class="page-header">
						<h2>Tambah Pegawai</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('C_boss') ?>">
										<i class="fas fa-home"></i>
									</a>
                                </li>
                                <li><span>Pegawai</span></li>
								<li><span>Tambah Pegawai</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>
                    <div class="row">
						<div class="col-lg-12">
							<form id="form" method="POST" action="<?= base_url('C_boss/proses_tambah_pgw') ?>" class="form-horizontal">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title">Form Tambah Pegawai</h2>
										<p class="card-subtitle">
											Isi Sesuai dengan keterangan
										</p>
									</header>
									<div class="card-body">
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">ID Pegawai <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="text" name="id_pegawai" class="form-control" value="<?= $kode ?>" readonly required/>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Nama Panjang <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="text" name="nama_pegawai" class="form-control" placeholder="contoh: Muhammad Thayib" required/>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Jenis Kelamin <span class="required">*</span></label>
											<div class="col-sm-6">
                                                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" required/>
                                                <label for="laki">Laki-Laki</label>
                                            <br>
                                                <input type="radio" id="per" name="jenis_kelamin" value="Perempuan" required/>
                                                <label for="per">Perempuan</label>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Alamat <span class="required">*</span></label>
											<div class="col-sm-6">
												<textarea name="alamat" class="form-control" placeholder="contoh: Jl. Monaroh" required></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Email <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="email" name="email" class="form-control" placeholder="contoh: thayibramadhan@gmail.com" required/>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Telpon <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="number" name="telpon" class="form-control" placeholder="contoh: 0811288999" required/>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Password <span class="required">*</span></label>
											<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-lock"></i>
														</span>
													</span>
													<input type="password" name="password" class="form-control" placeholder="********" required/>
												</div>
											</div>
											<!-- <div class="col-sm-9">

											</div> -->
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Level</label>
											<div class="col-sm-6">
												<select id="states" name="level" data-plugin-selectTwo class="form-control populate" title="Pilih Level" required>
													<option selected="selected" disabled="">Pilih Level</option>
													<option value="Kasir">Kasir</option>
													<option value="Dapur">Dapur</option>
													<option value="Pelayan">Pelayan</option>
												</select>
											</div>
                                        </div>
									</div>
									<footer class="card-footer">
										<div class="row justify-content-end">
											<div class="col-sm-9">
												<button class="btn btn-success">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <a class="btn btn-danger" href="<?= base_url('C_boss/pegawai') ?>">Cancel</a>
											</div>
										</div>
									</footer>
								</section>
							</form>
                        </div>
                    </div>
                </section>