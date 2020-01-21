<?php
  require_once "itemManagement/dbConnect.php";
  require_once "itemManagement/items.php";
  $name = $_GET["name"];
  $myItem = new Item;

  $itemWeight = $myItem -> getItemWeight($name);
  $itemLength = $myItem -> getItemLength($name);
  $itemWidth = $myItem -> getItemWidth($name);
  $itemHeight = $myItem -> getItemHeight($name);
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./problem4.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    <title>Item Display</title>
  </head>
  <!-- set the post url of the edit form any time the display page is loaded -->
  <body onload = "setURLParam()">

    <!-- set the action attribute of the form post url to match the relevant item name -->
    <script type="text/javascript">
      function setURLParam(){
        let name = "<?php echo $name;?>";
        let formActionURL = "itemManagement/updateItem.php?name="+name;
        document.getElementById("editForm").setAttribute("action", formActionURL);
      }
    </script>

    <header class="sans-serif">
      <div class="cover bg-left bg-center-l">
        <a
          type="button"
          class="btn btn-outline-dark ma2"
          href="./index.php">
            Home
        </a>
        <div class="pb5 pb6-m pb7-l">
          <div class="tc-l mt4 mt5-m mt6-l ph3">

            <div class = "w-75 center mb3">
              <div class="w-50 center">
                <div class = "f2"><?php echo $name;?></div>
              </div>
                <div class = "row">
                  <div class="col">
                    <div class = "f3">Weight (kg)</div>
                    <div>
                      <?php echo $itemWeight;?>
                    </div>
                  </div>
                  <div class="col">
                    <div class = "f3">Length (cm)</div>
                    <div>
                      <?php echo $itemLength;?>
                    </div>
                  </div>
                  <div class="col">
                    <div class = "f3">Width (cm)</div>
                    <div>
                      <?php echo $itemWidth;?>
                    </div>
                  </div>
                  <div class="col">
                    <div class = "f3">Height (cm)</div>
                    <div>
                      <?php echo $itemHeight;?>
                    </div>
                  </div>
                </div>
            </div>

            <form
              id = "editForm"
              class = "w-75 center mt5"
              action = ""
              method = "post">

              <div class="w-50 center">
                <div class = "f2">Edit Item</div>
              </div>


                <div class = "row">

                  <div class="col">
                    <div class = "f3">Weight (kg)</div>
                    <input
                      type="text"
                      name="weight"
                      placeholder=<?php echo $itemWeight?>>
                  </div>

                  <div class="col">
                    <div class = "f3">Length (cm)</div>
                    <input
                      type="text"
                      name="length"
                      placeholder=<?php echo $itemLength?>>
                  </div>

                  <div class="col">
                    <div class = "f3">Width (cm)</div>
                    <input
                      type="text"
                      name="width"
                      placeholder=<?php echo $itemWidth?>>
                  </div>

                  <div class="col">
                    <div class = "f3">Height (cm)</div>
                    <input
                      type="text"
                      name="height"
                      placeholder=<?php echo $itemHeight?>>
                  </div>

                </div>
              <button type="submit" class="btn btn-outline-dark ma4">Edit</button>
            </form>

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