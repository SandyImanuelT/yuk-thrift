<section class="container mt-n5">
  <div class="d-flex justify-content-between mb-3">
    <h2 class="text-bold text-uppercase mb-3">Tambah produk</h2>

    <a href="<?= base_url('produk'); ?>" class="btn btn-sm btn-outline-light mb-3" data-toggle="tooltip"
      data-placement="top" title="Kembali" id="tambah">
      <i data-feather="arrow-left"></i>
    </a>
  </div>
  <?= $this->session->flashdata('pesan'); ?>
  <div class="card">
    <div class="card-body p-4">
      <form method="POST" action="<?= base_url('produk/tambahproduk'); ?>" enctype="multipart/form-data">
        <div class="form-group pb-3">
          <label for="nama-produk">Nama Produk</label>
          <input type="text" name="nama_produk" id="nama-produk" class="form-control 
          <?php
          echo form_error('nama_produk') ? "border-danger" : null;
          ?>
          " value="<?= set_value('nama_produk'); ?>" />
          <?= form_error('nama_produk', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="form-group pb-3">
          <label for="nama-produk">Asal Produk</label>
          <input type="text" name="label_produk" id="label-produk" class="form-control 
          <?php
          echo form_error('label_produk') ? "border-danger" : null;
          ?>
          " value="<?= set_value('label_produk'); ?>" />
          <?= form_error('label_produk', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class=" form-group pb-3">
          <label>Ukuran</label>
          <br />
          <div class="form-check form-check-inline">
            <input type="checkbox" name="ukuran[]" id="S" class="form-check-input" value="S" />
            <label for="S" class="form-check-label">S</label>
          </div>

          <div class="form-check form-check-inline">
            <input type="checkbox" name="ukuran[]" id="M" class="form-check-input" value="M" />
            <label for="M" class="form-check-label">M</label>
          </div>

          <div class="form-check form-check-inline">
            <input type="checkbox" name="ukuran[]" id="L" class="form-check-input" value="L" />
            <label for="L" class="form-check-label">L</label>
          </div>

          <div class="form-check form-check-inline">
            <input type="checkbox" name="ukuran[]" id="XL" class="form-check-input" value="XL" />
            <label for="XL" class="form-check-label">XL</label>
          </div>

          <div class="form-check form-check-inline">
            <input type="checkbox" name="ukuran[]" id="XXL" class="form-check-input" value="XXL" />
            <label for="XXL" class="form-check-label">XXL</label>
          </div>
          <?= form_error('ukuran[]', '<br><small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="form-group pb-3">
          <label for="stok">Stok</label>
          <input type="number" name="stok" id="stok" class="form-control
          <?php
          echo form_error('stok') ? "border-danger" : null;
          ?>
          " value="<?= set_value('stok'); ?>" />
          <?= form_error('stok', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="form-group pb-3">
          <label for="kategori">Kategori</label>
          <select name="kategori" id="kategori" class="custom-select">
            <option value="">Pilih Kategori</option>
            <?php foreach ($kategori as $k) : ?>
            <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('kategori', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="form-group pb-3">
          <label for="deskripsi">deskripsi produk</label>
          <textarea name="deskripsi" id="deskripsi"> <?= set_value('deskripsi'); ?></textarea>
          <?= form_error('deskripsi', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="form-group pb-3">
          <label for="harga">Harga</label>
          <input type="number" name="harga" id="harga" class="form-control
          <?php
          echo form_error('harga') ? "border-danger" : null;
          ?>
          " value="<?= set_value('harga'); ?>" />
          <?= form_error('harga', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="form-group">
          <label for="foto">Foto produk</label>
          <input type="file" name="foto" id="foto" class=" form-control-file" onchange="loadFile(event)">
          <?= form_error('foto', '<small class="pl-2 text-danger">', '</small>'); ?>
        </div>

        <div class="row">
          <div class="col-md-6 col-12">
            <div class="form-group mt-5">
              <button type="submit" class="btn btn-dark">Simpan</button>
            </div>
          </div>

          <div class="col-md-6 col-12">
            <img id="img" class="img-fluid">
          </div>
        </div>
      </form>
    </div>
  </div>
</section>