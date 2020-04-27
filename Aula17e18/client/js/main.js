$(document).ready(function(){  

        $.ajax({
            type: "GET",
            url: "server/index.php",
            cache: false,
            success: function(data){
                var obj = JSON.parse(data);

                $("#usersList").append("<br>");
                $.each(obj, function(key, value){
                    console.log(value);
                    var userID = document.createElement("div");
                    userID.innerHTML = "ID Utilizador: " + value.userID;
                    var name = document.createElement("div");
                    name.innerHTML = "Nome: " + value.primeiroNome + " "+ value.ultimoNome;
                    var email = document.createElement("div");
                    email.innerHTML = "Email: " + value.email;

                    $("#usersList").append(userID);
                    $("#usersList").append(name);
                    $("#usersList").append(email);
                });
            }
        });
});