<?php
    require_once "dbConnect.php";
    require_once "items.php";

    $name = $_GET["name"];
    $itemWeight = $_POST["weight"];
    $itemLength = $_POST["length"];
    $itemWidth = $_POST["width"];
    $itemHeight = $_POST["height"];

    // conditionals just to protect it from breaking if somehow not all fields are sent by the edit form
    $myItem = new Item;
    if($itemWeight){
        $itemWeight = $myItem -> updateItemWeight($name, $itemWeight);
    }
    if($itemLength){
        $itemLength = $myItem -> updateItemLength($name, $itemLength);
    }
    if($itemWidth){
        $itemWidth = $myItem -> updateItemWidth($name, $itemWidth);
    }
    if($itemHeight){
        $itemHeight = $myItem -> updateItemHeight($name, $itemHeight);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../problem4.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    <title>Item Updated!</title>
  </head>
  <body>

    <header class="sans-serif">
      <div class="cover bg-left bg-center-l">
        <div class="pb5 pb6-m pb7-l">
          <div class="tc-l mt4 mt5-m mt6-l ph3">
            <div class = "w-75 center mb3">
              <div class="w-50 center">
                <div class = "f2"><?php echo $name;?> has been updated!</div>
                <a
                  type="button"
                  id="home"
                  class="btn btn-outline-dark ma2"
                  href="../index.php">
                    Back Home
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
    <footer class = "footer">
      Made by Colton Williams
    </footer>
</html>