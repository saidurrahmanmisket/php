<?php

if (isset($_POST['submit'])) {

    //received all info from userForm
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $file = $_FILES['file']['name'];


    //add current time to file name 
    $currentDateTime = date("Y-m-d__H:i:s");
    $newFileName = "{$currentDateTime}_{$file}" . PHP_EOL;


    // write data to file 
    $myfile = fopen("./users.csv", "a+") or die("Unable to open file!");
    $allInfo = "{$name},{$email},{$file},{$newFileName}";
    fwrite($myfile, $allInfo);
    fclose($myfile);


    $filename = 'users.csv';

    $lines = file($filename);
?>

    <!-- html file start --------------------------------- -->


    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>

    <body class=" vw-100 bg-dark text-light">
        <div class="d-flex m-5 w-100">
            <a class="btn btn-danger text-center p-3 me-5" href="/"><-Back</a>
            <h1 class="text-center">All Member</h1>
        </div>
        <main>
        <?php
        foreach ($lines as $line) {
            $fields = explode(',', $line);
            // var_dump( $fields);
            // echo "<br>";
            $username = $fields[0];
            $email = $fields[1];
            $originalFileName = $fields[2];
            $newFileName= $fields[3];
            // echo "<h2>$username</h2>";
            // echo "<p>$email</p>";
            // echo "<img src=\"uploads/{$picture_filename}\">";
            ?>
            <div class="myCard">
                <div class="cardLeft">
                    <img class="img-fluid " style="min-height: 100%; min-width: 200px;" src="./uploads/<?php echo $originalFileName ?>" alt="">
                </div>
                <div class="cardRight">
                    <h1 class="text-danger">Name: <?php echo $username ?></h1>
                    <p>Email: <?php echo $email ?></p>
                    <p> Main File:  <?php echo $originalFileName ?></p>
                    <p>Time:  <?php echo $newFileName ?>  </p>
                </div>
            </div>
            <?php
        }
        ?>
        </main>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    </body>

    </html>
    <!-- html file end   --------------------------------- -->



<?php

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $filename = $_FILES['file']['name'];
        $tmpname = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];

        // Handle the file here, for example by moving it to a permanent location
        move_uploaded_file($tmpname, "uploads/" . $filename);

        echo "File uploaded successfully!";
    } else {
        echo "Error uploading file.";
    }
}

?>