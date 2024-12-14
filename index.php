<?php
require_once 'src/components/header.php';
require_once 'bootstrap.php';
?>

<section style="background-color: #e2d5de;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">

                        <h6 class="mb-3">Todo List</h6>

                       <?php include_once 'src/add-todo.php'; ?>
                       <?php include_once 'src/todos.php'; ?>

                       
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php require_once 'src/components/footer.php';?>