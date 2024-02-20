<?php
include "layout/header.php";
include "config-db.php";

$sql = 'select * from buku';
$hasil = $connect->query($sql);
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <?php include "layout/sidebar.php" ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">

            <!-- Navbar Start -->
            <?php include "layout/navbar.php" ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="vh-100 bg-secondary rounded align-items-center justify-content-center mx-0 p-5">
                    <h1 class="text-center mb-5">Data Tabel Buku</h1>
                    <a href="/CRUD/Buku/add_buku.php" class="btn btn-outline-success m-2">Add+</a>
                    <!-- Data Tabel -->
                    <table class="table">
                        <thead>
                            <tr style="color: white" class="bg-transparent rounded p-5 mx-0">
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Judul</th>
                                <th scope="col">No_ISBN</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga_Pokok</th>
                                <th scope="col">Harga_ Jual</th>
                                <th scope="col">PPN</th>
                                <th scope="col">Diskon</th>
                                <th scope="col">Delete & Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php
                            while ($item = $hasil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $i++ ?></th>
                                    <td><?= $item['id_buku'] ?></td>
                                    <td><?= $item['judul'] ?></td>
                                    <td><?= $item['noisbn'] ?></td>
                                    <td><?= $item['penulis'] ?></td>
                                    <td><?= $item['penerbit'] ?></td>
                                    <td><?= $item['tahun'] ?></td>
                                    <td><?= $item['stok'] ?></td>
                                    <td><?= $item['harga_pokok'] ?></td>
                                    <td><?= $item['harga_jual'] ?></td>
                                    <td><?= $item['ppn'] ?></td>
                                    <td><?= $item['diskon'] ?></td>
                                    <td>
                                        <a href="/CRUD/Distributor/update_distributor.php?id_distributor=<?= $item['id_distributor'] ?>" class="btn btn-outline-info me-2">Update</a>
                                        <a href="/CRUD/Distributor/delete_distributor.php?id_distributor=<?= $item['id_distributor'] ?>" class="btn btn-outline-primary">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <?php include "layout/footer.php" ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>