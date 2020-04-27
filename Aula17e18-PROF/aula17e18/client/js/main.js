$(document).ready(function(){

	$.ajax({
		type: "GET",
		url: "../../server/index.php",
		cache: false,
		success: function(data){ 
			var obj = JSON.parse(data);	
			$("#usersList").append("<br>");
			$.each(obj, function(key, value){
				console.log(value);
				var userID = document.createElement("div");
				userID.innerHTML = "User ID: " + value.userID;
				var name = document.createElement("div");
				name.innerHTML = "Name: " + value.primeiroNome + " "+ value.ultimoNome;
				var anoNascimento = document.createElement("div");
				anoNascimento.innerHTML = "Idade: " + value.anoNascimento;

				$("#usersList").append(userID);
				$("#usersList").append(name);
				$("#usersList").append(anoNascimento);
				$("#usersList").append("<br>");
			});
		}
	});

});