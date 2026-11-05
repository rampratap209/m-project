
<?php
include("db.php");
session_start();

$result = $conn->query("select * from product");

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
    </head>

    <body>
        <header>
            <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
           >
            <div class="container col-12">
            
            <img
                src="https://template.canva.com/EAFBzUri4dY/1/0/1600w-mAT_cnSk4r4.jpg"
                class="img-fluid rounded-top"
                alt=""
                height = 100;
                width = 100;
            />
            

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="AddProduct.php">Add_Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="UpdateProduct.php">Update_Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="DeleteProduct.php">Delete_Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="ShowProduct.php">Show_Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="login.php"
                            role="button"
                            >Logout</a
                        >
                        
                    </form>
                </div>
            </div>
           </nav>
     
        </header>
        <main>

        <div
            class="table-responsive col-11 text-center mx-5"
        >
        
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) {
                            ?>
                    <tr class="">
                        <td scope="row"><?php echo $row ['id']  ?></td>
                        <td><?php echo $row ['name']  ?></td>
                        <td><?php echo $row ['category']  ?></td>
                        <td><?php echo $row ['price']  ?></td>

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
