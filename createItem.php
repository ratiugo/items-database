<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./problem4.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    <title>Create Items</title>
  </head>
  <body>

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

            <h1 class="f2 f1-l fw2 black-90 mb0 lh-title">
              Create Items
            </h1>

            <h2 class="fw1 f3 black-80 mt3 mb4 w-50 center">
              Please fill out the following form to create a new item. You will be sent back home upon submission, with the newly created item available for viewing/editing.
            </h2>

            <form
              class = "w-75 center"
              id = "createForm"
              action = "index.php"
              method = "post">
              <div class="form-group w-50 center">
                <div>Item Name (only one word please)</div>
                <input
                  required
                  class="form-control"
                  name = "name">
              </div>
                <div class = "row">
                  <div class="form-group col">
                    <div>Weight (kg)</div>
                    <input
                      required
                      class="form-control"
                      name = "weight">
                  </div>
                  <div class="form-group col">
                    <div>Length (cm)</div>
                    <input
                      required
                      class="form-control"
                      name = "length">
                  </div>
                  <div class="form-group col">
                    <div>Width (cm)</div>
                    <input
                      required
                      class="form-control"
                      name = "width">
                  </div>
                  <div class="form-group col">
                    <div>Height (cm)</div>
                    <input
                      required
                      class="form-control"
                      name = "height">
                  </div>
                </div>
              <button type="submit" class="btn btn-outline-dark ma4">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50YUdj0O3uMBJnjuUD4Ih7Ywaqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
    <footer class = "footer">
      Made by Colton Williams
    </footer>
</html>