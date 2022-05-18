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
     <?php
     $data = file('catatan.txt', FILE_IGNORE_NEW_LINES); 
     $id_catatan = $_GET['id_catatan'];
     foreach($data as $value){
     $pecah = explode('|', $value);
     if($pecah['0']==$id_catatan){
?>
<form action="simpan_edit_catatan.php" method="post">
    <input type= "hidden" name= "id_catatan" value="<?= $pecah['0']; ?>">
    <div class="form-group">
        <label>Pilih Tanggal</label>
        <input value="<?= $pecah['3']; ?>" name="Tanggal" type="date" required class="form-control" placeholder="Masukkan Tanggal">
    </div>
    <div class="form-group">
        <label>Pilih Jam</label>
        <input value="<?= $pecah['4']; ?>"name="jam" type="time" required class="form-control" placeholder="Masukkan Jam">
    </div>
    <div class="form-group">
        <label>Pilih Lokasi</label>
        <input value="<?= $pecah['5']; ?>" name="lokasi" type="text" required class="form-control" placeholder="Masukkan Lokasi">
    </div>
    <div class="form-group">
        <label>Pilih Suhu Tubuh</label>
        <input value="<?= $pecah['6']; ?>" name="suhu" type="text" required class="form-control" placeholder="Masukkan Suhu">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class= "fa fa-save"></i> SIMPAN </button>
        <button type="reset" class="btn btn-warning"><i class= "fa fa-trash"></i> KOSONGKAN </button>
    <div>
    </form>
    <?php } } ?> 
    </div>
</div>

