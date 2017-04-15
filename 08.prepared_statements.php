<!DOCTYPE html>
<html>
  <head>
    <title>Prepared Statements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Prepared Statements</h1>

    <p>Prepared statements are vary useful against SQL injections.</p>

    <hr />

    <h2>Prepared Statements and Bound Parameters</h2>

    <p>A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.</p>

    <p>Prepared statements basically work like this:</p>

    <ol>
      <li>Prepare: An SQL statement is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)</li>
      <li>The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it</li>
      <li>Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values</li>
    </ol>

    <p>Compared to executing SQL statements directly, prepared statements have two main advantages:</p>

    <ul>
      <li>Prepared statements reduces parsing time as the preparation on the query is done only once (although the statement is executed multiple times)</li>
      <li>Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query</li>
      <li>Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.</li>
    </ul>

    <hr />

    <h3>Example: PDO prepared statements</h3>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Prepared Statements --&gt;<br />
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
      //prepare sql and bind parameters<br />
      $stmt = $conn-&gt;prepare("INSERT INTO MyGuests (firstname, lastname, email)<br />
      VALUES (:firstname, :lastname, :email)");<br />
        $stmt-&gt;bindParam(':firstname', $firstname);<br />
        $stmt-&gt;bindParam(':lastname', $lastname);<br />
        $stmt-&gt;bindParam(':email', $email);<br />
<br />
      //insert a row<br />
      $firstname = "Joe";<br />
        $lastname = "Blow";<br />
        $email = "joe@example.com";<br />
        $stmt-&gt;execute();<br />
<br />
      //insert another row<br />
      $firstname = "Harry";<br />
        $lastname = "Barry";<br />
        $email = "harry@example.com";<br />
        $stmt-&gt;execute();<br />
<br />
        echo "New records created successfully";<br />
    } catch (PDOException $e) {<br />
        echo "Error: " . $e-&gt;getMessage();<br />
    }<br />
    $conn = null;<br />
    ?&gt;<br />
<br />
<br />
    </code></pre>


  </body>
</html>
