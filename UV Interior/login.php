<?php

include 'db.php';
session_start();
if ($_SERVER ["REQUEST_METHOD"]==="POST"){
    $user_name = $_POST ["username"];
    $password = $_POST ["password"];

    $sql = $conn -> prepare("select password from register where username = ?");

    $sql -> bind_param ("s",$user_name);
    $sql -> execute();
    $sql -> bind_result($pass);
    $sql -> fetch();

   if(password_verify($password, $pass)){
   $_SESSION['username']=$user_name;
   header("location:home.php");
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
            <!-- place navbar here -->
        </header>
        <main>

        <div
            class="container col-5  shadow my-5"
        >
            <form action="" method = "POST">

            <h3 class = "text-center my-3">Login</h3>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">username</label>
            </div>
            

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id=""
                    placeholder=""
                />
            </div>
            
            <button
                type="submit"
                class="btn btn-primary my-2"
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
