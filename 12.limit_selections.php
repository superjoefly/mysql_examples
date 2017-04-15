<!DOCTYPE html>
<html>
  <head>
    <title>Limit Data Selections</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  </head>
  <body class="w3-margin">

    <h1>Limit Data Selections</h1>

    <p>MySQL provides a LIMIT clause that is used to specify the number of records to return.</p>

    <p>The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.</p>

    <p>Assume we want to select all records from 1 30 (inclusive) from a table called "Orders". The SQL query would then look like this:</p>

    <pre><code>
      $sql = "SELECT * FROM Orders LIMIT 30;"
    </code></pre>

    <p>When the SQL query above is run, it will return the first 30 records.</p>

    <p>What if we want to select records 16-25 (inclusive)?</p>

    <p>In this case we would use OFFSET.</p>

    <p>The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":</p>

    <pre><code>
      $sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
    </code></pre>

    <p>You can also use a shorter syntax to achieve the same result:</p>

    <pre><code>
      $sql = "SELECT * FROM Orders LIMIT 15, 10";
    </code></pre>

    <p><strong>Notice:</strong> the numbers are reversed when you use a comma.</p>

  </body>
</html>
