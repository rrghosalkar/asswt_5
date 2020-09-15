document.querySelector('#regForm').addEventListener('submit',e=>{
	e.preventDefault();
	console.log("hello");
	let form = document.querySelector('#regForm');
	const data = new URLSearchParams();
	for(const p of new FormData(form)){
		data.append(p[0],p[1]);
	}
	fetch('server.php',{
		method: 'POST',
		body: data
	}).then(response => response.text()).then(response=>{
		document.querySelector('.msg').innerHTML = response;
	}).catch(error => console.log(error));
});


/*
var row = 1;
var btn = document.getElementById("btn");
btn.addEventListener("click",displayDetails);

console.log("###########");

function displayDetails(){
		console.log("inside function");
	var Name = document.getElementById("Name").value;
	console.log(Name);
	var MobileNo = document.getElementById('mobileNo').value;
	console.log(MobileNo);
	var address = document.getElementById('address').value;
	console.log(address);
	var email = document.getElementById('emailId').value;
	console.log(email);
	var dob = document.getElementById('dob').value;
	console.log(dob);
	var event1 = document.getElementById('optradio').value;
	console.log(event1);
	var food = document.getElementById('optcheckbox').value;
	console.log(food);
	var budget = document.getElementById('sel1').value;
	console.log(budget);
	if (!Name || !MobileNo || !address || !email || !dob || !event1 || !food || !budget){
		alert("Please fill all the boxes");
		return;
	}
	
	 var display = document.getElementById("display");
	 console.log("display");
	 var newRow = display.insertRow(row);
	 console.log("display2");
	 var cell1 = newRow.insertCell(0);
	 var cell2 = newRow.insertCell(1);
	 var cell3 = newRow.insertCell(2);
	 var cell4 = newRow.insertCell(3);
	 var cell5 = newRow.insertCell(4);
	 var cell6 = newRow.insertCell(5);
	 var cell7 = newRow.insertCell(6);
	 var cell8 = newRow.insertCell(7);
	 
	  cell1.innerHTML = Name;
	  cell2.innerHTML = MobileNo;
	  cell3.innerHTML = address;
	  cell4.innerHTML = email;
	  cell5.innerHTML = dob;
	  cell6.innerHTML = event1;
	  cell7.innerHTML = food;
	  cell8.innerHTML = budget;
	  
	  row++;
	  
}
*/
