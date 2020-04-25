                    <!-- start: page -->
                    <section role="main" class="content-body">
                    <header class="page-header">
						<h2>Tambah Menu</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('C_boss') ?>">
										<i class="fas fa-home"></i>
									</a>
                                </li>
                                <li><span>Data Master</span></li>
                                <li><span>Menu</span></li>
								<li><span>Tambah Menu</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>
                    <div class="row">
						<div class="col-lg-12">
							<form id="form" method="POST" action="<?= base_url('C_boss/proses_tambah_menu') ?>" class="form-horizontal">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title">Form Tambah Menu</h2>
										<p class="card-subtitle">
											Isi Sesuai dengan keterangan
										</p>
									</header>
									<div class="card-body">
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Kode Menu <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="text" name="id_menu" value="<?= $kodeunik ?>" class="form-control" placeholder="contoh: MN001" readonly required/>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Nama Menu <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="text" name="nama_menu" class="form-control" placeholder="contoh: Kopasus" required/>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Jenis Menu <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="text" name="jenis_menu" class="form-control" placeholder="contoh: Minuman" required/>
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-sm-3 control-label text-sm-right pt-2">Harga Menu <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="number" name="harga_menu" class="form-control" placeholder="contoh: 10000" required/>
											</div>
										</div>
									</div>
									<footer class="card-footer">
										<div class="row justify-content-end">
											<div class="col-sm-9">
												<button class="btn btn-success">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <a class="btn btn-danger" href="<?= base_url('C_boss/menu') ?>">Cancel</a>
											</div>
										</div>
									</footer>
								</section>
							</form>
                        </div>
                    </div>
                </section>