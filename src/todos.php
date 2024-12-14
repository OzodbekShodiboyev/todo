<ul class="list-group mb-0">
    <?php
    foreach ($todo->getAllTodo() as $todo) {
    ?>
        <li
            class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
            <div class="d-flex align-items-center">
                <b><?= $todo['name'] ?></b>
            </div>
            <a href="#!" data-mdb-tooltip-init title="Remove item">

                <form action="controllers/delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $todo['id']; ?>" />
                    <button type="submit" class="outline-none btn-close fas fa-times text-primary"></button>
                </form>

            </a>
        </li>
    <?php } ?>
</ul>