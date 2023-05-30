<?php
@include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Document</title>


    <Script>
        function pesquisar(search) {
            $.ajax({
                type: "post",
                url: "testePesquisa2.php?search=" + search,
                success: function(response) {
                    $('#resultado').html(response);
                }
            });
        }
    </Script>
</head>

<body>
    <div class="pesquisa">
        <input type="text" id="txtPesquisa" onkeyup="pesquisar(this.value)" placeholder="Pesquisa">
    </div>

    <div id="resultado">

    </div>
</body>

</html>