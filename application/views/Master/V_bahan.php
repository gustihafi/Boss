<section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Bahan</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('C_boss') ?>">
										<i class="fas fa-home"></i>
									</a>
                                </li>
                                <li><span>Data Master</span></li>
								<li><span>Bahan</span></li>
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
						
								<h2 class="card-title">Data Bahan</h2>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<a href="<?= base_url('C_boss/tambah_bahan') ?>"><button class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button></a>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-0 text-center" id="datatable-editable">
									<thead>
										<tr>
											<th>No</th>
                                            <th>Kode Bahan</th>
                                            <th>Bahan</th>
                                            <th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
                                        <?php 
                                        $no=0;
                                        foreach($bahan as $dt):
                                            $no++;
                                        ?>
										<tr data-item-id="1">
											<td><?= $no; ?></td>
                                            <td><?= $dt['id_bahan'] ?></td>
											<td><?= $dt['nama_bahan'] ?></td>
											<td>
											<?php if($dt['status_bahan'] == 'Tersedia'){
												echo "<span class='btn btn-sm btn-success'>".$dt['status_bahan']."</span>";
											}else{
												echo "<span class='btn btn-sm btn-danger'>".$dt['status_bahan']."</span>";
											} ?>
											
											</td>
											<td class="actions">
											<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#edit<?= $dt['id_bahan']; ?>" title="Edit"><span class="fa fa-edit"></span></button>
												
											<a class="btn btn-default btn-sm" href="<?= base_url('C_boss/hapus_bahan/'.$dt['id_bahan']) ?>" onClick="return confirm('Apakah Yakin Hapus Data?')"><i class="far fa-trash-alt"></i></a>
											</td>
										</tr>
										<?php 
										include('V_edit_bahan.php');
                                        endforeach; ?>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					
				</section>
			</div> 