<!DOCTYPE html>
<html>
<head>
	<title>Crud application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#"><i class="fas fa-user-plus fa-lg"></i>Student Management System</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contact</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div class="container">
		
		<div class="row">
			<div class="col-lg-12">
				<h4 class="text-center text-danger font-weight-normal my-3">CRUD Application for Student Management System</h4>
			</div>			
		</div>
		<div class="row">
			<div class="col-lg-6">
				<h4 class="mt-2 text-primary">All Students DATA</h4>
			</div>
			<div class="col-lg-6">
				<button type="button" class="btn btn-primary m-1 float-right"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;Add New USERS</button>
				<a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Export to Excel</a>
			</div>	
		</div>
		<hr class="mt-1">
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive" id="showUser">
					<table class="table table-striped table-sm table-borbered">
						<thead>
							<tr class="text-center text-success">
								<th >ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>E-mail</th>
								<th>Phone</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=1;$i<=100;$i++): ?>
							<tr class="text-center text text-secondary">
								<td><?= $i?></td>
								<td>NO-<?=$i ?> Juwel</td>
								<td>NO-<?=$i ?> Islam</td>
								<td>email.<?= $i ?>@gmail.com</td>
								<td>MO<?=$i ?>-01318435365</td>
								<td>
									<a href="#" class="text-success" title="view-details"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
									<a href="#" class="text-primary" title="Edit"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
									<a href="#" class="text-danger" title="Delete"><i class="fas fa-trash-alt fa-lg"></i></a>
								</td>
							</tr>
						<?php endfor; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>





<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!--- font awesome --->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

<!-- datatables -->
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<!-- sweetalert2-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("table").DataTable();
	});
</script>

</body>
</html>