<!DOCTYPE html>
<html>
  <head>
    <title>Delete Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Delete Data</h1>

    <p>The DELETE statement is used to delete records from a table:</p>

    <pre><code>
      DELETE FROM table_name
      WHERE some_column = some_value
    </code></pre>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Notice the WHERE clause in the DELETE syntax:</strong> the WHERE clause specifies which record or records should be deleted. If you omit the WHERE clause, all records will be deleted!</p>
    </div>

    <h3>Example: delete record with id=1 in the "MyGuests" table:</h3>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Delete Data --&gt;<br />
&lt;?php<br />
$servername = "********";<br />
$username = "********";<br />
$password = "********";<br />
$dbname = "myDBPDO";<br />
<br />
try {<br />
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);<br />
  //set the PDO error mode to exception<br />
  $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />
<br />
  //sql to delete a record<br />
  $sql = "DELETE FROM MyGuests WHERE id=1";<br />
<br />
  //use exec() because no results are returned<br />
  $conn-&gt;exec($sql);<br />
    echo "Record deleted successfully";<br />
} catch (PDOException $e) {<br />
    echo $sql . "&lt;br /&gt;" . $e-&gt;getMessage();<br />
}<br />
<br />
$conn = null;<br />
?&gt;<br />
<br />
<br />
<br />
    </code></pre>

  </body>
</html>
