



<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>homepage</title>
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
            class="container"
        >
            <div
                class="row justify-content-center align-items-center g-2"
            >
                <div class="col"><div class="card">
                    <img class="card-img-top" src="https://chiedesign.in/wp-content/uploads/2022/05/Luxury-Interior-Design-Living-Room.jpg" alt="Title" height = 285 width = 100% />
                    <div class="card-body">
                        <h4 class="card-title">Hall</h4>
                        <p class="card-text">The hall interior combines elegant furniture, beautiful lighting, a welcoming atmosphere.
                         Modern colours and stylish décor make the hall look spacious, comfortable, and luxurious.</p>
                        <!-- Modal trigger button -->
                        <button
                            type="button"
                            class="btn btn-primary btn-lg"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId"
                        >
                           More Details
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div
                            class="modal fade"
                            id="modalId"
                            tabindex="-1"
                            data-bs-backdrop="static"
                            data-bs-keyboard="false"
                            
                            role="dialog"
                            aria-labelledby="modalTitleId"
                            aria-hidden="true"
                        >
                            <div
                                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document"
                            >
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            Modal title
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">Body</div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                </div>
                </div>
                <div class="col"><div class="card">
                    <img class="card-img-top" src="https://content.app-sources.com/s/40460189946594834/uploads/New_Int_Design/Illustration_of_various_furniture_pieces_in_a_room-3372269.jpg?format=webp" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Living Room</h4>
                        <p class="card-text">
                        The living room features modern furniture, decorative walls, and beautiful lighting for a sophisticated look.
                        A perfect blend of style and comfort makes it an ideal space for family gatherings and entertaining guests.</p>
                        <!-- Modal trigger button -->
                        <button
                            type="button"
                            class="btn btn-primary btn-lg"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId"
                        >
                           More Details
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div
                            class="modal fade"
                            id="modalId"
                            tabindex="-1"
                            data-bs-backdrop="static"
                            data-bs-keyboard="false"
                            
                            role="dialog"
                            aria-labelledby="modalTitleId"
                            aria-hidden="true"
                        >
                            <div
                                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document"
                            >
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            Modal title
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">Body</div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                </div>
                </div>
                <div class="col"><div class="card ">
                    <img class="card-img-top" src="https://ansainteriors.com/wp-content/uploads/2020/08/latest-bedroom-design.jpg" alt="Title"  height = 285 width = 100% />
                    <div class="card-body">
                        <h4 class="card-title">Bedroom</h4>
                        <p class="card-text">The bedroom interior is designed to provide comfort, relaxation, and a peaceful environment.
                        Soft colours, elegant wardrobes, and warm lighting create a stylish and cozy space.</p>

                        <!-- Modal trigger button -->
                        <button
                            type="button"
                            class="btn btn-primary btn-lg"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId"
                        >
                            More Details
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div
                            class="modal fade"
                            id="modalId"
                            tabindex="-1"
                            data-bs-backdrop="static"
                            data-bs-keyboard="false"
                            
                            role="dialog"
                            aria-labelledby="modalTitleId"
                            aria-hidden="true"
                        >
                            <div
                                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document"
                            >
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            Modal title
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">Body</div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                    </div>
                </div>
                </div>
            </div>  
            
            

            
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


                    <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(
                                document.getElementById("modalId"),
                                options,
                            );
                        </script>
                     <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(
                                document.getElementById("modalId"),
                                options,
                            );
                        </script>

 
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(
                                document.getElementById("modalId"),
                                options,
                            );
                        </script>
                        
    </body>
</html>
