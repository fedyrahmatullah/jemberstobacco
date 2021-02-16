<?php
if($data['kunjungan']==1){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($data['kunjungan']==2){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($data['kunjungan']==3){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($data['kunjungan']==4){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}else if($data['kunjungan']>=5){
			echo '<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">
			<img src="images/Logo Bintang.png" height="25" width="25" alt="Logo Bintang">';
		}
echo '<font color="gold">('.$data['kunjungan'].'x kunjungan)</font>';
?>