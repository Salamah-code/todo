<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>

    <style>
body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}


/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}



/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 40%;
  padding: 10px;
  float: left;
  font-size: 16px;
  background-color:#d9d9d9;
}

/* Style the "Add" button */
.addBtn {
  padding:10px;
  width: 8%;
  background: #d9d9d9;
  color: #555;
  margin-left:20px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

</style>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
    <header >
        <menu style='background-color:purple; width:100%; height:70px;' >
            <h2 style='color:white'>Sala TODO</h2>
        </menu>
</header>
</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">JavaScript - Simple Create, Read, Update, Delete Function</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<div id="create"  style="margin:center;">
				<form action="javascript:void(0);" method="POST" class="form-group" onsubmit="Create()">
					<label>My To Do List:</label>
                    <br>
					<input type="text" id="name" class="form-control"/>
					
					<button type="submit" class="addBtn"><span class="glyphicon glyphicon-plus"></span> Create</button>
				</form>
			</div>
            </div>
            <br><br><br>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">	
					<tr>
						<th>ELEMENT</th>
						<th>ACTIION</th>
					</tr>
				</thead>
				<tbody id="member_list"></tbody>
			</table>
		</div>
	</div>

    <script>
        var el = document.getElementById('member_list');
var names = [];
 
displayAll();
editHider();
 
function displayAll() {
	var data = '';
	if (names.length > 0) {
		for (i = 0; i < names.length; i++) {
			data += '<tr>';
			data += '<td>' + names[i] + '</td>';
			data += '<td colspan="2"><center><button class="btn btn-warning" onclick="Edit(' + i + ')"><span class="glyphicon glyphicon-edit"></span> Edit</button> | <button class="btn btn-danger" onclick="Delete(' + i + ')"><span class="glyphicon glyphicon-trash"></span> Delete</button></center></td>';
			data += '</tr>';
		}
	}
 
	el.innerHTML = data;
};
 
 
function Create() {
    var el = document.getElementById('name')
	var name = el.value;
	if (name) {
		names.push(name.trim());
		el.value = '';
		displayAll();
	}
	displayAll();
};
 
function Delete(item) {
	names.splice(item, 1);
	displayAll();
 
};
 
function Edit(item) {
	var el = document.getElementById('edit_name');
	el.value = names[item];
	document.getElementById('edit').style.display = 'inline';
	document.getElementById('create').style.display = 'none';
	self = this;
 
	document.getElementById('update').onsubmit = function() {
	var name = el.value;
		if (name) {
			self.names.splice(item, 1, name.trim());
			self.displayAll();
			editHider();
			document.getElementById('create').style.display = 'inline';
		}
	}
};
 
 
function editHider() {
	document.getElementById('edit').style.display = 'none';
	document.getElementById('create').style.display = 'inline';
}
 
    </script>
</body>
</html>
