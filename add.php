<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #F2F2F2;
      font-family: Arial, sans-serif;
    }
    
    form {
      background-color: #FFFFFF;
      border: 1px solid #CCCCCC;
      padding: 10px;
      width: 300px;
      margin: auto;
      border-radius: 5px;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      color: #333333;
      font-weight: bold;
    }
    
    input[type="text"], input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #CCCCCC;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 16px;
      color: #333333;
      background-image: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698956-icon-111-search-512.png');
      background-repeat: no-repeat;
      background-position: right center;
      transition: border-color 0.3s ease-in-out;
    }
    
    input[type="text"]:hover, input[type="text"]:focus, input[type="file"]:hover, input[type="file"]:focus {
      border-color: #0066CC;
    }
    
    input[type="submit"] {
      background-color: #0066CC;
      color: #FFFFFF;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
    
    input[type="submit"]:hover {
      background-color: #004C99;
    }
  </style>
  <meta charset="utf-8">
  <title>Upload de fichier avec clé d'accès</title>

</head>
<body>
  <form action="https://yueag-solutions.000webhostapp.com/search/add.php" method="post" enctype="multipart/form-data">
    <label for="access_key">Clé d'accès :</label>
    <input type="text" name="access_key" id="access_key" required>
    <br>
    <label for="file">Fichier à envoyer :</label>
    <input type="file" name="file" id="file" required>
    <br>
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>
