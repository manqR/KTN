
<?php
	use frontend\models\Kontak;
	use frontend\models\Aboutus;
	
	$kontak = Kontak::find()
				->One();      

	$about = Aboutus::find()
			->where(['kategori'=>'profile'])
			->One();
?>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Get in Touch</span>
			</div>
			<div class="col-lg-6">
				<div class="newsletter">
					<h4>Tentang Kami</h4>
					<?= $about->short_description ?>				

					<!-- <div class="alert alert-success d-none" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>

					<div class="alert alert-danger d-none" id="newsletterError"></div>					 -->
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="contact-details">
					<h4>Hubungi Kami</h4>
					<ul class="contact">
						<li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> <?= $kontak->alamat ?></p></li>
						<li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> <?= $kontak->tlp ?></p></li>
						<li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="<?= $kontak->email ?>"><?= $kontak->email ?></a></p></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="<?= $kontak->facebook ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li class="social-icons-twitter"><a href="<?= $kontak->twitter ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="<?= $kontak->linkedin ?>" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-7">
					<p>© Copyright PT Karya Timur Nusantara <?= date('Y'); ?>. All Rights Reserved.</p>
				</div>
				<div class="col-lg-4">
					<nav id="sub-menu">
						<ul>
							<li><a href="page-faq.html">FAQ's</a></li>
							<li><a href="sitemap.html">Sitemap</a></li>
							<li><a href="contact-us.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>