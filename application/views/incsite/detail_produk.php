<div class="col-sm-9 padding-right">
					<?php foreach($data_produk as $row){ ?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img style="width:350px; height=281px" src="<?php echo base_url(); ?>assets/upload/<?php echo $row['foto']; ?>" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								

								  
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="<?php echo base_url(); ?>assets/site/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $row['judul']; ?></h2>
								<span>
									<span><?php echo currency_format($row['harga']); ?></span>
								</span>	
								<p><b>Dilihat:</b> <?php echo $row['counter']; ?>X</p>
								<p><b>Di Update Tanggal:</b> <?php echo date('d M Y H:i:s',strtotime($row['tgl_input_pro'])); ?></p>
								<p><b>Jumlah:</b> <?php echo $row['jumlah']; ?></p>
								<p><b>Kondisi:</b> <?php echo $row['kondisi']; ?></p>
								<p><b>Merk:</b> <?php echo $row['merk']; ?></p>
								<p><b>Keterangan:</b> <?php echo $row['ket']; ?></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<?php } ?>
					
				</div>