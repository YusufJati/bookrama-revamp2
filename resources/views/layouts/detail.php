<?php include('header.php'); ?>
<body>
    <main class="container mt-5 w-75" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) . '?isbn=' . $isbn ?>">
        <a href="view_book.php" class="btn btn-secondary mb-3">Kembali</a>
        
        <section class="book-details">
            <div class="row ">
                <div class="col-md-3">
                    <img src="<?php  echo $img_url ?>" alt="Judul Buku" class="img-thumbnail rounded">
                </div>
                <div class="col-md-8">
                    <h1 class="display-4 font-weight-bold"><?php echo $title  ?></h1>
                    <p class="lead"><?php echo $author  ?></p>
                    <table class="table">
                        <tr>
                            <th>Jumlah Halaman</th>
                            <td><?php echo $jml_halaman  ?></td>
                            
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td><?php echo $tgl_terbit  ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?php echo $category  ?></td>
                        </tr>
                        <tr>
                            <th>ISBN</th>
                            <td><?php echo $isbn  ?></td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td><?php echo $penerbit  ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mt-4 p-4 rounded"  style="background: rgba(0, 123, 255, 0.1)">
                <div class="col">
                    <h2>Sinopsis</h2>
                    <p class="text-justify">
                        <?php echo $review ?>
                    </p>
                </div>
            </div>
        </section>

        <section class="customer-reviews mt-5">
        <h2>Ulasan</h2>
            <?php
                $query = "SELECT reviews.name, reviews.desc, reviews.rating FROM reviews WHERE reviews.isbn='$isbn'";
                $result = $db->query($query);
                while($row = $result->fetch_object()){
                    echo '<div class="review mb-3">';
                    echo '<div class="d-flex align-items-center">';
                    echo '<div class="ms-3">';
                    echo '<div class="rating">';
                    for($i = 0; $i < $row->rating; $i++){
                        echo '⭐';
                    }
                    echo '</div>';
                    echo '<h3 class="h6 mb-0">'.$row->name.'</h3>';
                    echo '<p class="mb-0">'.$row->desc.'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        <section class="add-review mt-5">
            <h2>Tambahkan Ulasan Anda</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Ulasan:</label>
                    <textarea class="form-control" id="desc" rows="3" name="desc" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <select class="form-control" id="rating"  name="rating" required>
                        <option value='1'>⭐</option>
                        <option value='2'>⭐⭐</option>
                        <option value='3'>⭐⭐⭐</option>
                        <option value='4'>⭐⭐⭐⭐</option>
                        <option value='5'>⭐⭐⭐⭐⭐</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-3" name="submit" value="submit">tambahkan Ulasan</button>
            </form>
        </section>
    </main>
<?php include('footer.php') ?>