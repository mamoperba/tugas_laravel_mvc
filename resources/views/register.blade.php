<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form>
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname">
      </form>
    <br>
      <form>
        <label for="gd">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </form>

      <p>Nationality:</p>

<form>
  <select id="nation" name="nationality">
    <option value="Indonesia">indonesia</option>
    <option value="Jepang">Jepang</option>
    <option value="Italia" selected>Italia</option>
    <option value="Holland">Holland</option>
  </select>
</form>

    <p>Language Spoken:</p>
<form>
    <input type="checkbox" id="bi" name="bi" value="bi">
    <label for="bi">  Bahasa Indonesia</label><br>
    <input type="checkbox" id="bi2" name="bi2" value="english">
    <label for="bi2"> English</label><br>
    <input type="checkbox" id="bi3" name="bi3" value="other">
    <label for="bi3"> Other</label>
  </form>

    <p>Bio:</p>
    <form action="/welcome">
        <textarea rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit" value="Sign Up">
      </form>
      
    
   

    
    
</body>
</html>