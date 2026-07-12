<?php
include 'db.php';
session_start();
$result=$conn->query("select *from user_info");
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
            <a href="add.php">Add</a><br>
            <a href="logout.php">logout</a>
        </header>
        <main>
            <h1>hello<?=$_SESSION["username"]?>!</h1>
            <h3>Employ dashboard</h3>
           <table border="1" cellpadding="12" style="background-color:green">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>age</td>
                <td>salary</td>
                <td>designation</td>
                <td>action</td>
                <td>action</td>
            </tr>
            <?php while($row=$result->fetch_assoc()){?>
             <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['age']?></td>
                <td><?=$row['salary']?></td>
                <td><?=$row['designation']?></td>
                <td><a href="delete.php?id=<?=$row['id']?>">delete</a></td>
                <td><a href="update.php?id=<?=$row['id']?>">update</a></td>
             </tr>
           <?php }?>
           </table>
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