<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary p-4">
        <div class="container-fluid mx-5">
          <a class="navbar-brand text-white fs-3" href="#" >IPT Midterm Project</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="float-right" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link fs-4" aria-current="page" href="<?= url('/') ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="<?= url('/users') ?>">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4" href="<?= url('/accounts') ?>">Accounts</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <div class=" card w-25 mx-auto text-center bg-primary mt-3">
        <p class="text-white mt-2 mb-1 fs-4">Main Menu</p>
        <hr>
        <div class="card-body">

                    <a class="nav-link fs-4 btn btn-light w-100 mb-2 p-2" aria-current="page" href="<?= url('/') ?>">Home</a>



                <a class="nav-link fs-4 btn btn-light w-100 mb-2 p-2" href="<?= url('/users') ?>">Users</a>



                <a class="nav-link fs-4 btn btn-light w-100 mb-2 p-2" href="<?= url('/accounts') ?>">Accounts</a>

        </div>
      </div>
</body>
</html>