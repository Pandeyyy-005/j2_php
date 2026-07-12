<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $salary=$_POST['salary'];
    $designation=$_POST['designation'];
    $sql=$conn->prepare("insert into user_info(name,age,salary,designation) values (?,?,?,?)");
    $sql->bind_param('sids',$name,$age,$salary,$designation);
    if($sql->execute()){
        header('location:home.php');
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
            <form class="col-6 border shadow mt-5 ms-5" action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">age</label>
                    <input
                        type="number"
                        class="form-control"
                        name="age"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">salary</label>
                    <input
                        type="double"
                        class="form-control"
                        name="salary"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">designation</label>
                    <input
                        type="text"
                        class="form-control"
                        name="designation"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <button>submit</button>
            </form>
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