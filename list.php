<?php
  include 'db_connection.php';
  #$conn = OpenCon();
  //Do some database stuff
  #CloseCon($conn);

  $listName = "temp list name";
  $listData = ['one', 'two', 'three'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  </body>
</html>

<script>
  function makeList() {
      /*
        To display the list we need to return the listName and listData that's stored in the DB.
        The JS below will just display whatever the listName and listData values are.
        So we can use php with GET to grab the list_id value from the URL,  and then retrieve the name and data associated with that list_id.
      */

      // Establish the Name of the list
      let listName = <?php echo json_encode($listName); ?>,
      // Establish the array which acts as a data source for the list
      listData = <?php echo json_encode($listData); ?>,
      // Make a container element for the list
      listContainer = document.createElement('div'),
      // Make the header
      headerElement = document.createElement('h1'),
      // Make the list
      listElement = document.createElement('ul'),
      // Set up a loop that goes through the items in listItems one at a time
      numberOfListItems = listData.length,
      listItem,
      i;

      // Add header to the page
      document.getElementsByTagName('body')[0].appendChild(headerElement);
      headerElement.innerHTML = listName;
      // Add list to the page
      document.getElementsByTagName('body')[0].appendChild(listContainer);
      listContainer.appendChild(listElement);

      for (i = 0; i < numberOfListItems; ++i) {
          // create an item for each one
          listItem = document.createElement('li');

          // Add the item text
          listItem.innerHTML = listData[i];

          // Add listItem to the listElement
          listElement.appendChild(listItem);
      }
  }

  function makeListButtons() {
    
  }
  
  // Usage
  makeList();
  makeListButtons();
</script>
