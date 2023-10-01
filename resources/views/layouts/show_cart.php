<?php include('header.php') ?>
<br>
<div class="card mt-4">
<ul class="nav nav-pills mb-2">
        <!--<li class="nav-item">
            <a class="nav-link" href="view_book.php">Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="catalog.php">Katalog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="show_cart.php">Keranjang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="statistik.php">Statistik</a>
        </li>-->
</ul>
    <div class="card-header">Keranjang</div>
    <div class="card-body">
        <br>
        <table class="table table-striped">
            <tr>
                <th>ISBN</th>
                <th>Author</th>
                <th>Title</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Price * Qty</th>
            </tr>
        </table>
        Total items = <?php echo $sum_qty ?><br><br>
        <div class="d-flex justify-content-between">
            <div>
                <a class="btn btn-primary" href="catalog.php">Continue Shopping</a>
                <a class="btn btn-danger" href="delete_cart.php">Empty Cart</a>
            </div>
            <div>
                <form method="POST">
                    <button class="btn btn-success" name="submit" type="submit">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
