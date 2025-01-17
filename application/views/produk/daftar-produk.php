<section class="container mt-n5">
  <div class="row">
    <div class="col-12 col-md-4 text-white mb-3">
      <h2 class="text-bold text-uppercase">daftar Produk</h2>
      <p class="display-5 text-uppercase">kategori produk</p>

      <ul class="list-group">
        <?php foreach ($kategori as $k) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center produk-kategori">
          <a href="" class="kategori-produk" data-id="<?= $k['id_kategori']; ?>"
            data-nama="<?= $k['nama_kategori']; ?>"><?= $k['nama_kategori']; ?></a>
          <span class="badge badge-primary badge-pill">
            <?php
              $id = $k['id_kategori'];
              $query = "SELECT COUNT(id_kategori) as jml FROM produk WHERE id_kategori = $id";
              $query = $this->db->query($query)->row_array();
              echo $query['jml'];
              ?>
          </span>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
</section>