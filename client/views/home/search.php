<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="product_grid">

					<?php
					foreach ($SanPhams as $sp) {   ?>
						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="uploads/<?= $sp->AnhSanPham ?>" alt=""></div>
							<div class="product_extra product_new"><a href="categories.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="index.php?controller=home&action=product&Id=<?= $sp->Id ?>"><?= $sp->TenSanPham ?></a></div>
								<div class="product_price"><?= $sp->Gia ?></div>
							</div>
						</div>
						<
					<?php } ?>  



				</div>

			</div>
		</div>
	</div>
</div>
