fetch('fetchjson.php').then((res)=> res.json())
.then(response => {
	console.log(response);
	let output='';
	for(let i in response)
	{
		output += `<tr>
			<td>${response[i].id}</td>
			<td>${response[i].name}</td>
			<td>${response[i].mobileno}</td>
			<td>${response[i].address}</td>
			<td>${response[i].eventtype}</td>
			<td>${response[i].foodtype}</td>
			<td>${response[i].budget}</td>
			<td>${response[i].foodtype}</td>
			<td>${response[i].email}</td>
			</tr>`;
	}
	document.querySelector('.tbody').innerHTML = output;
}).catch(error =>console.log(error));