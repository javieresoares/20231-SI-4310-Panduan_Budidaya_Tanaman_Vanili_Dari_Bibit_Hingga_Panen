<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

	  <li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='')?"":"collapsed"?>" href=".">
		  <i class="bi bi-grid"></i>
		  <span>Home</span>
		</a>
	  </li> 

		<li class="nav-item">
			<a class="nav-link <?php echo (uri_string() == 'panduan') ? "" : "collapsed" ?>" href="<?php echo base_url()?>panduan" data-bs-toggle="collapse" data-bs-target="#panduan-nav">
				<i class="bi bi-book"></i>
				<span>Panduan</span>
				<i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="panduan-nav" class="nav-content collapse <?php echo (uri_string() == 'panduan') ? "show" : "" ?>" data-bs-parent="#sidebar-nav">
				<li>
					<a href="<?= base_url('pertama') ?>">
						<i class="bi bi-circle"></i><span>Pertama</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('kedua') ?>">
						<i class="bi bi-circle"></i><span>Kedua</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('ketiga') ?>">
						<i class="bi bi-circle"></i><span>Ketiga</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('keempat') ?>">
						<i class="bi bi-circle"></i><span>Keempat</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('kelima') ?>">
						<i class="bi bi-circle"></i><span>Kelima</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('keenam') ?>">
						<i class="bi bi-circle"></i><span>Keenam</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('ketujuh') ?>">
						<i class="bi bi-circle"></i><span>Ketujuh</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url('kedelapan') ?>">
						<i class="bi bi-circle"></i><span>Kedelapan</span>
					</a>
				</li>
			</ul>
		</li>


	  	<li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='inventaris')?"":"collapsed"?>" href="<?php echo base_url()?>inventaris">
        <i class="bi bi-archive"></i>
		  <span>Inventaris</span>
		</a>
	  </li>       

      <li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='jadwal')?"":"collapsed"?>" href="<?php echo base_url()?>jadwal">
        <i class="bi bi-calendar"></i>
		  <span>Jadwal</span>
		</a>
	  </li>      

      <li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='cuaca')?"":"collapsed"?>" href="<?php echo base_url()?>cuaca">
        <i class="bi bi-cloud"></i>
		  <span>Cuaca</span>
		</a>
	  </li>      

	  <li class="nav-heading">Pages</li>

		<li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='profile')?"":"collapsed"?>" href="<?php echo base_url()?>profile">
			<i class="bi bi-person"></i>
			<span>Profile</span>
		</a>
		</li><!-- End Profile Page Nav -->

		<li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='FAQ')?"":"collapsed"?>" href="<?php echo base_url()?>FAQ">
			<i class="bi bi-question-circle"></i>
			<span>F.A.Q</span>
		</a>
		</li><!-- End F.A.Q Page Nav -->

		<li class="nav-item">
		<a class="nav-link <?php echo (uri_string()=='contact')?"":"collapsed"?>" href="<?php echo base_url()?>contact">
			<i class="bi bi-envelope"></i>
			<span>Contact</span>
		</a>
		</li><!-- End Contact Page Nav -->
	</ul>

</aside><!-- End Sidebar-->
