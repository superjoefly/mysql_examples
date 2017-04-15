<!DOCTYPE html>
<html>
  <head>
    <title>Connect to MySQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Connect to MySQL</h1>

    <p>PHP 5 and later can work with a MySQL database using:</p>

    <ul>
      <li>MySQLi extension (the "i" stands for improved)</li>
      <li>PDO (PHP Data Objects)</li>
    </ul>

    <p>Earlier versions of PHP used the MySQL extension, however, this extension was deprecated in 2012.</p>

    <h2>MySQLi vs PDO</h2>

    <ul>
      <li>PDO will work on 12 different database systems; MySQLi will only work with MySQL</li>
      <li>Both are object oriented; MySQLi also offers a procedural API</li>
      <li>Both support prepared statements. Prepared statements protect from SQL injection, and are very important for web application security.</li>
    </ul>

    <hr />

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Make Connection --&gt;<br />
      &lt;?php<br />
      $servername = "********";<br />
      $username = "********";<br />
      $password = "********";<br />
<br />
      try {<br />
          $conn = new PDO("mysql:host=$servername;dbname=myDBPDO", $username, $password);<br />
        // set the PDO error mode to exception<br />
        $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />
          echo "Connected Successfully";<br />
      } catch (PDOException $e) {<br />
          echo "Connection failed: " . $e-&gt;getMessage();<br />
      }<br />
      ?&gt;<br />
    </code></pre>



    <p>The connection will be closed automatically when the script ends. To close the connection before, use the following:</p>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- close database --&gt;<br />
    &lt;?php<br />
    $conn = null;<br />
    ?&gt;<br />
    </code></pre>


  </body>
</html>
