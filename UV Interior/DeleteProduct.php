<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $id = $_POST["id"];

    $sql = $conn -> prepare("DELETE FROM product WHERE id=?");

    $sql -> bind_param("i",$id);

    if (!$sql->execute()) {
        echo "unable to deleted data";
    }
    else{
        echo "Data deleted Sucessfully";
    }


}

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


        <form action="" method = "POST">
        <div
            class="container col-5 my-5"
        >
        <h3 class = "text-center ">Delete Product</h3>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Enter ID to Delete</label>
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            

        </form>

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
