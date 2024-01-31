<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/kirim" method="post">
      @csrf
      <label>First name:</label><br>
      <input type="text" name="name"><br><br>
      <label>Last name:</label><br>
      <input type="text" name="lastname"><br><br>
      
      <label>Gender:</label><br>
      <input type="radio">Male<br>
      <input type="radio">Famale<br>
      <input type="radio">Other<br><br>
      
      <label>Nationality:</label><br>
      <select name="Nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Singapore">Singapore</option>
        <option value="Malaysia">Malaysia</option>
      </select><br><br>

      <label>Language Spoken:</label><br><br>
      <input type="checkbox" name="language">Bahasa Indonesia<br>
      <input type="checkbox" name="language">English<br>
      <input type="checkbox" name="language">Other<br><br>

      <label>Bio:</label><br><br>
      <textarea name="Bio" rows="10" cols="30"></textarea><br><br>
      <input type="submit" value="kirim">
      
</body>
</html>