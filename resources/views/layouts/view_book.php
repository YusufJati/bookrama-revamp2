<?php include('header.php') ?>

<div class="card mt-5">
    <ul class="nav nav-pills mb-2">    
        <!--<li class="nav-item">
            <a class="nav-link active" href="view_book.php">Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="catalog.php">Katalog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="show_cart.php">Keranjang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="statistik.php">Statistik</a>
        </li>-->
    </ul>
    <div class="card-header">Books Data</div>
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <a href="add_book.php" class="btn btn-primary">+ Tambah Data Buku</a>
            <!-- <form action="" class="form-groupm mx-z" method="post">
                <input type="text" name="search" id="search" class="form-check" autofocus placeholder="Masukkan keyword"><br>
                <select id="categoryFilter">
                    <option value="">--Select a Category--</option>
                    <option value="Romance">Romance</option>
                    <option value="Motivation">Motivation</option>
                    <option value="Education">Education</option>
                </select>
                <div id="filteredResults"></div>
                <input 
                    type="number" id="form1" class="form-control" 
                    style="min-width: 100px;" 
                    name="minprice" id="minprice" placeholder="Minimum Price" min="0" 
                    step="0.01"  pattern="^\d+(?:\.\d{1,2})?$" 
                    value=""/>

                <input 
                    type="number" 
                    id="form1" 
                    class="form-control" 
                    style="min-width: 100px;" 
                    name="maxprice" id="maxprice" 
                    placeholder="Maximum Price" min="0" step="0.01"  
                    pattern="^\d+(?:\.\d{1,2})?$" 
                    value=""/>
                <button type="submit" class="btn btn-primary" value="submit">Submit
            </form> -->
            <form action="filter_books.php" method="post" id="filterForm" class="mx-2 d-flex justify-content-between">
                <input type="text" name="search" id="search" class="form-check" autofocus placeholder="Masukkan keyword" class="mx-2"><br>
                <select id="categoryFilter" name="category" class="mx-2">
                    <option value="">--Select a Category--</option>
                    <option value="Education">Education</option>
                    <option value="Fiction">Fiction</option>
                    <option value="Motivation">Motivation</option>
                    <option value="Romance">Romance</option>
                </select>
                <input
                    type="number"
                    class="form-control mx-2"
                    style="min-width: 100px;"
                    name="minprice"
                    id="minprice"
                    placeholder="Minimum Price"
                    min="0"
                    step="0.01"
                    pattern="^\d+(?:\.\d{1,2})?$"
                    value=""
                />
                <input
                    type="number"
                    class="form-control mx-2"
                    style="min-width: 100px;"
                    name="maxprice"
                    id="maxprice"
                    placeholder="Maximum Price"
                    min="0"
                    step="0.01"
                    pattern="^\d+(?:\.\d{1,2})?$"
                    value=""
                />
                <button type="submit" class="btn btn-primary" value="submit" class="mx-2">Submit</button>
            </form>
        </div>
        <div id="container">
        <table class="table table-striped" id="filteredResultsContainer"> 
            <tr>
                <th>ISBN</th>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </table>
        </div>
    </div>
</div>
<script>
    // Dapatkan elemen select dan tambahkan event listener
    const categoryFilter = document.getElementById('categoryFilter');
    categoryFilter.addEventListener('change', function () {
        // Dapatkan nilai kategori yang dipilih
        const selectedCategory = categoryFilter.value;

        // Dapatkan elemen tabel yang akan diperbarui
        const tableBody = document.querySelector('.table tbody');

        // Temukan semua baris dalam tabel
        const rows = tableBody.querySelectorAll('tr');

        // Loop melalui setiap baris
        rows.forEach(function (row) {
            // Dapatkan kolom kategori dalam setiap baris
            const categoryColumn = row.querySelector('td:nth-child(3)');

            // Dapatkan nilai kategori dalam kolom kategori
            const rowCategory = categoryColumn.textContent.trim();

            // Periksa apakah nilai kategori dalam baris cocok dengan kategori yang dipilih
            if (selectedCategory === '' || rowCategory === selectedCategory) {
                // Tampilkan baris jika cocok atau tidak ada kategori yang dipilih
                row.style.display = 'table-row';
            } else {
                // Sembunyikan baris jika tidak cocok dengan kategori yang dipilih
                row.style.display = 'none';
            }
        });
    });
</script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="js/script.js"></script>
<?php include('footer.php') ?>