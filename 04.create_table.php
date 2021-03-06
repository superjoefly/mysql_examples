<!DOCTYPE html>
<html>
  <head>
    <title>Create Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Create Table</h1>

    <h3>Example: Create a MySQL Table</h3>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Create Table --&gt;<br />
  &lt;?php<br />
  $servername = "********";<br />
  $username = "********";<br />
  $password = "********";<br />
  $dbname = "myDBPDO";<br />
<br />
  try {<br />
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);<br />
    // set the PDO error mode to exception<br />
    $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />
<br />
    //sql to create table<br />
    $sql = "CREATE TABLE MyGuests (<br />
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,<br />
      firstname VARCHAR(30) NOT NULL,<br />
      lastname VARCHAR(30) NOT NULL,<br />
      email VARCHAR(50),<br />
      reg_date TIMESTAMP<br />
    )";<br />
<br />
    // use exec() because no results are returned<br />
    $conn-&gt;exec($sql);<br />
      echo "Table MyGuests created successfully";<br />
  } catch (PDOExceptions $e) {<br />
      echo $sql . "&lt;br /&gt;" . $e-&gt;getMessage();<br />
  }<br />
<br />
  $conn = null;<br />
  ?&gt;<br />
    </code></pre>

  </body>
</html>
