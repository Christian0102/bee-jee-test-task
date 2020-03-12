<?php include ROOT . '/views/layouts/header.php'; ?>
</section>
<?php if (isset($_SESSION['flash'])) : ?>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success"><?php SessionHelper::getFlashMessage(); ?></li>
    </ul>
<?php endif; ?>
<table class="table" id="tasks">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task) : ?>
            <tr>
                <th scope="row"><?php render($task['id']); ?></th>
                <td><?php render($task['user_name']); ?></td>
                <td><?php render($task['email']); ?></td>
                <td><?php render($task['description']); ?></td>
                <td><?php if ($task['status'] == 0) {
                        echo "<i class='fa fa-calendar-o fa-lg'</i>";
                    } else {
                        echo "<i class='fa fa-calendar-check-o fa-lg'></i> ";
                    } ?></td>
                <td>
                    <a href="<?php echo '/admin/task/update/' . $task['id']; ?>">Edit</a>
                   <small><?php if ($task['edit_admin'] == 1) {echo "Updated by Admin";} ?></small>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>