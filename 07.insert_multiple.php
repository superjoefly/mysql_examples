<!DOCTYPE html>
<html>
  <head>
    <title>Insert Multiple Records</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Insert Multiple Records</h1>

    <h3>Example: add two new records to the "MyGuests" table:</h3>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Insert Multiple Data --&gt;<br />
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
    //begin the transaction<br />
    $conn-&gt;beginTransaction();<br />
    //our SQL statements<br />
    $conn-&gt;exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com')");<br />
      $conn-&gt;exec("INSERT INTO MyGuests (firstname, lastname, email)<br />
    VALUES ('Julie', 'Dooley', 'julie@example.com')");<br />
<br />
    //commit the transaction<br />
    $conn-&gt;commit();<br />
      echo "New records created successfully";<br />
  } catch (PDOException $e) {<br />
      //roll back the transaction if something failed<br />
    $conn-&gt;rollback();<br />
      echo "Error: " . $e-&gt;getMessage();<br />
  }<br />
<br />
  //close connection<br />
  $conn=null;<br />
  ?&gt;<br />
<br />
    </code></pre>


  </body>
</html>
