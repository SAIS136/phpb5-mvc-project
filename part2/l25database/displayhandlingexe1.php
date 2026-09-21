

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display Handling Exercise 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    </head>
    <body>

        <div class="container mt-5">

            <h3>Hello Friend ! Welcome to <?php echo $_GET['city']; ?> </h3>
            <p>I am <?php echo $_GET['name']; ?> . I Got your data by passing GET method</p>

        </div>

        <div class="container mt-5">

            <h3>Hello Friend ! Welcome to <?php echo $_POST['city']; ?></h3>
            <p>I am <?php echo $_POST['name']; ?> . I Got your data by passing POST method</p>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<!--
GET
bookmarkable = true
sensitive data = false
size limit = (3000 words)

vs

POST
bookmarkable = false
sensitive data = true
size limit = false
-->

<!--
Getting data from server (GET)
Changing data to server (POST)
-->