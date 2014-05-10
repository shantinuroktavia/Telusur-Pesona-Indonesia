<div class="container" id="notifikasi">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo $pesan;?><br/>
			<a href="<?php echo site_url(($redirdest=='HomeUI')?"":$redirdest);?>">
                        <?php echo $redirdest=='HomeUI'?"Ke halaman utama":"Kembali"?>
                        </a>
		</div>
	</div>
</div>
