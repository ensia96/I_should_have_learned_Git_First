<html>
    <head>
        <title>Button Test</title>
        <style>
        #test_btn1 {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            margin-right:-3.1px;
        }
        #test_btn2 {
            margin-left:-3.1px;
            margin-right:-3.1px;
        }
        #test_btn3 {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            margin-left:-3.1px;
        }
        #btn_group button {
            border: 1px solid gray;
            background-color: rgba(0,0,0,0);
            color: gray;
            padding: 5px;
            }
        .butt button:hover {
            color:white;
            background-color:gray;
        }
        </style>
    </head>
    <body>
        <div class="butt">
            <button id="test_btn1">테스트1</button>
            <button id="test_btn2">테스트2</button>
            <button id="test_btn3">테스트3</button>
        </div>
    </body>
</html>