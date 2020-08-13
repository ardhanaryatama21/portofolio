<?php foreach($portofolio as $pt) : ?>
<header class="section-page header-index" id="home">
	<div class="container">
		<img class="img-rectangle d-none d-lg-block" src="<?= base_url()?>assets/rectangle-partikel.svg" alt="partikel">
		<div class="row justify-content-center header-flex">
			<div class="col-md-6 col-12 my-auto">
				<div class="desc-layout mt-4">
					<img class="rectangle" src="<?= base_url()?>assets/rectangle.svg" alt="">
					<h1 class="txt-nama-header"><?= $pt['nama'];?></h1>
					<p class="txt-desc-header my-2"><?= $pt['deskripsi'];?></p>
				</div>
				<a class="btn btn-hire mt-2" href="#">Hire Me!</a>
			</div>
			<div class="col-md-6 col-12 text-center">
				<div class="layout-img-jumbo">
					<img class="img-jumbo" src="<?= base_url()?>assets/jumbo.svg" alt="">
					<!-- <img class="ellipse" src="<?= base_url()?>assets/ellipse.svg" alt="">
					<img class="ellipse2" src="<?= base_url()?>assets/ellipse.svg" alt="">
					<img class="ellipse3" src="<?= base_url()?>assets/ellipse.svg" alt=""> -->
				</div>
			</div>
		</div>
	</div>
</header>
<section class="section-page section-skills" id="skills">
	<img class="img-partikel d-none d-lg-block" src="<?= base_url()?>assets/partikel.svg" alt="partikel">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h1 class="txt-title">My Skills</h1>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<div class="card">
					<div class="row">
						<div class="col-md-5 col-4 no-pd text-center">
							<img class="img-html" src="<?= base_url()?>assets/html.svg" alt="HTML">
						</div>
						<div class="col-md-7 col-8 no-pd">
							<div class="txt-desc-skill">
								<h3>HTML</h3>
								<p>description</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<div class="card">
					<div class="row">
						<div class="col-md-5 col-4 no-pd text-center">
							<img class="img-js" src="<?= base_url()?>assets/js.svg" alt="Javascript">
						</div>
						<div class="col-md-7 col-8 no-pd">
							<div class="txt-desc-skill">
								<h3>Javascript</h3>
								<p>description</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<div class="card">
					<div class="row">
						<div class="col-md-5 col-4 no-pd text-center">
							<img class="img-css" src="<?= base_url()?>assets/css.svg" alt="CSS">
						</div>
						<div class="col-md-7 col-8 no-pd">
							<div class="txt-desc-skill">
								<h3>CSS</h3>
								<p>description</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<div class="card">
					<div class="row">
						<div class="col-md-5 col-4 no-pd text-center">
							<img class="img-bootstrap" src="<?= base_url()?>assets/bootstrap.svg" alt="Bootstrap">
						</div>
						<div class="col-md-7 col-8 no-pd">
							<div class="txt-desc-skill">
								<h3>Bootstrap</h3>
								<p>description</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12 mt-4">
				<div class="card">
					<div class="row">
						<div class="col-md-5 col-4 no-pd text-center">
							<img class="img-php" src="<?= base_url()?>assets/php.svg" alt="PHP">
						</div>
						<div class="col-md-7 col-8 no-pd">
							<div class="txt-desc-skill">
								<h3>PHP</h3>
								<p>description</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img class="img-rectangle" src="<?= base_url()?>assets/rectangle-partikel.svg" alt="partikel">
</section>
<section class="section-hire">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-12">
				<h2 class="txt-hireme">Interested Working With Me?</h2>
			</div>
			<div class="col-12 mt-3">
				<a class="btn btn-project mx-1">See All Project</a>
				<a class="btn btn-hireme mx-1">Hire Me!</a>
			</div>
		</div>
		<img class="img-rectangle d-none d-lg-block" src="<?= base_url()?>assets/rectangle-partikel.svg" alt="partikel">
	</div>
</section>
<section class="section-page section-tools" id="tools">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h1>Tools For My Work</h1>
				<div class="layout-tools">
					<img class="ic_figma m-3" src="<?= base_url()?>assets/Figma.svg" alt="Figma">
					<img class="ic_xd m-3" src="<?= base_url()?>assets/xd.svg" alt="XD">
					<img class="ic_photoshop m-3" src="<?= base_url()?>assets/photoshop.svg" alt="Adobe Photoshop">
					<img class="ic_illustrator m-3" src="<?= base_url()?>assets/illustrator.svg"
						alt="Adobe Illustrator">
					<img class="ic_vscode m-3" src="<?= base_url()?>assets/vscode.svg" alt="Visual Studio Code">
				</div>
			</div>
		</div>
	</div>
</section>
<?php endforeach; ?>
