<?php
  include 'db_connection.php';
  #$conn = OpenCon();
  //Do some database stuff
  #CloseCon($conn);
  $listID = $_GET['id'];

  $listName = "Movie List";
  $listData = ['one', 'two', 'three'];

  if('POST' === $_SERVER['REQUEST_METHOD']){
    if (!empty($_POST["newItem"])){
      $newItem = $_POST["newItem"];
      //item sent in post.  add it to list
      array_push($listData, $newItem);
    }

    //insert the item to DB
    
  }


  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Share a List</title>
  </head>
  <body>

    <!-- List Name -->
    <h1> <?php echo json_encode($listName); ?> </h1>

    <!-- list items area -->
    <div>
      <ul>
      <!-- Items from server will go here  -->
      <div id="ItemList">

      </div>
      <!-- insert item area -->
      <div id="InsertArea">
        <li>
          <form id="formAddItem" name="formAddItem" method="post" action="/list.php?id=<?php echo $listID ?>">
            <input type="text" name="newItem" id="newItem" placeholder="New Item">
            <button type="submit">Add Item</button>
          </form>
        </li>
      </div>
      </ul>
    </div>
  </body>
</html>

<script>
  function makeList() {
      /*
        To display the list we need to return the listName and listData that's stored in the DB.
        The JS below will just display whatever the listName and listData values are.
        So we can use php with GET to grab the list_id value from the URL,  and then retrieve the name and data associated with that list_id.
      */
      // Establish the array which acts as a data source for the list
      let listData = <?php echo json_encode($listData); ?>,
      numberOfListItems = listData.length,
      listItem,
      i;

      // Add list to the page
      let listContainer = document.getElementById("ItemList");

      for (i = 0; i < numberOfListItems; ++i) {
          // create an item for each one
          listItem = document.createElement('li');

          // Add the item text
          listItem.innerHTML = listData[i];

          // Add listItem to the listElement
          listContainer.appendChild(listItem);
      }

      //Add insert item area
      let insertArea = document.getElementById("InsertArea");


  }

  // Usage
  makeList();

</script>
