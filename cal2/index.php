<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cal {
            width: 400px;
			height: auto;
			background: black;
			color: white;
			padding: 40px;
			margin: auto;
            margin-top: 20px;
            border-radius: 20px;
        }
        .display{
            width: 100%;
			height: 60px;
			text-align: right;
			margin-bottom: 20px;
			background: black;
			border: 1px solid yellow;
			color: white;
			font-size: 26px;
			padding-left: 10px;
        }
        .button_box {
            height: 60px;
			width: 60px;
			background: white;
			margin-left: 10px;
			margin-bottom: 20px;
			border: 1px solid yellow;
			border-radius: 5px;
			background: black;
			color: white;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="cal">
            <input type="text" class="display" readonly id="display">
            <br>
            <input type="button" value="C" class="button_box">
            <input type="button" value="%" class="button_box">
            <input type="button" value="back" class="button_box">
            <input type="button" value="/" class="button_box">
            <br>
            <input type="button" value="1" class="button_box">
            <input type="button" value="2" class="button_box">
            <input type="button" value="3" class="button_box">
            <input type="button" value="*" class="button_box">
            <br>
            <input type="button" value="4" class="button_box">
            <input type="button" value="5" class="button_box">
            <input type="button" value="6" class="button_box">
            <input type="button" value="-" class="button_box">

            <br>
            <input type="button" value="7" class="button_box">
            <input type="button" value="8" class="button_box">
            <input type="button" value="9" class="button_box">
            <input type="button" value="+" class="button_box">

            <br>
            <input type="button" value="0" class="button_box">
            <input type="button" value="00" class="button_box">
            <input type="button" value="." class="button_box">
            <input type="button" value="equal" class="button_box">
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript">

    $(document).ready(function(){

        $('.button_box').click(function(){

            var val1 = $(this).val();

            $.ajax({
                type:"POST",
                url:"cal_ajax.php",
                data:{'val1':val1},

                success:function(res){
                    $('#display').val(res);
                }
                
            })

        })
    })
</script>