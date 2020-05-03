                <section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= base_url('C_boss') ?>">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row pt-4 mt-1">
						<div class="col-xl-6">
							<?= $this->session->flashdata('msg'); ?>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>