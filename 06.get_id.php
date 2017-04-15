<!DOCTYPE html>
<html>
  <head>
    <title>Get ID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Get ID</h1>

    <h3>Example: get ID of last inserted record:</h3>

    <p>If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, we can get the ID of the last inserted/updated record immediately.</p>

    <p>The following examples are equal to the examples from the previous page (PHP Insert Data Into MySQL), except that we have added one single line of code to retrieve the ID of the last inserted record. We also echo the last inserted ID:</p>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Get ID --&gt;<br />
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
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)<br />
        VALUES ('John', 'Doe', 'john@example.com')";<br />
        // use exec() because no results are returned<br />
        $conn-&gt;exec($sql);<br />
        $last_id = $conn-&gt;lastInsertId();<br />
        echo "New record created successfully. Last inserted ID is: " . $last_id;<br />
    } catch (PDOException $e) {<br />
        echo $sql . "&lt;br&gt;" . $e-&gt;getMessage();<br />
    }<br />
<br />
    $conn = null;<br />
    ?&gt;<br />
    </code></pre>

  </body>
</html>
