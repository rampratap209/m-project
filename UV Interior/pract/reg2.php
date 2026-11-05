<?php

include "db.php";
session_start();

$result = $conn -> query("SELECT * FROM emp");
$annualsalary = $_SESSION['annualsalary'];

?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />


        <style>

        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">SALARY </th>
                        <th scope="col">ANNUAL SALARY </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result-> fetch_assoc()) { ?>
                    <tr class="">
                        <td scope="row"> <?php echo $row ["id"] ?>  </td>
                        <td> <?php echo $row ["name"] ?> </td>
                        <td> <?php echo $row ["salary"] ?> </td>
                        <td> <?php echo $annualsalary ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
