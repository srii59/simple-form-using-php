
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">REGISTRATION FORM</h3>
		
			<br /><br />
			
				</tbody>
			</table>
		</div>	
	</div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="insert.php">
				<div class="modal-header">
					<h3 class="modal-title">Add User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Firstname</label>
							<input class="form-control" type="text" name="firstname"/>
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input class="form-control" type="text" name="lastname"/>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" name="username"/>
						</div>
						<div class="form-group">
							<label>phone</label>
							<input class="form-control" type="tel" name="phone"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="password"/>
						</div>
						<div class="form-group">
						<tr><td rowspan="2">Gender</td>  
<td><input class="form-control"type="radio" name="gender" value="Male"/>Male</td>  
<tr>  
<td><input class="form-control" type="radio" name="gender" value="Female"/>Female</td></tr>  
</tr>  
						</div>
						<div class="form-group">
							<label>language</label><br>
							<input type="checkbox" id="language1" name="language[]" value="english">
  <label for="language1"> ENGLISH</label><br>
  <input type="checkbox" id="language2" name="language[]" value="tamil">
  <label for="language2">TAMIL</label><br>
  <input type="checkbox" id="langauge3" name="language[]" value="malayalam">
  <label for="language3"> MALAYALAM</label><br><br>
							
						</div>
						<div class="form-group">
							<label>Subjects</label>
							<select name="Subjects" id="subjects">
    <option value="networks">NETWORKS</option>
    <option value="python">PYTHON</option>
    <option value="java">JAVA</option>
    <option value="datastructure">DATASTRUCTURE</option>
  </select>
						</div>
						
						
						
					</div>	
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="insert"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>	
<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Username</th>
						<th>Phone</th>
						<th>Password</th>
						<th>Gender</th>
						<th>Language</th>
						<th>Subjects</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						require 'connection.php';
						$query = $conn->prepare("SELECT * FROM `user` ORDER BY `id` DESC");
						$query->execute();
						while($fetch = $query->fetch()){
					?>
						<tr>
							<td><?php echo $fetch['firstname']?></td>
							<td><?php echo $fetch['lastname']?></td>
							<td><?php echo $fetch['username']?></td>
							<td><?php echo $fetch['phone']?></td>
							<td>******</td>
							<td><?php echo $fetch['gender']?></td>
							<td><?php echo $fetch['language']?></td>
							<td><?php echo $fetch['Subjects']?></td>
							
							
						</tr>	
					<?php
						}
					?>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
                    </body>
                    </html>