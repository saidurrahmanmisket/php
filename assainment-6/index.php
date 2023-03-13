<?php
session_start();
$_SESSION['username'] = 'John';
setcookie('username', 'John', time() - 3);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="vh-100 vw-100 bg-dark text-light">
    <header>
        <!-- place navbar here -->
        
    </header>
    
    <main class="h-75 d-flex justify-content-center align-items-center">
        <form method="post" action="action.php" class="w-25  justify-content-center align-items-center " enctype="multipart/form-data">
            <h2 class=" text-danger">Provide your information...</h2>
            <input class="w-100 m-3 p-2 border-0 rounded" type="text" name="name" id="name" placeholder="Enter your Name.." required>
            <input class="w-100 m-3 p-2 border-0 rounded" type="email" name="email" id="" placeholder="Enter your Email.." required>
            <input class="w-100 m-3 p-2 border-0 rounded" type="password" name="pass" id="" placeholder="Enter your Password" required>
            <input class="w-100 m-3 p-2 border border-2 rounded" type="file" name="file" id="" required>
            <button class="w-100  m-3 p-2 btn btn-danger rounded" type="submit" name="submit">Submit</button>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>