<?php include 'header.php'; ?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
    <h5 class="card-header">Data user</h5>
        <div class="card-body">
        <h5 class="card-title">Lihat Data user</h5>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
        Tambah Data user
        </button>
        <table class="table table-bordered mt-3">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        </tr>
        </thead>
            <tbody>
            <?php
                $i = 1;
                $data = mysqli_query($con, "SELECT * FROM user");
                foreach ($data as $row) : ?>
                    <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $row['nama_user'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td>
                    <a class="badge badge-success" href="user_edit.php?id_user=<?= $row['id_user'] ?>">Edit</a>
                    <a class="badge badge-danger" href="user_delete.php?id_user=<?= $row['id_user'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="user_add.php" method="POST">
                    <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_user" class="form-control">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    </div>
                <div class="form-group">
                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
