	<nav class="navigation-bar dark">
		<nav class="navigation-bar-content container">
			<a href="index.php" class="element"><span class="icon-home"></span> BERANDA &trade;</a>
			<span class="element-divider"></span>

			<a class="element1 pull-menu" href="#"></a>
			<ul class="element-menu">
				<li>
					<a class="" href="tampildata.php">DAFTAR PAKET PESANAN</a>
				</li>
				<li>
					<a class="" href="galeri.php">GALERI</a>
				</li>



				<!-- -------------------------MENU KANAN---------------------------- -->

				<a class="element place-right" href="http://facebook.com/anastasiadpp">
					<span class="icon-facebook" style="background: white;
						   color: black;
						   padding: 3px;
						   border-radius: 50%">
					</span>
				</a>
				<a class="element place-right" href="https://twitter.com/anastasyadpp">
					<span class="icon-twitter" style="background: white;
						   color: black;
						   padding: 3px;
						   border-radius: 50%">
					</span>
				</a>
				<a class="element place-right" href="https://plus.google.com/u/0/115730609418530213638">
					<span class="icon-google-plus" style="background: white;
						   color: black;
						   padding: 3px;
						   border-radius: 50%">
					</span>
				</a>
				<a class="element place-right" href="https://instagram.com/anastasiadpp">
					<span class="icon-instagram" style="background: white;
						   color: black;
						   padding: 3px;
						   border-radius: 50%">
					</span>
				</a>
				<a class="element place-right" href="http://anastasiadpp.blog.gravicodev.id">
					<span class="icon-wordpress" style="background: white;
						   color: black;
						   padding: 3px;
						   border-radius: 50%">
					</span>
				</a>

				<?php session_start();

				if (isset($_SESSION['username'])) {
				?>
					<span class="element-divider place-right"></span>
					<div class="element place-right">
						<a class="dropdown-toggle icon-cog" href="#"></a>
						<ul class="dropdown-menu" data-role="dropdown">
							<li><a href="profil.php">Profil</a></li>
							<li><a href="booking.php">Booking</a></li>
							<li><a href="bookingList.php">Cek Booking</a></li>
							<li class="divider"></li>
							<li><a href="logout.php">Keluar</a></li>
						</ul>
					</div>
					<a href="profil.php" class="element place-right">Selamat datang, <?php echo "$_SESSION[username]"; ?></a>

				<?php
				} else {
				?>

				<?php
				}
				?>

			</ul>
		</nav>
	</nav>

	<?php
	include "chat.php";
	?>