$(document).ready(function(){

    $("form").on("submit", function(e){

        e.preventDefault();

        var numero1 = $("#numero1").val();
        var numero2 = $("#numero2").val();

        var serverObj = {numero1: numero1, numero2: numero2};
        var serverJSON = JSON.stringify(serverObj);

        console.log(serverJSON);

        $.ajax({
            type: "POST",
            url: "../Exercicio/api.php",
            data: {nums: serverJSON},
            cache: false,
            success: function(data){

                var obj = JSON.parse(data);
                $("#soma").text(obj.soma);
                console.log(obj);

            }
        });
    });
});