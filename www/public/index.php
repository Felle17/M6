<!DOCTYPE html>
<html lang = 'sv'>
<head>
  <meta charset="UTF-8">
  <title>Sök länder</title>
  include('showCountries.php');
</head>
<body>
 
<form method="post" action="showCountries.php">
    <label>Land: </label>
    <input type="text" name="country" size="20">
    
    <input type="submit" value="Submit" name="Sök">
</form>
 
</body>
</html>