<div class="middle" style=" height:520px;">
	<div class="kapsa2">
	<div class="ihtiycsolmenu">
		<ul>
			<?php
			$Uye = $UyeBilgileri[0];
			if($Uye["Tip"] == 2){
			?>
			<li><a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle">Bilgierinizi Düzenleyin</a></li>
			<li><a href="<?php echo get::site(); ?>/IhtiyacEkle">Neye ihtiyacınız var. Burdan ekleyin</a></li>
			<li><a href="<?php echo get::site(); ?>/Ihtiyaclarim">Eklediğiniz ihtiyaçlarınız</a></li>
			<li><a href="<?php echo get::site(); ?>/RezerveEttiginizPaylasimlar">Rezerve Ettiğiniz Paylaşımlar</a></li>
			<?php
			}
			else if($Uye["Tip"] == 3){
			?>
			<li><a href="<?php echo get::site(); ?>/Profil/BilgileriDuzenle">Bilgierinizi Düzenleyin</a></li>
			<li><a href="<?php echo get::site(); ?>/PaylasimEkle">Ne paylaşmak istiyorsunuz</a></li>
			<li><a href="<?php echo get::site(); ?>/Paylasimlarim">Eklediğiniz paylaşımlarınız</a></li>
			<li><a href="<?php echo get::site(); ?>/RezerveEdilenPaylasimlar">Rezerve Edilen Paylaşımlar</a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<div class="ihtiycicerik">  
	<table>
		<tr><td>Başlık</td><td>Düzenle</td><td>Sil</td></tr>
		<?php
			foreach($Ihtiyaclar as $ihtiyac){
			?>
			<tr><td><?php echo $ihtiyac["Baslik"]; ?></td><td><a href="<?php echo get::site(); ?>/Ihtiyaclarim/Duzenle/<?php echo $ihtiyac["IhtiyacId"]; ?>">Düzenle</a></td><td><a href="<?php echo get::site(); ?>/Ihtiyaclarim/Sil/<?php echo $ihtiyac["IhtiyacId"]; ?>">Sil</a></td></tr>
			<?php
			}
		?>
	</table>
	</div>
</div>
</div>
<section>
	
</section>