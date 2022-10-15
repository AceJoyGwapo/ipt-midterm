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
              <a class="navbar-brand text-white fs-3" href="#">IPT Midterm Project</a>

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




      <div class="container">
        <div class="row">

                <h1>Accounts</h1>

                <table class="table table-bordered">
                    <thead class="thead-dark bg-primary">
                        <tr class="bg-primary fs-5">
                            <th scope="col">Account#</th>
                            <th scope="col">Account Name</th>
                            <th scope="col">Initial Investment</th>
                            <th scope="col">Date Started</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($accounts as $a): ?>
                            <tr>
                                <td> <?= $a->user_id ?> </td>
                                <td> <?= $a->acc_name ?> </td>
                                <td> <?= $a->init_invest ?> </td>
                                <td> <?= $a->start_date ?> </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

        </div>
      </div>
</body>
</html>