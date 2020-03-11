<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" name="user_name" class="form-control" id="username" aria-describedby="usermname" placeholder="Enter UserName" pattern=".{5,10}" required user_name="5 to 10 characters">
                        <small id="emailHelp" class="form-text text-muted">Username min length 5 characters max 10 characters.</small>
                    </div>
                    <div class="form-group">
                        <label for="emai">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        <small id="emailHelp" class="form-text text-muted">Enter valid email.</small>
                    </div>
                    <div class="form-group">
                        <label for="username">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        <small id="emailHelp" class="form-text text-muted">Enter description </small>

                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="create">Create</button>
                </form>
            </div>
            <?php if (isset($errors) && is_array($errors)) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>