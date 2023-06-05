<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view user</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css';  ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="navbar" style="background-color:#192a56;">
        <div class="container">
            <a href="#" class="navbar-brand text-white fw-bold">CRUD APPLICATION</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">View User</h3>
            </div>
            <div class="col-2 my-2">
                <a href="<?php echo base_url().'index.php/user/create';  ?>" class="btn btn-primary "><i
                        class="fa-solid fa-plus"></i> Create User</a>
            </div>
            <hr>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered table-hover">
                    <tr align='middle'>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    if(!empty($users)){
                        foreach($users as $user){ 
                    ?>
                    <tr align='middle'>
                        <td>
                            <?php echo $user["user_id"]; ?>
                        </td>
                        <td>
                            <?php echo $user["name"]; ?>
                        </td>
                        <td>
                            <?php echo $user["email"]; ?>
                        </td>
                        <td><a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>"
                                class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Edit</a></td>
                        <td><a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>"
                                class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a> </td>
                    </tr>


                    <?php
                        }
                    }else{
                        echo "<tr>
                                <td colspan=5>Records Not Found</td>
                            </tr>";
                    }
                    ?>

                </table>

            </div>
        </div>
    </div>

</body>

</html>