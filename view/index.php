<?php
require_once('header-sidebar.php');
?>
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->

        <div class="row">
            <!-- column -->
            <div class="col-sm-12" id="home">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Welcome To Himakom</h4><br>
                        <img src="assets/images/himakom.jpeg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- column -->
            <div class="col-sm-12" id="struktur">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Video Perkenalan Himakom</h4>
                        <div class="embed-responsive embed-responsive-16by9">
                        
<iframe class="img-fluid" src="https://www.youtube.com/embed/6S3Ti6499WE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- column -->
            <div class="col-sm-12" id="event">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Our Event <span>  <?php if($session->check("username")){?><button class="btn btn-primary float-right tambahEvent">Buat Acara</button><?php }?></span></h4>
                      
                        <div id="calendar"></div>
                        
                    </div>
                </div>
            </div>

        </div>
        <?php if($session->check("username") && $session->checkValue('level','1')){?>
        <div class="row" >
            <!-- Column -->
            <!-- column -->
            <div class="col-lg-12" >
                <div class="card" id="proker">
                    <div class="card-body">
                        <h4 class="card-title text-center">Our Proker 2021-2022</h4>
                        <button class="btn btn-primary float-left tambahProker">Tambah</button>
                        <br><div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table user-table ">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Kegiatan</th>
                                        <th class="border-top-0" style="width : 50%">Deskripsi</th>
                                        <th class="border-top-0">Waktu</th>
                                        <?php if($session->check("username")){ ?><th class="border-top-0">Action</th><?php }?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 0;
                                    while($row = $data2->fetch(PDO::FETCH_ASSOC)){
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no?></td>
                                        <td><?php echo $row['nama']?></td>
                                        <td><?php echo $row['deskripsi']?></td>
                                        <td><?php echo date_format(new DateTime($row['deadline']), 'F Y') ?></td>
                                        <?php if($session->check("username")){ ?>
                                        <td>
                                            <a href="#proker" data-id="<?php echo $row['id_proker'] ?>" data-tanggal="<?php echo date_format(new DateTime($row['deadline']), 'Y-m-d') ?>" data-nama="<?php echo $row['nama'] ?>" data-des="<?php echo $row['deskripsi'] ?>" class="text-success editProker"><i class="mdi mdi-grease-pencil"></i></a> &nbsp; &nbsp;
                                            <a href="#proker" data-id="<?php echo $row['id_proker'] ?>" data-nama="<?php echo $row['nama'] ?>" class="text-danger deleteProker"> <i class="mdi mdi-cup-off"></a></i>
                                        </td><?php 
                                        } else{
                                            ?>
                  
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <?php 
                                 if($data2->rowCount() <= 0) { ?>
                                    <p class='text-center'> Belum Ada Data</p>
                                 <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php
        }
        ?>
        
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-6 col-xlg-3" >
                <!-- Column -->
                <div class="card" id="dokumentasi">
                    <div class="card-body bg-info">
                        <h4 class="text-white card-title">Dokumentasi</h4>
                        <h6 class="card-subtitle text-white mb-0 op-5">Dokumentasi kegiatan Himakom</h6>
                    </div>
                    <div class="card-body">
                        <div class="message-box contact-box">
                        <?php if($session->check("username")){?>
                            <h2 class="add-ct-btn"><a href="#dokumentasi"
                                    class="btn btn-circle btn-lg btn-success waves-effect waves-dark tambahDokumentasi">+</a>
                            </h2>
                            <?php } ?>
                            <div class="message-widget contact-widget card-wrapper-scroll-y my-custom-scrollbar2">
                                <!-- List Dokumentasi -->
                                <?php while($row = $listDokumentasi->fetch(PDO::FETCH_ASSOC)): ?> 
                                <?php if($session->check("username")): ?>
                                <a href="#dokumentasi" class="d-flex align-items-center detailDokumentasi" data-id="<?php echo $row['id_dok'] ?>" data-nama="<?php echo $row['nama'] ?>" data-link="<?php echo $row['link'] ?>">
                                <?php else: ?>
                                <a href="<?php echo $row['link']?>" class="d-flex align-items-center" target="_blank" >
                                <?php endif; ?>
                                    <div class="user-img mb-0"> <img src="assets/images/Logo HMK.png"
                                            alt="user" class="img-circle">  </div>
                                    <div class="mail-contnet">
                                        <h5 class="mb-0"><?php echo $row['nama']?></h5>
                                    </div>
                                </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xlg-3" >
                <!-- Column -->
                <div class="card" id="pengurusDepartement">
                    <div class="card-body bg-info">
                        <h4 class="text-white card-title">Pengurus & Anggota</h4>
                        <h6 class="card-subtitle text-white mb-0 op-5">List Pengurus & Anggota Himakom</h6>
                    </div>
                    <div class="card-body">
                        <div class="message-box contact-box ">
                        <?php if($session->check("username")){?>
                            <h2 class="add-ct-btn"><button type="button"
                                    class="btn btn-circle btn-lg btn-success waves-effect waves-dark tambahAnggota">+</button>
                            </h2>
                            <?php } ?>
                            <div class="message-widget contact-widget card-wrapper-scroll-y my-custom-scrollbar2">
                                <!-- List Anggota -->
                                <?php while($row = $listAnggota->fetch(PDO::FETCH_ASSOC)):?>
                                <?php if($session->check("username")): ?>
                                    <a href="#pengurusDepartement" class="d-flex align-items-center detilAnggota" data-id="<?php echo $row['id_anggota'] ?>" data-nrp="<?php echo $row['nrp'] ?>" data-nama="<?php echo $row['nama'] ?>" data-divisi="<?php echo $row['id_divisi']?>" data-ig="<?php echo $row['instagram']?>">
                                <?php else: ?>
                                    <a href="<?php echo $row['instagram'] != '' ? 'https://www.instagram.com/'. $row['instagram'] : '#pengurusDepartement' ?>" class="d-flex align-items-center" target="<?php echo $row['instagram'] != '' ? '_blank' : '' ?>">
                                <?php endif; ?>
                                    <div class="user-img mb-0"> <img src="assets/images/users/pp.png"
                                            alt="user" class="img-circle"> 
                                    </div>
                                    <div class="mail-contnet">
                                        <h5 class="mb-0"><?php echo $row['nama']?></h5> <span
                                            class="mail-desc"><?php echo $row['jabatan']?></span>
                                    </div>
                                </a>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
        </div>

        
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->

        
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

 <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Material Pro Admin by <a href="https://www.wrappixel.com/">wrappixel.com </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
 <!-- Modal Login -->
 <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login Admin</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="username" class="col-form-label">Username</label>
                    <input type="text" class="form-control" id="nama_matkul" name="username">
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Password</label>
                    <input type="password" class="form-control" id="semester" name="password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

 <!-- Modal Tambah Proker -->
 <div class="modal fade" id="tambahProker" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Proker</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="username" class="col-form-label">Kegiatan</label>
                    <input type="text" class="form-control" id="" name="kegiatan" placeholder="kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" id="" name="deskripsi"  placeholder="deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Waktu</label>
                    <input type="date" class="form-control" id="" name="tanggal" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="tambah_proker" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

 <!-- Modal Edit Proker -->
 <div class="modal fade" id="editProker" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Proker</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="username" class="col-form-label">Kegiatan</label>
                    <input type="text" class="form-control" id="editKegiatan" name="edit_kegiatan" required>
                    <input type="hidden" class="form-control" id="editId" name="edit_id" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" id="editDeskripsi" name="edit_deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Waktu</label>
                    <input type="date" class="form-control" id="editWaktu" name="edit_waktu" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="edit_proker" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

 <!-- Modal Delete Proker -->
 <div class="modal fade" id="deleteProker" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Proker</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="deleteId" name="delete_id">
                </div>
                <p class="deskripsiDeleteProker"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="delete_proker" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Event -->
<div class="modal fade" id="tambahEvent" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Event</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="username" class="col-form-label">Kegiatan</label>
                    <input type="text" class="form-control" id="" name="tambahEventKegiatan"  placeholder="kegiatan" required>
                    
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Dari Tanggal</label>
                    <input type="date" class="form-control" id="" name="tambahWaktuKegiatan" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Sampai</label>
                    <input type="date" class="form-control" id="" name="tambahWaktuKegiatanSampai" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="tambah_event" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Dokumentasi -->
<div class="modal fade" id="tambahDokumentasi" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Dokumentasi</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="username" class="col-form-label">Judul Kegiatan</label>
                    <input type="text" class="form-control" id="tambahJudulDokumentasi" name="tambahJudulDokumentasi" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Link Dokumentasi</label>
                    <textarea class="form-control" id="tambahLinkDokumentasi" name="tambahLinkDokumentasi" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="tambah_dokumentasi" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Dokumentasi -->
<div class="modal fade" id="detailDokumentasi" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Dokumentasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="username" class="col-form-label">Judul Kegiatan</label>
                    <input type="text" class="form-control" id="detilDok_judul" name="detilDok_judul" required>
                    <input type="hidden" class="form-control" id="detilDok_id" name="detilDok_id">
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Link Dokumentasi</label>
                    <textarea class="form-control" id="detilDok_link" name="detilDok_link" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="delete_dokumentasi" class="btn btn-danger text-light">Delete</button>
                <a href="#" class="btn btn-info text-light viewDetail" target="_blank">View</a>
                <button type="submit" name="edit_dokumentasi" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Anggota -->
<div class="modal fade" id="tambahAnggota" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="nrp" class="col-form-label">NRP</label>
                    <input type="text" class="form-control" id="tambahAnggota_nrp" name="tambahAnggota_nrp" required>
                </div>
                <div class="form-group">
                    <label for="nama lengkap" class="col-form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="tambahAnggota_nama" name="tambahAnggota_nama" required>
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-form-label">Jabatan</label>
                    <select class="form-select " id="tambahAnggota_jabatan" name="tambahAnggota_jabatan" required>
                        <?php while($row = $listJabatan->fetch(PDO::FETCH_ASSOC)): ?>
                            <option value="<?php echo $row['id_divisi']?>"><?php echo $row['nama']?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nrp" class="col-form-label">Username Instagram</label>
                    <input type="text" class="form-control" id="tambahAnggota_ig" name="tambahAnggota_ig" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="tambah_anggota" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Anggota -->
<div class="modal fade" id="detilAnggota" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Anggota</h5>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label for="nrp" class="col-form-label">NRP</label>
                    <input type="text" class="form-control" id="detilAnggota_nrp" name="detilAnggota_nrp" required>
                    <input type="hidden" class="form-control" id="detilAnggota_id" name="detilAnggota_id">
                </div>
                <div class="form-group">
                    <label for="nama lengkap" class="col-form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="detilAnggota_nama" name="detilAnggota_nama" required>
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-form-label">Jabatan</label>
                    <select class="form-select " id="detilAnggota_jabatan" name="detilAnggota_jabatan" required>
                        <?php while($row = $listJabatan2->fetch(PDO::FETCH_ASSOC)): ?>
                            <option value="<?php echo $row['id_divisi']?>"><?php echo $row['nama']?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nrp" class="col-form-label">Username Instagram</label>
                    <input type="text" class="form-control" id="detilAnggota_ig" name="detilAnggota_ig" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="delete_anggota" class="btn btn-danger text-light">Delete</button>
                <button type="submit" name="edit_anggota" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Acara -->
<div class="modal fade" id="detilAcara" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if($session->check("username")) :?>
            <form method="post">
                <div class="form-group">
                        <label for="username" class="col-form-label">Kegiatan</label>
                        <input type="text" class="form-control" id="editTitle" name="editEventKegiatan"  placeholder="kegiatan">
                        <input type="hidden" class="form-control" id="idKegiatan" name="IDEventKegiatan" >
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Dari Tanggal</label>
                        <input type="date" class="form-control" value="2018-07-22" id="editTanggal" name="editWaktuKegiatan">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Sampai</label>
                        <input type="date" class="form-control" id="editSampai" name="editWaktuKegiatanSampai">
                    </div>
                </div>
                <div class="modal-footer">
                    <button button type="submit" name="delete_event" class="btn btn-danger text-light">Delete</button>
                    <button type="submit" name="edit_event" class="btn btn-primary">Edit</button>
                </div>
            </form>
            <?php else: ?>
                <p><b>Nama Acara : </b><span id="textAcara"></span></p>
                <p><b>Tanggal Mulai : </b><span id="textMulai"></span></p>
                <p><b>Tanggal Berakhir : </b><span  id="textBerakhir"></span></p>
                <p><b>Status : </b><span id="textStatus"></span></p>
            <?php endif; ?>
            
        </div>
    </div>
</div>

    <script>
    var tanggal = "<?php echo date('Y-m-d')?>";

    $(document).on('click','.login',function(){
        $('#login').modal('show'); 
    });

    $(document).on('click','.tambahProker',function(){
        $('#tambahProker').modal('show'); 
    });

    $(document).on('click','.editProker',function(){
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        var des = $(this).attr('data-des');
        var tanggal = $(this).attr('data-tanggal');

        $('#editId').val(id);
        $('#editKegiatan').val(nama);
        $('#editDeskripsi').val(des);
        $('#editWaktu').val(tanggal);
        $('#editProker').modal('show'); 
        console.log(tanggal);
    });

    $(document).on('click','.deleteProker', function(){
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        $('#deleteId').val(id);
        $('.deskripsiDeleteProker').text("Anda yakin akan menghapus Proker "+nama+" ? ");
        $('#deleteProker').modal('show');
    });

    $(document).on('click','.tambahEvent',function(){
        $('#tambahEvent').modal('show'); 
    });

    $(document).on('click','.tambahDokumentasi',function(){
        $('#tambahDokumentasi').modal('show'); 
    });


    $(document).on('click','.detailDokumentasi',function(){
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        var link = $(this).attr('data-link');
        $('#detilDok_id').val(id);
        $('#detilDok_judul').val(nama);
        $('#detilDok_link').val(link);
        $('.viewDetail').attr('href',link);
        $('#detailDokumentasi').modal('show'); 
    })

    $(document).on('click','.tambahAnggota',function(){
        $('#tambahAnggota').modal('show'); 
    });

    $(document).on('click','.detilAnggota',function(){
        var id= $(this).attr('data-id');
        var nrp = $(this).attr('data-nrp');
        var nama = $(this).attr('data-nama')
        var jabatan = $(this).attr('data-divisi');
        var ig = $(this).attr('data-ig');
        $("#detilAnggota_nrp").val(nrp);
        $("#detilAnggota_nama").val(nama);
        $("#detilAnggota_jabatan").val(jabatan);
        $("#detilAnggota_id").val(id);
        $("#detilAnggota_ig").val(ig);
        $('#detilAnggota').modal('show'); 
    });
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialDate: tanggal,
        initialView: 'dayGridMonth',
        // dayMaxEvents: true, // allow "more" link when too many events
      
        events: [
            <?php 
            $time= '00:00:00';
            $time2= '23:59:59';
            foreach($dataEvent2 as $row): 
                $check = $event->checkStatus($row['sampai']);
                if($check['overdue'] == true){
                    $color = '#d9534f ';
                    $bgcolor = '#d9534f ';
                    $status = "Acara Selesai";
                }else{
                    $color = '#0275d8 ';
                    $bgcolor = '#0275d8 ';
                    $status = "Acara Belum Selesai";
                }
                $title = $row['kegiatan'];
                $waktu = $row['waktu'];
                $sampai = $row['sampai'];
                $start =  date('Y-m-d', strtotime("$waktu"));
                $end =  date('Y-m-d', strtotime("+1 day", strtotime("$sampai")));
            ?>
            {
            id : '<?php echo $row['id_event'] ?>',
            title: '<?php echo $title; ?>',
            start: '<?php echo $start; ?>',
            end: '<?php echo $end; ?>',
            backgroundColor : '<?php echo $color; ?>',
            borderColor : '<?php echo $bgcolor; ?>',
            url: 'index.php#calendar',
            status : '<?php echo $status; ?>',
            mulai : '<?php echo date('d F Y', strtotime("$waktu")); ?>',
            akhir : '<?php echo date('d F Y', strtotime("$sampai")); ?>',
            editmulai : '<?php echo $waktu ?>',
            editakhir : '<?php echo $sampai ?>',
            },
            <?php endforeach; ?>
        ],
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate

            if (info.event.url) {
                $('#detilAcara').modal('show'); 
                $('#textAcara').text(info.event.title);
                $('#textMulai').text(info.event.extendedProps.mulai);
                $('#textBerakhir').text(info.event.extendedProps.akhir);
                $('#textStatus').text(info.event.extendedProps.status);
                $('#editTitle').val(info.event.title);
                $('#editTanggal').val(info.event.extendedProps.editmulai);
                $('#editSampai').val(info.event.extendedProps.editakhir);
                $('#idKegiatan').val(info.event.id);
            }
        }
    });

    calendar.render();
  });
  // add the responsive classes after page initialization
  window.onload = function () {
    $('.fc-toolbar.fc-header-toolbar').addClass('row ');
    // $('.fc-toolbar-title').addClass('float-right');
    // $('.fc-button-group').addClass('float-right mr-2');
    // $('.fc-today-button').addClass('float-right');

};


</script>
<?php
    require_once('footer.php');
?>