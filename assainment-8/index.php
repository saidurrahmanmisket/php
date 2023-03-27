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
                if ($_GET['pass'] !== $_GET['cpass']) {

                    echo '<h3 class="text-center text-danger">Password Not match ❌</h3>';
                } else {
                    $email = $_GET['email'];
                    $pass = $_GET['pass'];
                    $fname = $_GET['fname'];
                
                
                   
                
                    // write data to file 
                    $myfile = fopen("./data.csv", "a+") or die("Unable to open file!");

                    $allInfo = "{$pass},{$email},{$fname}". PHP_EOL;
                    fwrite($myfile, $allInfo);
                    fclose($myfile);
                
                
                    $filename = 'users.csv';
                
                    $lines = file($filename);
                    header('Location: ./success-submit.php');
                    exit;
                }
            };

            ?>
        </div>

        <br>
        <br>
        <center>


            <form action="" method="get" id="myForm">
                <input class="rounded" type="text" name="fname" placeholder="First name.." required><br><br>
                <input class="rounded" type="text" name="lname" placeholder="Last name.." required><br><br>
                <input class="rounded" type="email" name="email" placeholder="Enter email.." required><br><br>
                <input class="rounded" type="password" name="pass" placeholder="Enter password.." required><br><br>
                <input class="rounded" type="password" name="cpass" placeholder="Enter confirm password.." required><br><br>
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