<!DOCTYPE html>
<html>
	<head>
		<title>CRUD SYSTEM</title>

		<!-- bootstrap css -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- datatables css -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

	</head>
	<body>
		<!--<a href="https://www.facebook.com/" class="btn btn-info" role="button">Link Button</a>
		<br><br>-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>My first bootstrap</h1>
					<button type="button" class="btn" data-toggle="modal" data-target="#adMember">
						ENTER
					</button>
					<button type="button" class="btn btn-danger">Danger</button>
					<?php
						require('./phplip/retrieve.php');
					?>
					<table class = "table">
						<tr>
							<th>ID</th>
							<th>fanme</th>
							<th>lname</th>
							<th>contact</th>
						</tr>
						<?php
							foreach($output as $row) {
						 ?>

						<tr>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
						</tr>
							<?php
									}
							 ?>

					</table>

				</div>
			</div>
		<div>
		<div class ="modal fade" role="dialog" id="adMember">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						please enter member data :
					</div>
				<form method="POST" action="phplip/create.php">
					<div class="modal-body">
						ID : <input type="text" name="id"><br>
						Fname : <input type="text" name="fname"><br>
						Lname : <input type="text" name="lname"><br>
						contact : <input type="text" name="contact"><br>

					</div>
					<div class="modal-footer">
						<input type="submit" value="SUBMIT">
						<input type="reset" value="RESET">
					</div>
				</form>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>

		<?php
			//include('php_action/retrieve.php');
		?>
		<!--<div class="container">
			<h1>Button</h1>
			<button type="button" >Basic</button><br />
			<button type="button" class="btn btn-success">Basic</button>
		</div>

		<!-- jquery plugin -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- bootstrap js -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- datatables js -->
		<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



	</body>
</html>
