<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="designs.css">
    <title>Misteryo</title>
</head>
<body>
    <div class="wrapper">
        <h2>Misteryo</h2>
        <form id="form">
            <div class="inputBox">
                <label for="msg">zdnpl will never know who sent this comment.</label>
                <br>
                <textarea id="msg" placeholder="Type your comment..." required></textarea>
            </div>
            <button id="btn"> Send </button>
        </form>
        <hr>
        <div class="content" id="content">
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            }

            loadData();

            $("#btn").on("click", function(e){
                e.preventDefault();
                var msg = $("#msg").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            console.log("Success");
                            $("#form").trigger("reset");
                        }else {
                            console.log("Error");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>