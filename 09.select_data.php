<!DOCTYPE html>
<html>
  <head>
    <title>Select Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Select Data</h1>

    <p>The SELECT statement is used to select data from one or more tables:</p>

    <pre><code>
      <p>SELECT column_name(s) FROM table_name</p>
    </code></pre>

    <p>or we can use the * character to select ALL columns from a table:</p>

    <pre><code>
      <p>SELECT * FROM table_name</p>
    </code></pre>

    <h2>Select Data with PDO (+Prepared Statements)</h2>

    <p>The following example uses prepared statements.</p>

    <p>It selects the id, firstname, and lastname columns from the MyGuests table and displays it in an HTML table:</p>

    <h3>Example: select data with PDO using prepared statements</h3>

    <!-- Code Snippet -->
    <pre><code class="language-php">
      &lt;!-- Select Data --&gt;<br />
&lt;?php<br />
    echo "&lt;table style='border: 2px solid blue;'&gt;";<br />
    echo "&lt;tr&gt;&lt;th&gt;ID&lt;/th&gt;&lt;th&gt;Firstname&lt;/th&gt;&lt;th&gt;Lastname&lt;/th&gt;&lt;/tr&gt;";<br />
<br />
    class TableRows extends RecursiveIteratorIterator<br />
    {<br />
        public function __construct($it)<br />
        {<br />
            parent::__construct($it, self::LEAVES_ONLY);<br />
        }<br />
<br />
        public function current()<br />
        {<br />
            return "&lt;td style='width:150px; border:1px solid black;'&gt;" . parent::current(). "&lt;/td&gt;";<br />
        }<br />
<br />
        public function beginChildren()<br />
        {<br />
            echo "&lt;tr&gt;";<br />
        }<br />
<br />
        public function endChildren()<br />
        {<br />
            echo "&lt;/tr&gt;" . "\n";<br />
        }<br />
    }<br />
<br />
    $servername = "********";<br />
    $username = "********";<br />
    $password = "********";<br />
    $dbname = "myDBPDO";<br />
<br />
    try {<br />
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);<br />
        $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />
        $stmt = $conn-&gt;prepare("SELECT id, firstname, lastname FROM MyGuests");<br />
        $stmt-&gt;execute();<br />
<br />
      //set the resulting array to associative<br />
      $result = $stmt-&gt;setFetchMode(PDO::FETCH_ASSOC);<br />
        foreach (new TableRows(new RecursiveArrayIterator($stmt-&gt;fetchAll())) as $k=&gt;$v) {<br />
            echo $v;<br />
        }<br />
    } catch (PDOException $e) {<br />
        echo "Error: " . $e-&gt;getMessage();<br />
    }<br />
    $conn = null;<br />
    echo "&lt;/table&gt;";<br />
    ?&gt;<br />
<br />
<br />
<br />
    </code></pre>


  </body>
</html>
