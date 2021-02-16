<?php
	include'header.php';

?>
<link rel="stylesheet" type="text/css" href="assets/feedback.css">

<div class="row">
                  <div class="col-md-12">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Feedback</li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="color: white;">FeedBack</h1>
			</div>
		</div><!--/.row-->
		

				<div class="panel panel-default">
					<div class="panel-heading">Daftar feedback masuk <a href="daftar_feedback.php" style="float: right;">Refresh</a> </div>
					<div class="panel-body">
						<?php
						include_once("../config/koneksi.php");
						$result = mysqli_query($koneksi,"SELECT * FROM feedback ORDER BY id DESC");	
						?>
						<table>
 						 <thead>
 						  <tr>
    					    <th>Email</th> <th>Nomor Telepon</th> <th>Saran</th> <th> Action </th>
  						  </tr>
  						  </thead>
  						  <tbody>
  						  <?php
  						  while($user_data=mysqli_fetch_array($result)){
  						  ?>
  						  <tr>
  						  	<td><?php echo $user_data['email'] ?> <br> on <br> <?php echo $user_data['tanggal'] ?></td>
  						  	<td><?php echo $user_data['no_hp'] ?></td>
  						  	<td><?php echo $user_data['pesan'] ?></td>
  						  	
  						  	<td><a href="">Posting</a> | <a href="deletefeedback.php?id=<?php echo $user_data['id'] ?>">Delete</a></td>
  						  </tr>
  						  <?php 	
  						   }
  						  ?>
  						  </tbody>

  					    </table>
						
								
						
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div></div>

		<?php
			include'footer.php';
		?>