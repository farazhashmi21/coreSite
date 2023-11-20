<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Grid Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .grid-container{
            display: grid;
            grid-template-columns: auto auto auto;
            grid-template-rows: auto auto auto;
            background-color: #ff0000;
            color: #ffffff;
            column-gap: 20px;
            row-gap: 10px;
            padding: 5px;
            height: 900px;
            align-content: center;
            justify-content: center;
        }
        .grid-container > div{
            padding: 20px;
            text-align: center;
            background-color: purple;
            color: #ffffff;
        }
        .grid-container > div:hover{
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
        }
        @media screen and (min-width:428px){
            /* Iphone 12/13 Pro Max Portriate */
            .grid-container{
                background-color: green;
                color: white;
            }
            .grid-container > div{
                background-color: #fff;
                color: #000000;
            }
        }
        @media screen and (min-width: 926px){
            /* Iphone 12/13 Pro Max Landscape */
            .grid-container{
                background-color: orange;
                color: #fff;
            }
            .grid-container > div{
                background-color: #ccc;
                color: #000000;
            }
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <div>
            <p>1</p>
        </div>
        <div>
            <p>2</p>
        </div>
        <div>
            <p>3</p>
        </div>
        <div>
            <p>4</p>
        </div>
        <div>
            <p>5</p>
        </div>
        <div>
            <p>6</p>
        </div>
        <div>
            <p>7</p>
        </div>
        <div>
            <p>8</p>
        </div>
        <div>
            <p>9</p>
        </div>
    </div>
</body>
</html>