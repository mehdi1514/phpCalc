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
    <!-- We could have also use element.style.property to add values to the properties of body and container.
        In my PC it wasn't working for some reason.
    -->
    </head>
    <body>
        <form action="">
            <div class="container" id="container">
                <div class="row">
                    <div class="col s3" id="o1container">
                        <!--This child will be built by javascript. The code is at the end-->
                    </div>
                    <div class="col s3" id="o2container">
                        <!--This child will be built by javascript. The code is at the end-->
                    </div>
                    <div class="col s2" id="opcontainer">
                        <!--This child will be built by javascript. The code is at the end-->
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
                    <div class="col s3" id="addbtncontainer">
                        <!--This child will be built by javascript. The code is at the end-->
                    </div>
                    <div class="col s3" id="subtractbtncontainer">
                        <!--This child will be built by javascript. The code is at the end-->
                    </div>
                    <div class="col s3" id="multiplybtncontainer">
                        <!--This child will be built by javascript. The code is at the end-->
                    </div>
                    <div class="col s3" id="dividebtncontainer">
                        <!--This child will be built by javascript. The code is at the end-->
                    </div>
                </div>
            </div>
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            // operator 1
            var o1 = document.getElementById("o1container");
            var o1input = document.createElement("INPUT");
            o1input.setAttribute("type", "text");
            o1input.setAttribute("name", "num1");
            o1input.setAttribute("placeholder", "Number 1");
            o1input.setAttribute("style", "color: white;");
            o1.appendChild(o1input);

            //operator 2
            var o2 = document.getElementById("o2container");
            var o2input = document.createElement("INPUT");
            o2input.setAttribute("type", "text");
            o2input.setAttribute("name", "num2");
            o2input.setAttribute("placeholder", "Number 2");
            o2input.setAttribute("style", "color: white;");
            o2.appendChild(o2input);

            // '=' container
            var op = document.getElementById("opcontainer");
            var para = document.createElement("P");
            var fontTag = document.createElement("FONT");
            fontTag.innerHTML = "=";
            fontTag.setAttribute("size", "6");
            fontTag.setAttribute("color", "white");
            para.appendChild(fontTag);
            op.appendChild(para);

            // add button
            var addbtncontainer = document.getElementById("addbtncontainer");
            var addbtn = document.createElement("BUTTON");
            addbtn.setAttribute("class", "waves-effect waves-light btn black");
            addbtn.setAttribute("name", "add");
            addbtn.setAttribute("type", "submit");
            addbtn.setAttribute("value", "add");
            addbtn.innerHTML = 'ADD';
            addbtncontainer.appendChild(addbtn);

            // subtract button
            var subtractbtncontainer = document.getElementById("subtractbtncontainer");
            var subtractbtn = document.createElement("BUTTON");
            subtractbtn.setAttribute("class", "waves-effect waves-light btn black");
            subtractbtn.setAttribute("name", "subtract");
            subtractbtn.setAttribute("type", "submit");
            subtractbtn.setAttribute("value", "subtract");
            subtractbtn.innerHTML = 'SUBTRACT';
            subtractbtncontainer.appendChild(subtractbtn);

            // multiple button
            var multiplybtncontainer = document.getElementById("multiplybtncontainer");
            var multiplybtn = document.createElement("BUTTON");
            multiplybtn.setAttribute("class", "waves-effect waves-light btn black");
            multiplybtn.setAttribute("name", "multiply");
            multiplybtn.setAttribute("type", "submit");
            multiplybtn.setAttribute("value", "multiply");
            multiplybtn.innerHTML = 'MULTIPLY';
            multiplybtncontainer.appendChild(multiplybtn);

            // divide button
            var dividebtncontainer = document.getElementById("dividebtncontainer");
            var dividebtn = document.createElement("BUTTON");
            dividebtn.setAttribute("class", "waves-effect waves-light btn black");
            dividebtn.setAttribute("name", "divide");
            dividebtn.setAttribute("type", "submit");
            dividebtn.setAttribute("value", "divide");
            dividebtn.innerHTML = 'DIVIDE';
            dividebtncontainer.appendChild(dividebtn);

        </script>
    </body>
</html>