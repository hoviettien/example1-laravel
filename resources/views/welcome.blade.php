<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 100%;
            height: 700px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form{
            width: 30%;
            height: 300px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            border-radius: 5px;
        }
        .top{
            width: 100%;
            height: 40%;
            display: flex;
            justify-content: space-around;
        }
        .bottom{
            width: 100%;
            height: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .left{
            width: 30%;
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;

        }
        .right{
            width: 60%;
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        button{
            width: 30%;
            height: 80%;
            background-color: yellow;
            color: red;
            border-radius: 10px;
            font-size: 20px;
        }
        .button:hover{
            background-color: red;
            color: white;
            font-size: 25px;
            box-shadow: 0 0 5px 5px grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form" type="post">
            <div class="top">
                <div class="left">
                    <span id="number1"><b>Number 1</b></span>
                    <span id="number2"><b>Number 2</b></span>
                    <span id="total"><b>Total</b></span>
                </div>
                <div class="right">
                    <input type="text" name="so1">
                    <input type="text" name="so2">
                    <input type="total" >
                </div>
            </div>
            <div class="bottom">
                <button class="button" type="Submit">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>