<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>

    <?php
    //session_start();
    // include_once './store.php';
   // $students = $_SESSION['students'] ?? [];

   include_once './../../vendor/autoload.php';

   use Project\Controllers\Student;
   
   $categoryObj = new Student();
   
   $categories=$categoryObj->index();
    if (isset($_SESSION['message'])) {
        echo  $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>

    <a href="./create.php">Create </a>
    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sl=0;
            foreach ($categories as $category) { ?>
                <tr> 
                    <td> <?= ++$sl ?> </td>
                   
                    <td><?= $category['category_id'] ?></td>
                    <td><?= $category['name'] ?></td>
                    <td>
                        <a href="show.php?id=<?= $category['id'] ?>">Show</a>
                        <a href="edit.php?id=<?= $category['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $category['id'] ?>" onclick="return confirm('Are You Sure Want to Delete ?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>

</html>