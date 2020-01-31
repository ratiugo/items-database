<?php
    require_once "itemManagement/dbConnect.php";
    require_once "itemManagement/items.php";

    $name = $_POST["name"];
    $itemWeight = $_POST["weight"];
    $itemLength = $_POST["length"];
    $itemWidth = $_POST["width"];
    $itemHeight = $_POST["height"];

    $myItem = new Item;

    if($name){
    $myItem -> createNewItem($name, $itemWeight, $itemLength, $itemWidth, $itemHeight);
    }

    $getAllItems = new Item;
    $allItems = $getAllItems -> getAllItems();

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./problem4.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    <title>Hey Di Di Co</title>
  </head>

  <!-- update the list of items any time the home page is loaded -->
  <body onload = "updateItemList()">

    <!-- get all items in the database, and add the name/link to the dropdown menu -->
    <script type="text/javascript">
      function updateItemList(){

        //database items by name
        let allNames = <?php echo $allItems; ?>;

        //for each name, append <a></a> tag with relevant class, href, and id attributes to the dropdown menu
        allNames.forEach(function(name){
          $("#dropdown-menu").append("<a class=\"dropdown-item\" href=\"itemDisplay.php?name="+name+"\"id="+name+">"+name+"</a>");
        });
      }
    </script>

    <header class="sans-serif">
      <div class="cover bg-left bg-center-l">
        <div class="pb5 pb6-m pb7-l">
          <div class="tc-l mt4 mt5-m mt6-l ph3">

            <h1 class="f2 f1-l fw2 black-90 mb0 lh-title">
              Item Storage
            </h1>

            <h2 class="fw1 f3 black-80 mt3 mb4 w-50 center">
              Please select any item from the dropdown menu below to view and edit its details, or create a new item from scratch.
            </h2>

            <div class="btn-group w-25">
              <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Items
              </button>
              <div class="dropdown-menu w-100">
                <div id = "dropdown-menu">
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./createItem.php">Create New Item</a>
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