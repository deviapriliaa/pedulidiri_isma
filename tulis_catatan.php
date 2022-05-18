<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
                                    

    </div>
    <div class="card-body">
<form action="simpan_catatan.php" method="post">
    <div class="form-group">
        <label>Pilih Tanggal</label>
        <input name="Tanggal" type="date" required class="form-control" placeholder="Masukkan Tanggal">
    </div>
    <div class="form-group">
        <label>Pilih Jam</label>
        <input name="jam" type="time" required class="form-control" placeholder="Masukkan Jam">
    </div>
    <div class="form-group">
        <label>Pilih Lokasi</label>
        <input name="lokasi" type="text" required class="form-control" placeholder="Masukkan Lokasi">
    </div>
    <div class="form-group">
        <label>Pilih Suhu Tubuh</label>
        <input name="suhu" type="text" required class="form-control" placeholder="Masukkan Suhu">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class= "fa fa-save"></i> SIMPAN </button>
        <button type="reset" class="btn btn-warning"><i class= "fa fa-trash"></i> KOSONGKAN </button>
</form>
    </div>
</div>