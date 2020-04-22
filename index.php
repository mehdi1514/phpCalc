<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
    </head>
    <body>
    <form action="">
        <div class="container">
            <div class="row">
                <div class="col s3" id="o1container">
                    <input type="text" name="num1" placeholder="Number 1" style="color: white;">
                </div>
                <div class="col s3" id="op2container">
                    <input type="text" name="num2" placeholder="Number 2" style="color: white;">
                </div>
                <div class="col s2">
                    <p><font color="white" size="6">=</font></p>
                </div>
                <div class="col s4" id="resultcontainer">
                    <p style="color: white; font-size: 20px">
                        <?php
                            if(isset($_GET['add'])){
                                $num1 = $_GET['num1'];
                                $num2 = $_GET['num2'];
                                echo $num1 + $num2;
                            }
                            else if(isset($_GET['subtract'])){
                                $num1 = $_GET['num1'];
                                $num2 = $_GET['num2'];
                                echo $num1 - $num2;
                            }
                            else if(isset($_GET['multiply'])){
                                $num1 = $_GET['num1'];
                                $num2 = $_GET['num2'];
                                echo $num1 * $num2;
                            }
                            else if(isset($_GET['divide'])){
                                $num1 = $_GET['num1'];
                                $num2 = $_GET['num2'];
                                echo $num1 / $num2;
                            }
                        ?>
                    </p>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col s3">
                    <button class="waves-effect waves-light btn black" name="add" type="submit" value="add">add</button>
                </div>
                <div class="col s3">
                    <button class="waves-effect waves-light btn black" name="subtract" type="submit" value="subtract">Subtract</button>
                </div>
                <div class="col s3">
                    <button class="waves-effect waves-light btn black" name="multiply" type="submit" value="multiply">Multiply</button>
                </div>
                <div class="col s3">
                    <button class="waves-effect waves-light btn black" name="divide" type="submit" value="divide">Divide</button>
                </div>
            </div>
        </div>
    </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>