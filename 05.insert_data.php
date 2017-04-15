<!DOCTYPE html>
<html>
  <head>
    <title>Insert Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Insert Data</h1>

    <h3>Example: insert data into the table:</h3>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Insert Data --&gt;<br />
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
        echo "New record created successfully";<br />
    } catch (PDOException $e) {<br />
        echo $sql . "&lt;br&gt;" . $e-&gt;getMessage();<br />
    }<br />
<br />
    $conn = null;<br />
    ?&gt;<br />
    </code></pre>


  </body>
</html>
