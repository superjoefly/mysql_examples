<!DOCTYPE html>
<html>
  <head>
    <title>Create a Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Create a Database</h1>

    <p>A database consists of one or more tables.</p>

    <p>You will need special CREATE privleges to create or to delete a MySQL database.</p>

    <hr />

    <h2>Create a Database using PDO</h2>

    <p>The CREATE DATABASE statement is used to create a database in MySQL:</p>

    <h3>Example: create a database named "myDBPDO":</h3>

    <!-- Code Snippet -->

    <pre><code class="language-php">
      &lt;!-- Create Database --&gt;<br />
      &lt;?php<br />
    $servername = "********";<br />
    $username = "********";<br />
    $password = "********";<br />
<br />
    try {<br />
        $conn = new PDO("mysql:host=$servername", $username, $password);<br />
        // set the PDO error mode to exception<br />
        $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />
        $sql = "CREATE DATABASE myDBPDO";<br />
        // use exec() because no results are returned<br />
        $conn-&gt;exec($sql);<br />
        echo "Database created successfully&lt;br&gt;";<br />
    } catch (PDOException $e) {<br />
        echo $sql . "&lt;br&gt;" . $e-&gt;getMessage();<br />
    }<br />
<br />
    $conn = null;<br />
    ?&gt;<br />
    </code></pre>



  </body>
</html>
