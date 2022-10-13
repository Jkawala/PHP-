<html>
  <head>
    <title>Exercise 4</title>
  </head>
  <body>
    <table>
      <?php
        $xml_filename="books.xml";

        $xml=simplexml_load_file($xml_filename);

        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Title</th>";
        echo "<th>Author</th>";
        echo "<th>Genre</th>";
        echo "<th>Price</th>";
        echo "<th>Publish Date</th>";
        echo "<th>Publisher</th>";
        echo "</tr>";
        echo "<tbody>";
        foreach($xml->book as $book){
          echo "<tr>";
          echo "<td>" . $book['id'] . "</td>";
          echo "<td>" . $book->title . "</td>";
          echo "<td>" . $book->author . "</td>";
          echo "<td>" . $book->genre . "</td>";
          echo "<td>" . $book->price . "</td>";
          echo "<td>" . $book->publish->publish_date . "</td>";
          echo "<td>" . $book->publish->publisher . "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
      ?>
    </table>
  </body>
</html>