<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Task 2.2 — Date on the Client AND the Server</title>
    <style>
        body {
            background: black;
            color: #c026ff;
            font-family: "Courier New", monospace;
            text-align: center;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <!-- PART 1: CLIENT SIDE (runs in your browser, on your computer) -->
    <script type="text/javascript">
        document.write("Current Time on Client <br>");
        document.write(new Date());
    </script>

    <br><br>

    <!-- PART 2: SERVER SIDE (PHP runs on the web server) -->
    <p>Current Time on Server <br>
    <?php echo(strftime("%m/%d/%Y %H:%M")); ?>
    </p>

</body>
</html>