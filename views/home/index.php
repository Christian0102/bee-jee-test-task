<?php include ROOT . '/views/layouts/header.php'; ?>
</section>
<div class="container-fliud">
    <table class="table" id="tasks">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task) : ?>
                <tr>
                    <th scope="row"><?php echo $task['id']; ?></th>
                    <td><?php echo $task['user_name']; ?></td>
                    <td><?php echo $task['email']; ?></td>
                    <td><?php echo $task['description']; ?></td>
                    <td><?php  ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>


</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>