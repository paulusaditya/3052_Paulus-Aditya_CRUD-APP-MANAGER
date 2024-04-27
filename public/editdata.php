        <!-- Edit Modal HTML -->
        

        <?php
        include "function.php";

            $id = (isset($_GET['id'])) ? (int)$_GET['id'] : null;

            if ($id !== null) {
                $tbl_students = select("SELECT * FROM tbl_students WHERE id = $id");

                // Cek apakah ada data yang ditemukan
                if (!empty($tbl_students)) {
                    $tbl_students = $tbl_students[0];
                } else {
                    // Handle ketika data tidak ditemukan
                    // Misalnya, arahkan pengguna ke halaman lain atau tampilkan pesan kesalahan
                    // Contoh:
                    echo "Data not found.";
                    exit; // Hentikan eksekusi kode selanjutnya
                }
            }
        ?>




<div id="editStudentModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                <input type="text" name="id" value="<?= $tbl_students['id']; ?>">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo isset($tbl_students['nim']) ? $tbl_students['nim'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo isset($tbl_students['fullname']) ? $tbl_students['fullname'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo isset($tbl_students['email']) ? $tbl_students['email'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Faculty</label>
                        <input type="text" class="form-control" name="faculty" id="faculty" value="<?php echo isset($tbl_students['faculty']) ? $tbl_students['faculty'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Program Study</label>
                        <input type="text" class="form-control" name="programstudy" id="programstudy" value="<?php echo isset($tbl_students['programstudy']) ? $tbl_students['programstudy'] : ''; ?>" required>
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