<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css';  ?>">
</head>

<body>
    <div class="navbar  bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand text-white">CRUD APPLICATION</a>
        </div>
    </div>

    <div class="container">
        <h3 class="mt-2">Update User</h3>
        <hr>
        <form method="post" action="<?php echo base_url(). "index.php/user/update/" . $user['user_id']; ?>" name="updateuser">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $user['name']; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $user['email'];?>" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/user/'; ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>