<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RBNA</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>

<body>
<?php header("cache-control: no-cache"); ?>

  <form action="teste.php" method="post" name="form_cliente" id="form_cliente">
    <div class="label_div">Type a keyword : </div>
    <div class="input_container">
      <input name="cliente" type="text"  id="country_id"  placeholder="Nome Fantasia do Cliente" onkeyup="autocomplet()" />
      <ul id="country_list_id">
      </ul>
    </div>
    
  </form>

<!-- container -->
</body>
</html>
