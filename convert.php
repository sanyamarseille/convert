<html>
  <head>
    <title> convert system : result</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    converted<br><br>
  </head>
  <body>
    <?php
       if((strlen($_POST["type"]) > 0) && (strlen($_POST["string"]) > 0))
    {
    if($_POST["type"] == "url_encode"){
    $string = mb_convert_encoding($_POST["string"],$_POST["charcode"]);
    $result = urlencode($string);
    }
    elseif($_POST["type"] == "url_decode"){
    $after = urldecode($_POST["string"]);
    $tmp = htmlspecialchars($after,ENT_QUOTES,$_POST["charcode"]);
    $result = str_replace("\\r\\n","<br>",$tmp);
    }
    elseif($_POST["type"] == "base64_encode"){
    $result = base64_encode($string);
    }
    elseif($_POST["type"] == "base64_decode"){
    $after = base64_decode($_POST["string"]);
    $tmp = htmlspecialchars($after,ENT_QUOTES);
    $result = str_replace("\\r\\n","<br>",$tmp);
    }
    elseif($_POST["type"] == "rot13"){
    $string = mb_convert_encoding($_POST["string"]);
    $result = str_rot13($string);
    }
    print($result);
    }
    else
    {
    print("check type and string");
    }
    ?>
    <br><br>
    <form>
      <input type="button" value="retrun" onClick="history.back()">
    </form>
  </body>
</html>
