<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="d-flex">
        <!-- place navbar here -->

    </header>


    <main>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div>
            <?php

            if (isset($_GET['submit'])) {

                $email = $_GET['email'];
                $password = $_GET['pass'];
                $file = fopen('data.csv', 'r');
                $data = [];
                while (($row = fgetcsv($file)) !== false) {
                    $data[] = $row;
                }

                foreach ($data as $personData) {
                    if (($email == $personData[1]) && ($password == $personData[0])) {
                        header('Location: ./dashboard.php');
                        $userName == $personData[2];
                        session_start();
                        $myVar = $personData[2];
                        $_SESSION['myVar'] = $myVar;
                    }
                }
                fclose($file);
            };

            ?>
        </div>

        <br>
        <br>
        <center>


            <form action="./login.php" method="get" id="myForm">
                <input type="email" name="email" placeholder="Enter email.." required><br><br>
                <input type="password" name="pass" placeholder="Enter password.." required><br><br>
                <input type="submit" name="submit" class="btn btn-success" id="submitBtn" value="submit">
            </form>

        </center>

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