<?php 

require_once "../connect.php";

$key = $_GET['key'];

$query = "SELECT * FROM wisata WHERE nama_wisata LIKE '%$key%'";

$result = mysqli_query($con, $query);

?>

<?php while($wisata = mysqli_fetch_object($result)) { ?>

<div class="col-lg-4 col-md-6 col-sm-6">
    <!--  Single Grid product Start -->
    <div class="single-grid-product mb-40">
        <div class="product-image">

            <a
                href="detail.php?kode_wisata=<?php echo $wisata->kd_wisata; ?>">
                <img src="./myimg/sumenep/<?php echo $wisata->gambar; ?>"
                    class="img-fluid" alt="" style="height:300px;">
            </a>

            <div class="product-action">
                <ul>
                    <li> <a
                            href="cart.php?kode_wisata=<?php echo $wisata->kd_wisata; ?> &action=add"><i
                                class="fa fa-map-marker"></i></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="product-content">
            <h3 class="title"> <a
                    href="detail.php?kode_wisata=<?php echo $wisata->kd_wisata; ?>"><?php echo $wisata->nama_wisata; ?></a>
            </h3>
            <p class="product-price"><span
                    class="discounted-price">Rp.
                    <?php echo $wisata->harga_tiket; ?> / Orang</span>
            </p>

        </div>
    </div>

</div>

<?php } ?>