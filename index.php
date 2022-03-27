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
        <form class="row g-3" action="./images.php" method="GET">
            <div class="col row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputFirstNumber" class="col-form-label">From Card Number : </label>
                </div>
                <div class="col-auto">
                    <input type="number" name="inputFirstNumber" id="inputFirstNumber" class="form-control" aria-describedby="firstNumberHelpInline" required>
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
                    <input type="number" name="inputLastNumber" id="inputLastNumber" class="form-control" aria-describedby="lastNumberHelpInline" required>
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
    <!-- footer start -->
    <footer class="navbar navbar-dark bg-dark  d-flex  align-items-center justify-content-between">
        <a class="btn btn-primary" href="/images.php"><i class="fa-solid fa-images me-1"></i>images</a>
        <a class="navbar-brand ms-auto me-auto">
            <b>Made by :</b> Elsayed Hussein
        </a>
        <a class="btn btn-primary" href="https://github.com/elsayed-hussein/download-images-from-xkcd"><i class="fa-brands fa-github me-1"></i>Git Hub</a>
    </footer>
    <!-- footer end -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js" integrity="sha512-Cvxz1E4gCrYKQfz6Ne+VoDiiLrbFBvc6BPh4iyKo2/ICdIodfgc5Q9cBjRivfQNUXBCEnQWcEInSXsvlNHY/ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
<!-- [x] : convert the above code to work on a website (read the user input using a form). -->
<!-- [x] : then allow the user to view the downloaded images in a webpage called `images.php`. -->
<!-- [ ] : add `.copy` to file name if exists . -->