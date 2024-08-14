<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<div class="input-group mb-3">
  <form method='get'action="">
   <div class="input-group input-group-sm">
     <input type="text" name="kw" class="form- control">
     <div class="input-group-append">
        <button class="btn btn-success">ค้นหา<button>
</div>
</form>
<?php
   if (issert($_GET[kw])){
        $kw =$_GET['kw'];
        


   }






</body>
</html>
