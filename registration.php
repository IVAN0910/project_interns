<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
    <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

<link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
</head>
<body>
<br><br><br><br><br>
    <div class="form">
    
   
<form action ="registrationback.php"method ="post">
    
        <div class ="login-card">
            
Name: <input type="text" name="name">
password : <input type="password" name="password" /><br><br>

NIN : <input type="text" name="nin" /><br><br>
Address : <input type="text" name="address" /><br><br>
Email: <input type="text" name="mail" /><br><br>


Phone number: <input type="text" name="phone" /><br><br>
Have you ever used herbal medicine?<br><br>
<input type = "radio" name = "radiod" value="YES"/>yes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "radio" name = "radiod" value="NO"/>No<br><br>
<p>
<Label>choose  your prefered language</label>

<select class ="language" name ="language"> 
    <option value ="Luganda">Luganda</option>
    <option value ="English">English</option>
    <option value ="Kiswahili">Kiswahili</option>
</select>
</p>
<input type="submit"  value="Registernow"  class ="button">
</div>
</div>
</form> 
</div>
<br><br><br><br>
</body>
</html>