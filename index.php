<?php

require './vendor/autoload.php';

use DiDom\Document;
use Toolkit\Cli\Color;

// $start = readline(Color::apply('cyan1', "Please enter the starting id::\n"));

// $end = readline(Color::apply('brown1', "Please enter the ending id::\n"));

// for ($i = $start; $i <= $end; $i++) {
//     $document = new Document("https://xkcd.com/{$i}/", true);
//     $src = $document->find('#comic')[0]->children()[1]->src;
//     $file_name = $document->first('head')->first('title')->text();
//     $file_name = str_replace("xkcd: ", "", $file_name);
//     $file_name = explode(" ", $file_name);
//     $file_name = join('-', $file_name);
//     file_put_contents("./downloads/{$file_name}.jpg", file_get_contents("https:{$src}"));
//     print(Color::apply('green', "🔥🔥 Downloaded {$file_name}\n"));
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xkcd downloads</title>
    <!-- icon link -->
    <link rel="icon" href="https://xkcd.com/s/919f27.ico">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- nav bar start -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-auto me-auto" href="#">
                <h1>xkcd downloads</h1>
        </div>
    </nav>
    <!-- nav bar end -->
    <!-- input section start  -->
    <section class=" container d-flex  align-items-center justify-content-center " style="min-height:85vh">
        <form class="row g-3">
            <div class="col row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputFirstNumber" class="col-form-label">From Card Number : </label>
                </div>
                <div class="col-auto">
                    <input type="number" id="inputFirstNumber" class="form-control" aria-describedby="firstNumberHelpInline">
                </div>
                <div class="col-auto">
                    <span id="firstNumberHelpInline" class="form-text">
                        Must be less than end number.
                    </span>
                </div>
            </div>
            <div class="col row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputLastNumber" class="col-form-label">To Card Number : </label>
                </div>
                <div class="col-auto">
                    <input type="number" id="inputLastNumber" class="form-control" aria-describedby="lastNumberHelpInline">
                </div>
                <div class="col-auto">
                    <span id="lastNumberHelpInline" class="form-text">
                        Must be more than start number.
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col m-5">Get </button>
        </form>
    </section>
    <!-- input section end  -->

    <!-- main section start  -->
    <!-- <section class=" container  my-5" style="min-height:85vh">
        <div class="row g-3 d-flex  justify-content-around">

            <div class="card col-auto m-2" style="width: 18rem;">
                <img src="..." class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Image Name :</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                </div>
            </div>

        </div>
    </section> -->
    <!-- main section end  -->
    <!-- footer start -->
    <footer class="navbar navbar-dark bg-dark container-fluid  d-flex  align-items-center justify-content-between">
        <a class="btn btn-primary" href="/images.php"><i class="fa-brands fa-github me-1"></i>images</a>
        <p class="navbar-brand ">
            <b>Made by :</b> Elsayed Hussein
        </p>
        <a class="btn btn-primary" href="https://github.com/elsayed-hussein/download-images-from-xkcd"><i class="fa-brands fa-github me-1"></i>Git Hub</a>
    </footer>
    <!-- footer end -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js" integrity="sha512-Cvxz1E4gCrYKQfz6Ne+VoDiiLrbFBvc6BPh4iyKo2/ICdIodfgc5Q9cBjRivfQNUXBCEnQWcEInSXsvlNHY/ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
<!-- [ ] : convert the above code to work on a website (read the user input using a form). -->
<!-- [ ] : then allow the user to view the downloaded images in a webpage called `images.php`. -->
<!-- [ ] : add `.copy` to file name if exists . -->