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
							<th>seq</th>
							<th>ID</th>
							<th>fanme</th>
							<th>lname</th>
							<th>contact</th>
							<th>Oparator</th>
						</tr>
						<?php
							$x=1;
							foreach($output as $row) {
						 ?>

						<tr>
							<td><?php echo $x; ?></td>
							<td><?php echo $row[0]; ?></td>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td>
								<button type="button" class="btn btn-warning" onclick="getSelectMember(<?php echo $row[0]; ?>)" data-toggle="modal" data-target="#editMember">Edit</button>
								<button type="button" class="btn btn-danger" onclick="deleteMember(<?php echo $row[0]; ?>)">Delete</button>

							</td>
						</tr>
							<?php
										$x++;
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


					<form class ="form-horizontal"= method="POST" action="phplip/create.php">
						<div class="modal-body">

						<div class="from-group">
							<label class="control-label col-sm-2">ID : </label>
							<div class="col-sm-10">
								<input  type="text" class="form-control" name="id"><br>
							</div>
						</div>

						<div class="from-group">
							<label class="control-label col-sm-2">Fname : </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="fname"><br>
							</div>
						</div>

						<div class="from-group">
							<label class="control-label col-sm-2">Lname : </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="lname"><br>
							</div>
						</div>

						<div class="from-group">
							<label class="control-label col-sm-2">contact : </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="contact"><br>
							</div>
						</div>


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
		<!-- edit modal -->
		<div class ="modal fade" role="dialog" id="editMember">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						please edit member data :
					</div>


				<form class ="form-horizontal"= method="POST" action="./phplip/update.php">
					<div class="modal-body">

					<div class="from-group">
						<label class="control-label col-sm-2">ID : </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="eid" id="eid" disabled><br>
							<input  type="hidden" class="form-control" name="hid" id="hid"><br>
						</div>
					</div>

					<div class="from-group">
						<label class="control-label col-sm-2">Fname : </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="efname" id="efname"><br>
						</div>
					</div>

					<div class="from-group">
						<label class="control-label col-sm-2">Lname : </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="elname" id="elname"><br>
						</div>
					</div>

					<div class="from-group">
						<label class="control-label col-sm-2">contact : </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="econtact" id="econtact" ><br>
						</div>
					</div>


					</div>
					<div class="modal-footer">
						<input type="submit" value="SUBMIT">
						<input type="reset" value="RESET">
					</div>
				</form>
					<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
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

		<script type="text/javascript">
		function deleteMember(id){
			//alert(id);
			$.ajax({
				url: 'phplip/delete.php',
				type: 'post',
				data: {mid:id},
				success: function(response){
						alert('deleted');
						window.location.replace("http://localhost/crudExample/emem/index.php");

				}
			});
		}

		function getSelectMember(id){
			//alert(id);
			$.ajax({
				url: 'phplip/getSeletMember.php',
				type: 'post',
				data: {mid:id},
				success: function(response){
						var response = $.parseJSON(response);
						console.log('aaa');
						$("#hid").val(response.id);
						$("#efname").val(response.fname);
						$("#elname").val(response.lname);
						$("#econtact").val(response.contact);
				}
			});
		}
		</script>


	</body>
</html>
