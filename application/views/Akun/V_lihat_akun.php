                <section role="main" class="content-body">
					<header class="page-header">
						<h2>Akun</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('C_boss') ?>">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Akun</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>

                    <!-- start: page -->
                    <section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
						
								<h2 class="card-title">Data Akun</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a href="<?= base_url('C_boss/tambah_akun') ?>"><button class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button></a>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0" id="datatable-editable">
									<thead>
										<tr>
											<th>No</th>
											<th>Username</th>
											<th>Level</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
                                        <?php 
                                        $no=0;
                                        foreach($akun as $dt):
                                            $no++;
                                        ?>
										<tr data-item-id="1">
											<td><?= $no; ?></td>
											<td><?= $dt['username'] ?></td>
											<td><?= $dt['level'] ?></td>
											<td class="actions">
											<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#edit<?= $dt['id_user']; ?>" title="Edit"><span class="fa fa-edit"></span></button>
												
											<a class="btn btn-default btn-sm" href="<?= base_url('C_boss/hapus_akun/'.$dt['id_user']) ?>" onClick="return confirm('Apakah Yakin Hapus Data?')"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<?php 
										include('V_edit.php');
                                        endforeach; ?>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					
				</section>
			</div> 