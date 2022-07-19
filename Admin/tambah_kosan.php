<?php
    include "header.php";
?>
<div class="card-body">
    <div class="">                
        <div class="row"> 
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card card-header" style="width:100%">
                    <h2>Input Data Kosan</h2>
                </div>
                    <div class="card card-body">
                            <table class="table table-striped table-bordered table-hover table-responsive">
                                
                                    <tr>
                                        <td>Nama Kosan</td>
                                        <td><input type="text" class="form-control" name="nama_kosan" style="width:60%"  required></td>
                                    </tr>
                                    <tr>
                                    <td>Alamat Kosan</td>
                                            <td><textarea name="alamat_kosan" class="form-control" style="width:800px; height:100px" required></textarea></td>
                                        </tr>
                                         <tr>
                                            <td>Tipe Kosan</td>
                                            <td><input type="radio" class="form-radio" name="tipe_kosan" value="Laki-Laki"> Laki-Laki<br>
                                            <input type="radio"  class="form-radio"name="tipe_kosan" value="Perempuan"> Perempuan<br>
                                            <input type="radio"  class="form-radio"name="tipe_kosan" value="Campuran"> Campuran</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kamar</td>
                                            <td><input type="text" class="form-control" name="jumlah_kamar" style="width:200px"  required></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah kamar yang sudah diisi</td>
                                            <td><input type="text" class="form-control" name="sudah_diisi" style="width:200px"  required></td>
                                        </tr>
                                        <tr>
                                            <td>Fasilitas</td>
                                            <td><textarea name="fasilitas" class="form-control form-text" value="fasilitas" style="width:100%; height:100px" required></textarea></td>
                                        </tr>
                                         <tr>
                                            <td>Deskripsi Kosan</td>
                                            <td><textarea name="deskripsi" class="form-control" value="deskripsi" style="width:100%; height:300px" required></textarea></td>
                                        </tr>
                                         <tr>
                                            <td>Harga Kosan</td>
                                            <td><input type="text" class="form-control" name="harga_total" style="width:300px"  required></td>
                                        </tr>
                                        <tr>
                                            <td>Gambar Kosan</td>
                                            <td><input type="file" name="gambar" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" class="btn btn-primary" name="tambah_kosan" value="Tambah Kosan"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div></div></div></div>
<?php
    include "footer.php";
?>