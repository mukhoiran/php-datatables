<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<!-- datatables css -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<center><h1 class="page-header">CRUD System <small>DataTables</small> </h1> </center>

				<div class="removeMessages"></div>

				<button class="btn btn-default pull pull-right" data-toggle="modal" data-target="#addMember" id="addMemberModalBtn">
					<span class="glyphicon glyphicon-plus-sign"></span>	Add Member
				</button>

				<br /> <br /> <br />

				<table class="table table-hover" id="manageMemberTable">
					<thead>
						<tr>
							<th>S.no</th>
							<th>Name</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Status</th>
							<th>Option</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

	<!-- add modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>	Add Member</h4>
	      </div>

	      <form class="form-horizontal" action="php_action/create.php" method="POST" id="createMemberForm">

	      <div class="modal-body">
	      	<div class="messages"></div>

			  <div class="form-group"> <!--/here teh addclass has-error will appear -->
			    <label for="name" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
				<!-- here the text will apper  -->
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="contact" class="col-sm-2 control-label">Contact</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="active" class="col-sm-2 control-label">Active</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="active" id="active">
			      	<option value="">~~SELECT~~</option>
			      	<option value="1">Activate</option>
			      	<option value="2">Deactivate</option>
			      </select>
			    </div>
			  </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /add modal -->

	<!-- remove modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove Member</h4>
	      </div>
	      <div class="modal-body">
	        <p>Do you really want to remove ?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" id="removeBtn">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->

	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Member</h4>
	      </div>

		<form class="form-horizontal" action="php_action/update.php" method="POST" id="updateMemberForm">

	      <div class="modal-body">

	        <div class="edit-messages"></div>

			  <div class="form-group"> <!--/here teh addclass has-error will appear -->
			    <label for="editName" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="editName" name="editName" placeholder="Name">
				<!-- here the text will apper  -->
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="editAddress" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="editAddress" name="editAddress" placeholder="Address">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="editContact" class="col-sm-2 control-label">Contact</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="editContact" name="editContact" placeholder="Contact">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="editActive" class="col-sm-2 control-label">Active</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="editActive" id="editActive">
			      	<option value="">~~SELECT~~</option>
			      	<option value="1">Activate</option>
			      	<option value="2">Deactivate</option>
			      </select>
			    </div>
			  </div>
	      </div>
	      <div class="modal-footer editMemberModal">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->

	<!-- jquery plugin -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<!-- include custom index.js -->
	<script type="text/javascript" src="custom/js/index.js"></script>

</body>
</html>
