<?php

include 'function.php';
$data_students = select('SELECT * FROM tbl_students');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--<title>Dashboard Sidebar Menu</title>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/script.js" defer></script>
    <title>Student Apps | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo (2).png">
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/logo (3).png" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name">Students Apps</span>
                    <span class="profession">Hallo Admin</span>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>
                <ul style="padding-left: 0;" class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>

                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Students</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>
                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#" id="logout-link"> <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">Dashboard</div>
        <div class="cards">
            <div class="card-1">
                <div class="card-body">
                    <div class="media"><span class="me-3"><i class="uil uil-users-alt"></i></i></span>
                        <div class="media-body text-white">
                            <p class="mb-1 text-white">Total Students</p>
                            <h3 class="text-white">3180</h3>
                            <div class="progress mb-2 bg-primary">
                                <div class="progress-bar progress-animated bg-white" style="width: 80%;"></div>
                            </div><small>80% Increase in 20 Days</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-2">
                <div class="card-body">
                    <div class="media"><span class="me-3"><i class="uil uil-user"></i></span>
                        <div class="media-body text-white">
                            <p class="mb-1 text-white">New Students</p>
                            <h3 class="text-white">360</h3>
                            <div class="progress mb-2 bg-danger">
                                <div class="progress-bar progress-animated bg-white" style="width: 50%;"></div>
                            </div><small>50% Increase in 20 Days</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-3">
                <div class="card-body">
                    <div class="media"><span class="me-3"><i class="uil uil-graduation-cap"></i></span>
                        <div class="media-body text-white">
                            <p class="mb-1 text-white">Total Course</p>
                            <h3 class="text-white">28</h3>
                            <div class="progress mb-2 bg-success">
                                <div class="progress-bar progress-animated bg-white" style="width: 60%;"></div>
                            </div><small>60% Increase in 20 Days</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-4">
                <div class="card-body">
                    <div class="media"><span class="me-3"><i class="uil uil-dollar-sign-alt"></i></span>
                        <div class="media-body text-white">
                            <p class="mb-1 text-white">Fees Collection</p>
                            <h3 class="text-white">1290$</h3>
                            <div class="progress mb-2 " style="background-color: rgb(104, 29, 173);">
                                <div class="progress-bar progress-animated bg-white" style="width: 35%;"></div>
                            </div><small>35% Increase in 20 Days</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Manage <b>Students</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addStudentModal" class="btn btn-success" data-toggle="modal"><i
                                        class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
                                <a href="#deleteStudentModal1" class="btn btn-danger" data-toggle="modal"><i
                                        class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Faculty</th>
                                <th scope="col">Program Study</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1; ?>
                            <?php foreach ($data_students as $tbl_students): ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?= $id++ ?></td>
                                <td><?= $tbl_students['nim'] ?></td>
                                <td><?= $tbl_students['fullname'] ?></td>
                                <td><?= $tbl_students['email'] ?></td>
                                <td><?= $tbl_students['faculty'] ?></td>
                                <td><?= $tbl_students['programstudy'] ?></td>
                                <td><img style="width:100px;" src="img/<?= $tbl_students['image'] ?>" alt=""></td>
                                <td>
                                    <a href="#editStudentModal<?= $id ?>" class="edit" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteStudentModal<?= $id ?>" class="delete" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>

                            <!-- Edit Modal HTML -->
                            <div id="editStudentModal<?= $id ?>" class="modal fade" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="editdata.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?= $tbl_students['id'] ?>">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Student</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="text" class="form-control" name="nim" id="nim" value="<?php echo isset(
                                                        $tbl_students['nim']
                                                    )
                                                        ? $tbl_students['nim']
                                                        : ''; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo isset(
                                                        $tbl_students['fullname']
                                                    )
                                                        ? $tbl_students['fullname']
                                                        : ''; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo isset(
                                                        $tbl_students['email']
                                                    )
                                                        ? $tbl_students['email']
                                                        : ''; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Faculty</label>
                                                    <input type="text" class="form-control" name="faculty" id="faculty" value="<?php echo isset(
                                                        $tbl_students['faculty']
                                                    )
                                                        ? $tbl_students['faculty']
                                                        : ''; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Program Study</label>
                                                    <input type="text" class="form-control" name="programstudy" id="programstudy" value="<?php echo isset(
                                                        $tbl_students['programstudy']
                                                    )
                                                        ? $tbl_students['programstudy']
                                                        : ''; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    </br>
                                                    <img src="img/<?= $tbl_students['image']; ?>" style="width: 100px; float:left; margin-bottom:5px;" alt="">
                                                    <input type="file" class="form-control" name="image" id="image" value="<?php echo isset(
                                                        $tbl_students['image']
                                                    )
                                                        ? $tbl_students['image']
                                                        : ''; ?>" required>
                                                        <i style="float:left; font-size:11px; color:red; font-style:italic">Abaikan jika tidak mengubah image</i>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <input type="submit" class="btn btn-info" name="edit" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!-- Delete Modal HTML -->
                            <div id="deleteStudentModal<?= $id ?>" class="modal fade" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="$_POST" action="deletedata.php">
                                        <input type="hidden" name="id" value="<?= $tbl_students['id'] ?>">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Student</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete these Records?</p>
                                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item"><a href="#">Previous</a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal HTML -->
        <div id="addStudentModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="adddata.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Student</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim" required>
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="fullname" id="fullname" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label>Faculty</label>
                                <input class="form-control" name="faculty" id="faculty" required></input>
                            </div>
                            <div class="form-group">
                                <label>Program Study</label>
                                <input type="text" class="form-control" name="programstudy" id="programstudy" required>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" id="image" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="add" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>