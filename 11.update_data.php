<!DOCTYPE html>
<html>
  <head>
    <title>Update Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Update Data</h1>

    <p>The UPDATE statement is used to update existing records in a table.</p>

    <pre><code>
      UPDATE table_name
      SET column1=value, column2=value2, ...
      WHERE some_column=some_value
    </code></pre>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Notice the WHERE clause in the UPDATE syntax:</strong> The WHERE clause specifies which record or records to update. If you omit the WHERE clause, all records will be updated!</p>
    </div>

    <h3>Example: update records in table</h3>

    <p>The following example updates the record with id=2 in the "MyGuests" table:</p>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Update Data --&gt;<br />
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
        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=4";<br />
<br />
      //Prepare statement<br />
      $stmt = $conn-&gt;prepare($sql);<br />
<br />
      //execute the query<br />
      $stmt-&gt;execute();<br />
<br />
      //echo message to say the UPDATE succeeded<br />
      echo $stmt-&gt;rowCount() . " records UPDATED successfully";<br />
    } catch (PDOException $e) {<br />
        echo $sql . "&lt;br /&gt;" . $e-&gt;getMessage();<br />
    }<br />
<br />
    $conn = null;<br />
    ?&gt;<br />
<br />
<br />
<br />
<br />
    </code></pre>

  </body>
</html>
