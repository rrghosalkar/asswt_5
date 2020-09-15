<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>form</title>
<style>
#bg{
font-size:80px;
color:red;
}


</style>
</head>
<body>
<div id="bg"><br>
<center>CEREMONY</center><br>

</div>
				<div class="container-fluid">
                <div class="row">
					<div class="col-md-6"><img src="img1.gif" width="700" height="1000"></div>
                    <div class="col-md-6">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                               <center> <h4>ALWAYS Together</h4></center>
                            </div>
							
							<div class="panel-body">
							<form id="regForm">
									<div class="form-group">
										<label for="Name">Name</label>
                                        <input type="text" class="form-control" name="Name" id="Name">
                                    </div>
									
									<div class="form-group">
										<label for="mobileNo">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobileNo" id="mobileNo">
                                    </div>
									
									<div class="form-group">
									  <label for="Address">Address:</label>
									  <textarea class="form-control" rows="5" name="Address" id="address" ></textarea>
									</div>
																	
									<div class="form-group">
										<label for="emailId">Email Id</label>
                                        <input type="email" class="form-control" name="emailId" id="emailId">
                                    </div>
							
									<div class="form-group">
										<label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="dob" >
                                    </div>
									
								<h3>Select Event</h3>
								<div class="radio">
								  <label><input type="radio" name="optradio" id="optradio"  value="Marriage Event" >Marriage Event</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="optradio" id="optradio"  value="Birthday Event">Birthday Event</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="optradio" id="optradio"  value="Party Event">Party Event</label>
								</div>
								<br>
								<h3>Select Food Type</h3>

								 <div class="checkbox">
									  <label><input type="checkbox" name="check[]" id="optcheckbox" value="Thali" >Thali</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="check[]" id="optcheckbox" value="Snacks">Snacks</label>
									</div>
									<div class="checkbox ">
									  <label><input type="checkbox"  name="check[]" id="optcheckbox" value="Drinks">Drinks</label>
									</div>
									<div class="checkbox ">
									  <label><input type="checkbox" name="check[]" id="optcheckbox"  value="Icecreams">Icecreams</label>
									</div>
									<br>
									<div class="form-group">
									<h3>Select Budget</h3>
									  <select class="form-control" id="sel1" name="Budget">
										<option>10000-25000</option>
										<option>25000-50000</option>
										<option>50000-100000</option>
										<option>More than 1lakh</option>
									  </select><br><br>	
									<div class="msg">
									
									</div>
																			
											<center><button type="submit" name="submit" id="btn" class="btn btn-primary">Submit</button></center>													
								       </div>
							</form>
							</div>
					</div>
					
				</div>
			</div>
			<!--<div class="row">
				<table id="display" border="2px" class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Mobile No</th>
						<th>Address</th>
						<th>Email</th>
						<th>DOB</th>
						<th>Event</th>
						<th>Food</th>
						<th>Budget</th>
					</tr>
				</thead>
				</table>
				<script src="script.js"></script>
			</div>-->
		</div>



    <!--
    <script>
        let details = [];
        // example {id:1592304983049, title: 'Deadpool', year: 2015}
        const adddetail = (ev)=>{
            ev.preventDefault();  //to stop the form submitting
            let detail = {
                
                Name: document.getElementById('Name').value,
                MobileNo: document.getElementById('mobileNo').value,
				address: document.getElementById('address').value,
				email: document.getElementById('emailId').value,
				dob: document.getElementById('dob').value,
				event: document.getElementById('optradio').value,
				food: document.getElementById('optcheckbox').value,
				budget: document.getElementById('sel1').value,
						
            }
				details.push(detail);
				document.forms[0].reset(); // to clear the form for the next entries
            //document.querySelector('form').reset();

            //for display purposes only
            console.warn('added' , {details} );
            let pre = document.querySelector('#msg pre');
            pre.textContent = '\n' + JSON.stringify(details, '\t', 2);

            //saving to localStorage
            localStorage.setItem('MydetailList', JSON.stringify(details) );
        }
        document.addEventListener('DOMContentLoaded', ()=>{
            document.getElementById('btn').addEventListener('click', adddetail);
        });
    </script>
-->
<script src="script.js"></script>



</body>
</html>