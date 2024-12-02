<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBook</title>
</head>
<style>
    #bar{
        height:100px;
        background-color:#3c5a99;
        color:#d9dfeb;
        padding: 5px;
        
    }
    #signup_button{
        background-color: #42b72a;
        width: 70px;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
        float: right;
    }
    #bar2{
        background-color: white;
        width: 800px;
        font-weight: bold;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        padding-top: 50px;
        text-align: center;
    }
    #text{
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #ccc;
        padding: 4px;
        font-size: 14px;
    }
    #button{
        height: 40px;
        width: 310px;
        border-radius: 4px;
        font-weight: bold;
        padding: 4px;
        font-size: 14px;
        border: none;
        background-color: #3c5a99;
        color: white;
    }
</style>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;background-color: #e9ebee;">
    <div id="bar">
        <div style="font-size:40px;">
            Mybook | Log in
        </div>
        <div id="signup_button">
            Signup
        </div>
    </div>
    <div id="bar2">
        Log in to Mybook
        <br><br>
        <input type="text" id="text" placeholder="Email"><br><br>
        <input type="password" id="text" placeholder="Password"><br><br>
        <input type="submit" id="button" value="Log in"><br><br>
    </div>
</body>
</html>