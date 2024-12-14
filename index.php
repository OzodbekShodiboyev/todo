<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.min.css" rel="stylesheet" />
</head>
<body>

<section class="vh-100" style="background-color: #e2d5de;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">

            <h6 class="mb-3">Todo List</h6>

            <form class="d-flex justify-content-center align-items-center mb-4">
              <div data-mdb-input-init class="form-outline flex-fill">
                <input type="text" id="form3" class="form-control form-control-lg" />
                <label class="form-label" for="form3">Todo Name</label>
              </div>
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg ms-2">Add</button>
            </form>

            <ul class="list-group mb-0">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                <div class="d-flex align-items-center">
                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                  <b>Todo 1</b>
                </div>
                <a href="#!" data-mdb-tooltip-init title="Remove item">
                  <i class="fas fa-times text-primary"></i>
                </a>
              </li>
              <li
                class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                <div class="d-flex align-items-center">
                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                  <b>Todo 2</b>
                </div>
                <a href="#!" data-mdb-tooltip-init title="Remove item">
                  <i class="fas fa-times text-primary"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.umd.min.js"
></script>
</body>
</html>