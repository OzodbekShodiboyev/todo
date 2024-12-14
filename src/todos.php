<ul class="list-group mb-0">
    <?php
    foreach ($todo->getAllTodo() as $todo) {
    ?>
        <li
            class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
            <div class="d-flex align-items-center">
                <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                <b><?= $todo['name'] ?></b>
            </div>
            <a href="#!" data-mdb-tooltip-init title="Remove item">
                <i class="fas fa-times text-primary"></i>
            </a>
        </li>
    <?php } ?>
</ul>