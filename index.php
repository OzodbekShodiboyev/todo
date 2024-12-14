<?php
require_once 'src/header.php';
?>

<section class="vh-100" style="background-color: #e2d5de;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">

                        <h6 class="mb-3">Todo List</h6>

                        <form class="d-flex justify-content-center align-items-center mb-4" action="add.php" method="POST">
                            <div data-mdb-input-init class="form-outline flex-fill">
                                <input type="text" name="todo" class="form-control form-control-lg" placeholder="Todo Name" />
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary btn-lg ms-2" value="Add" /> 
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

<?php
require_once 'src/footer.php';
require_once 'config/DB.php';


// $db = new DB('localhost', 'todo', 'root', '');

?>