 <?php if ($_GET["print"] === "raports-print") : ?>

   <head>
     <link rel="stylesheet" href="<?= $url; ?>admin/assets/css/print.css?up<?= time(); ?>.css">
   </head>
   <!-- ====================================
       TEMPLATE MEDICAL RECORDS PRINT 
       ===================================-->
   <section class="raports-print">
     <div class="menu">
       <li>
         <a href="<?= $url; ?>admin/dashboard/student-raports" class="back">Kembali</a>
       </li>
       <li>
         <button id="printButton" class="print-button" onclick="print()">Download PDF</button>
       </li>

       <?php foreach ($studentRaports as $rowStudentRaports) : ?>
         <?php foreach ($students as $rowStudents) : ?>
           <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
             <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>
               <li class="send-file">
                 <a href="https://wa.me/62<?= $rowStudents["no_hp"]; ?>" id="printButton" onclick="print()" target="_blank">
                   <img src="https://www.tanjunglesung.com/wp-content/uploads/2018/12/logo-wa-whatsapp-300x300.png" alt="">
                   Kirim File ke <?= $rowStudents["nama_panggilan"]; ?>
                 </a>
               </li>
             <?php endif; ?>
           <?php endif; ?>
         <?php endforeach; ?>
       <?php endforeach; ?>
     </div>

     <div class="container-paper" id="printRaports">

       <!-- Check Semester 1 -->
       <?php foreach ($studentRaports as $rowStudentRaports) : ?>
         <?php foreach ($students as $rowStudents) : ?>
           <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
             <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

               <?php if ($rowStudentRaports["semester"] === "I") : ?>

                 <!-- PAGE 1 -->
                 <div class="page-1">
                   <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                     <?php foreach ($students as $rowStudents) : ?>
                       <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                         <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

                           <div class="page-cover">
                             <img src="<?= $url; ?>assets/img/logo/garuda-indonesia.png" alt="">
                             <h5>
                               LAPORAN
                               <br>
                               PENILAIAN PERKEMBANGAN ANAK DIDIK
                               <br>
                               PENDIDIKAN ANAK USIA DINI
                               <br>
                               (PAUD)
                               <br><br>
                               TK NEGERI 04 KREATIF PAGUYAMAN
                             </h5>
                             <span class="npsn">NPSN. 69754281</span>
                             <img src="<?= $url; ?>assets/img/logo/logo-paud3.jpg" alt="">
                             <h5>NAMA PESERTA DIDIK</h5>
                             <br><br>
                             <div class="card-name">
                               <h4><?= $rowStudents["nama_lengkap"]; ?></h4>
                               NISN: <?= $rowStudents["nisn"]; ?>
                             </div>
                             <br><br>
                             <h4>
                               KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN
                               <br>
                               REPUBLIK INDONESIA
                             </h4>
                           </div>

                         <?php endif; ?>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endforeach; ?>
                 </div>

                 <!-- PAGE 2 -->
                 <div class="page-2">
                   <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                     <?php foreach ($students as $rowStudents) : ?>
                       <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                         <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

                           <div class="page-heading-1">
                             <h5>
                               PETUNJUK PENGGUNAAN
                             </h5>
                           </div>

                           <div class="page-body">
                             <ol type="1">
                               <li>
                                 Raport PAUD yang selanjutnya disebut buku Laporan Pencapaian Perkembangan Anak (LPPA) Kurikulum 2013 PAUD dipergunakan selama anak didik mengikuti seluruh program pembelajaran di sekolah TK Negeri 04 Kreatif Kecamatan Paguyaman Kabupaten Boalemo
                               </li>
                               <li>
                                 Apabila anak didik pindah sekolah, buku LPPA dibawa oleh anak didik yang bersangkutan untuk dipergunakan di sekolah baru sebagai bukti pencapaian kompetensi dengan meninggalkan arsip di sekolah asal;
                               </li>
                               <li>
                                 Apabila buku LPPA hilang, dapat diganti dengan buku LPPA pengganti dan diisi dengan nilai-nilai yang dikutip dari buku induk sekolah asal anak didik dan disahkan oleh kepala sekolah bersangkutan;
                               </li>
                               <li>
                                 Identitas satuan PAUD dan identitas anak didik diisi sesuai dengan data riil lembaga dan data anak didik bersangkutan;
                               </li>
                               <li>
                                 Penilaian perkembangan anak didik dilakukan secara kualitatif selama anak didik mengikuti pendidikan di Taman kanak-kanak berdasarkan catatan anekdot, skala capaian harian, dan catatan hasil karya.
                               </li>
                               <li>
                                 Buku LPPA harus dilengkapi pas foto terbaru ukuran 3 x 4 cm, dan pengisiannya dilakukan oleh wali kelas berkoordinasi dengan guru pendidik, diisi dengan cara memberikan ceklis (√) dan narasi / uraian / deskripsi pada setiap aspek perkembangan yang berisi catatan penting berkaitan dengan anak didik.
                               </li>
                             </ol>
                             <br>
                             <strong>KETERANGAN NILAI KUALITATIF</strong>
                             <ol type="1">
                               <li>
                                 <strong>BB</strong> Belum Berkembang, bila anak melakukannya harus dengan bimbingan atau dicontohkan oleh guru;
                               </li>
                               <li>
                                 <strong>MB</strong> Mulai Berkembang, bila anak melakukannya masih harus diingatkan atau dibantu oleh guru;
                               </li>
                               <li>
                                 <strong>BSH</strong> Berkembang Sesuai Harapan, bila anak sudah dapat melakukannya secara mandiri dan konsisten tanpa harus diingatkan atau dicontohkan oleh guru;
                               </li>
                               <li>
                                 <strong>BSB</strong> Berkembang Sangat Baik, bila anak sudah dapat melakukannya secara mandiri dan sudah dapat membantu temannya yang belum mencapai kemampuan sesuai dengan indikator yang diharapkan.
                               </li>
                             </ol>
                           </div>

                         <?php endif; ?>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endforeach; ?>
                 </div>


                 <!-- PAGE 3 -->
                 <div class="page-3">
                   <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                     <?php foreach ($students as $rowStudents) : ?>
                       <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                         <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

                           <div class="page-heading-1">
                             <h5>
                               IDENTITAS SATUAN PAUD
                             </h5>
                           </div>

                           <div class="page-body">
                             <ol>
                               <table>
                                 <tr>
                                   <td>
                                     <li>Nama Sekolah</li>
                                   </td>
                                   <td>: TK NEGERI 04 KREATIF PAGUYAMAN</td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>NPSN</li>
                                   </td>
                                   <td>: <strong>69754281</strong></td>
                                 </tr>
                                 <tr>
                                   <td colspan="2">
                                     <li>Alamat Sekolah</li>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>Nama Jalan / Desa</td>
                                   <td>: Desa Bongo Nol</td>
                                 </tr>
                                 <tr>
                                   <td>Kode Pos</td>
                                   <td>: 96261</td>
                                 </tr>
                                 <tr>
                                   <td>Kecamatan</td>
                                   <td>: Paguyaman</td>
                                 </tr>
                                 <tr>
                                   <td>Kabupaten / Kota</td>
                                   <td>: Boalemo</td>
                                 </tr>
                                 <tr>
                                   <td>Provinsi</td>
                                   <td>: Gorontalo</td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Telepon / HP</li>
                                   </td>
                                   <td>: </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Website</li>
                                   </td>
                                   <td>: </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Email</li>
                                   </td>
                                   <td>: </td>
                                 </tr>
                               </table>
                             </ol>
                           </div>

                         <?php endif; ?>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endforeach; ?>
                 </div>

                 <!-- PAGE 4 -->
                 <div class="page-4">
                   <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                     <?php foreach ($students as $rowStudents) : ?>
                       <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                         <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

                           <div class="page-heading-1">
                             <h5>
                               IDENTITAS ANAK DIDIK
                             </h5>
                           </div>

                           <div class="page-body">
                             <ol>
                               <table>
                                 <tr>
                                   <td>
                                     <li>Nama Anak Didik</li>
                                   </td>
                                   <td>: <?= $rowStudents["nama_lengkap"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Nama Panggilan</td>
                                   <td>: <?= $rowStudents["nama_panggilan"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>NISN / NIS</li>
                                   </td>
                                   <td>: <?= $rowStudents["nisn"]; ?> / <?= $rowStudents["nis"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Jenis Kelamin</li>
                                   </td>
                                   <td>
                                     : <?= $rowStudents["jenis_kelamin"]; ?>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Tempat, Tanggal Lahir</li>
                                   </td>
                                   <td>
                                     : <?= $rowStudents["tempat_lahir"]; ?>, <?= date_id($rowStudents["tgl_lahir"]); ?>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Agama</li>
                                   </td>
                                   <td>: <?= $rowStudents["agama"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Anak ke</li>
                                   </td>
                                   <td>
                                     : <?= $rowStudents["anak_ke"]; ?>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td colspan="2">
                                     <li>Orang Tua/Wali</li>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>Nama Ayah</td>
                                   <td>: <?= $rowStudents["nama_ayah"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Nama Ibu</td>
                                   <td>: <?= $rowStudents["nama_ibu"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>No HP</td>
                                   <td>: <?= $rowStudents["no_hp"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Pekerjaan Orang Tua / Wali</li>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>Ayah</td>
                                   <td>: <?= $rowStudents["pekerjaan_ayah"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Ibu</td>
                                   <td>: <?= $rowStudents["pekerjaan_ibu"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <li>Alamat Orang Tua / Wali</li>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>Nama Jalan / Desa</td>
                                   <td>: <?= $rowStudents["nama_jln"]; ?> / <?= $rowStudents["desa"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Kode Pos</td>
                                   <td>: <?= $rowStudents["kode_post"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Kecamatan</td>
                                   <td>: <?= $rowStudents["kecamatan"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Kabupaten / Kota</td>
                                   <td>: <?= $rowStudents["kabupaten"]; ?></td>
                                 </tr>
                                 <tr>
                                   <td>Provinsi</td>
                                   <td>: <?= $rowStudents["provinsi"]; ?></td>
                                 </tr>
                               </table>
                             </ol>
                             <div class="footer-body">
                               <table class="pas-foto">
                                 <tr>
                                   <td rowspan="5">
                                     Foto
                                     <br>
                                     3 x 4
                                   </td>
                                 </tr>
                               </table>
                               <table>
                                 <tr>
                                   <td>Paguyaman, <?= date_id(date("Y-m-d")); ?></td>
                                 </tr>
                                 <tr>
                                   <td>Kepala TK Negeri 04 Kreatif </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <br><br><br>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td><strong style="border-bottom:2px solid #000;">ELWIN IBRAHIM, S.Pd</strong></td>
                                 </tr>
                                 <tr>
                                   <td>NIP . 197210062005012004</td>
                                 </tr>
                               </table>
                               <div class="clear-both"></div>
                             </div>
                           </div>

                         <?php endif; ?>
                       <?php endif; ?>
                     <?php endforeach; ?>
                   <?php endforeach; ?>
                 </div>

               <?php endif; ?>


             <?php endif; ?>
           <?php endif; ?>
         <?php endforeach; ?>
       <?php endforeach; ?>
       <!-- end Check Semester 1 -->

       <!-- end Check Semester 2 -->
       <?php foreach ($studentRaports as $rowStudentRaports) : ?>
         <?php foreach ($students as $rowStudents) : ?>
           <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
             <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

               <!-- PAGE 5 -->
               <div class="page-5 <?php if ($rowStudentRaports["semester"] === "II") : ?>page-5-semester-2<?php endif; ?>">
                 <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                   <?php foreach ($students as $rowStudents) : ?>
                     <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                       <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

                         <div class="page-heading-1">
                           <h5>
                             PENILAIAN PERKEMBANGAN ANAK DIDIK
                           </h5>
                         </div>

                         <div class="page-body">
                           <table>
                             <tr>
                               <td>Nama Anak Didik</td>
                               <td style="text-transform:uppercase;">: <?= $rowStudents["nama_lengkap"]; ?></td>
                             </tr>
                             <tr>
                               <td>Kelompok (Usia)</td>
                               <td>:
                                 <?php if ($rowStudents["id_class"] === "class_a") : ?>
                                   A
                                 <?php endif; ?>
                                 <?php if ($rowStudents["id_class"] === "class_b") : ?>
                                   B
                                 <?php endif; ?>
                                 (<?= date("Y") - substr($rowStudents["tgl_lahir"], 0, 4); ?> Tahun)
                               </td>
                             </tr>
                             <tr>
                               <td>Semester</td>
                               <td>:
                                 <?php if ($rowStudentRaports["semester"] === "I") : ?>
                                   I (SATU)
                                 <?php endif; ?>
                                 <?php if ($rowStudentRaports["semester"] === "II") : ?>
                                   II (DUA)
                                 <?php endif; ?>
                               </td>
                             </tr>
                             <tr>
                               <td>Tahun Pelajaran</td>
                               <td>: <?= $rowStudentRaports["tahun_pelajaran"]; ?></td>
                             </tr>
                           </table>
                           <strong>A. Nilai Capaian Kompetensi Bidang Perkembangan</strong>
                           <table class="table-perkembangan" border="1" cellspacing="0">
                             <thead>
                               <tr>
                                 <td colspan="2" rowspan="3">Bidang Perkembangan</td>
                                 <td rowspan="3">Nilai</td>
                                 <td rowspan="3">Predikat</td>
                                 <td colspan="2">Sikap Spiritual dan Sosial</td>
                               </tr>
                               <tr>
                                 <td>Dalam Bidang Perkembangan</td>
                                 <td>Antar Bidang Perkembangan</td>
                               </tr>
                               <tr>
                                 <td>SB/ B/ C/ K</td>
                                 <td>Deskripsi</td>
                               </tr>
                             </thead>
                             <tr>
                               <td class="no-table">1</td>
                               <td>Perkembangan Nilai Agama Dan Moral</td>
                               <td>
                                 <center><?= $rowStudentRaports["nilai_agama"]; ?></center>
                               </td>
                               <td>
                                 <center>
                                   <?php
                                    if ($rowStudentRaports["nilai_agama"] >= 87) {
                                      echo "A";
                                    } elseif ($rowStudentRaports["nilai_agama"] >= 73) {
                                      echo "B";
                                    } elseif ($rowStudentRaports["nilai_agama"] >= 60) {
                                      echo "C";
                                    } elseif ($rowStudentRaports["nilai_agama"] < 60) {
                                      echo "D";
                                    }
                                    ?>
                                 </center>
                               </td>
                               <td>
                                 <center>
                                   <?= $rowStudentRaports["dalam_bid_perkembangan_nilai_agama"]; ?>
                                 </center>
                               </td>
                               <td rowspan="6">
                                 <center>
                                   <?= $rowStudentRaports["antar_bid_perkembangan_description"]; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">2</td>
                               <td>Perkembangan Motorik</td>
                               <td>
                                 <center><?= $rowStudentRaports["nilai_motorik"]; ?></center>
                               </td>
                               <td>
                                 <center>
                                   <?php
                                    if ($rowStudentRaports["nilai_motorik"] >= 87) {
                                      echo "A";
                                    } elseif ($rowStudentRaports["nilai_motorik"] >= 73) {
                                      echo "B";
                                    } elseif ($rowStudentRaports["nilai_motorik"] >= 60) {
                                      echo "C";
                                    } elseif ($rowStudentRaports["nilai_motorik"] < 60) {
                                      echo "D";
                                    }
                                    ?>
                                 </center>
                               </td>
                               <td>
                                 <center>
                                   <?= $rowStudentRaports["dalam_bid_perkembangan_nilai_motorik"]; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">3</td>
                               <td>Perkembangan Kognitif</td>
                               <td>
                                 <center><?= $rowStudentRaports["nilai_kognitif"]; ?></center>
                               </td>
                               <td>
                                 <center>
                                   <?php
                                    if ($rowStudentRaports["nilai_kognitif"] >= 87) {
                                      echo "A";
                                    } elseif ($rowStudentRaports["nilai_kognitif"] >= 73) {
                                      echo "B";
                                    } elseif ($rowStudentRaports["nilai_kognitif"] >= 60) {
                                      echo "C";
                                    } elseif ($rowStudentRaports["nilai_kognitif"] < 60) {
                                      echo "D";
                                    }
                                    ?>
                                 </center>
                               </td>
                               <td>
                                 <center>
                                   <?= $rowStudentRaports["dalam_bid_perkembangan_nilai_kognitif"]; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">4</td>
                               <td>Perkembangan Bahasa</td>
                               <td>
                                 <center><?= $rowStudentRaports["nilai_bahasa"]; ?></center>
                               </td>
                               <td>
                                 <center>
                                   <?php
                                    if ($rowStudentRaports["nilai_bahasa"] >= 87) {
                                      echo "A";
                                    } elseif ($rowStudentRaports["nilai_bahasa"] >= 73) {
                                      echo "B";
                                    } elseif ($rowStudentRaports["nilai_bahasa"] >= 60) {
                                      echo "C";
                                    } elseif ($rowStudentRaports["nilai_bahasa"] < 60) {
                                      echo "D";
                                    }
                                    ?>
                                 </center>
                               </td>
                               <td>
                                 <center>
                                   <?= $rowStudentRaports["dalam_bid_perkembangan_nilai_bahasa"]; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">5</td>
                               <td>Perkembangan Sosial - Emosional</td>
                               <td>
                                 <center><?= $rowStudentRaports["nilai_sosial_emosional"]; ?></center>
                               </td>
                               <td>
                                 <center>
                                   <?php
                                    if ($rowStudentRaports["nilai_sosial_emosional"] >= 87) {
                                      echo "A";
                                    } elseif ($rowStudentRaports["nilai_sosial_emosional"] >= 73) {
                                      echo "B";
                                    } elseif ($rowStudentRaports["nilai_sosial_emosional"] >= 60) {
                                      echo "C";
                                    } elseif ($rowStudentRaports["nilai_sosial_emosional"] < 60) {
                                      echo "D";
                                    }
                                    ?>
                                 </center>
                               </td>
                               <td>
                                 <center>
                                   <?= $rowStudentRaports["dalam_bid_perkembangan_nilai_sosial_emosional"]; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">6</td>
                               <td>Perkembangan Seni</td>
                               <td>
                                 <center><?= $rowStudentRaports["nilai_seni"]; ?></center>
                               </td>
                               <td>
                                 <center>
                                   <?php
                                    if ($rowStudentRaports["nilai_seni"] >= 87) {
                                      echo "A";
                                    } elseif ($rowStudentRaports["nilai_seni"] >= 73) {
                                      echo "B";
                                    } elseif ($rowStudentRaports["nilai_seni"] >= 60) {
                                      echo "C";
                                    } elseif ($rowStudentRaports["nilai_seni"] < 60) {
                                      echo "D";
                                    }
                                    ?>
                                 </center>
                               </td>
                               <td>
                                 <center>
                                   <?= $rowStudentRaports["dalam_bid_perkembangan_nilai_seni"]; ?>
                                 </center>
                               </td>
                             </tr>
                             <tfoot>
                               <tr>
                                 <td colspan="5">Nilai Rata-Rata</td>
                                 <td>
                                   <strong>
                                     <!-- <?php
                                          $jumlahNilai =
                                            $rowStudentRaports["nilai_agama"] +
                                            $rowStudentRaports["nilai_motorik"] +
                                            $rowStudentRaports["nilai_kognitif"] +
                                            $rowStudentRaports["nilai_bahasa"] +
                                            $rowStudentRaports["nilai_sosial_emosional"] +
                                            $rowStudentRaports["nilai_seni"];
                                          $rataRata = $jumlahNilai / 6;
                                          ?>
                                     <?= round($rataRata, 2); ?> -->
                                     <?= $rowStudentRaports["nilai_rata_rata"]; ?>
                                   </strong>
                                 </td>
                               </tr>
                             </tfoot>
                           </table>
                           <br>
                           <strong>B. Tinggi dan Berat Badan</strong>
                           <table class="table-perkembangan" border="1" cellspacing="0">
                             <thead>
                               <tr>
                                 <td class="no-table">No</td>
                                 <td>Pertumbuhan dan Perkembangan</td>
                                 <td>Semester 1</td>
                               </tr>
                             </thead>
                             <tr>
                               <td class="no-table">
                                 <center>1</center>
                               </td>
                               <td>Tinggi Badan</td>
                               <td><?= $rowStudentRaports["tinggi_badan"]; ?> Cm</td>
                             </tr>
                             <tr>
                               <td class="no-table">
                                 <center>2</center>
                               </td>
                               <td>Berat Badan</td>
                               <td><?= $rowStudentRaports["berat_badan"]; ?> Kg</td>
                             </tr>
                             <tr>
                               <td class="no-table">
                                 <center>3</center>
                               </td>
                               <td>Lingkar Kepala</td>
                               <td><?= $rowStudentRaports["lingkar_kepala"]; ?> Cm</td>
                             </tr>
                           </table>
                           <br>
                         </div>

                       <?php endif; ?>
                     <?php endif; ?>
                   <?php endforeach; ?>
                 <?php endforeach; ?>
               </div>



               <!-- PAGE 6 -->
               <div class="page-6">
                 <?php foreach ($studentRaports as $rowStudentRaports) : ?>
                   <?php foreach ($students as $rowStudents) : ?>
                     <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
                       <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>

                         <div class="page-body">
                           <strong>C. Kondisi Kesehatan</strong>
                           <table class="table-perkembangan" border="1" cellspacing="0">
                             <thead>
                               <tr>
                                 <td rowspan="2" class="no-table">No</td>
                                 <td rowspan="2">Aspek Fisik</td>
                                 <td colspan="3">Semester 1</td>
                               </tr>
                               <tr>
                                 <td>K</td>
                                 <td>B</td>
                                 <td>C</td>
                               </tr>
                             </thead>
                             <tr>
                               <td class="no-table">
                                 <center>1</center>
                               </td>
                               <td>Pendengaran</td>
                               <td>
                                 <?php if ($rowStudentRaports["pendengaran"] === "K") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                               <td>
                                 <?php if ($rowStudentRaports["pendengaran"] === "B") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                               <td>
                                 <?php if ($rowStudentRaports["pendengaran"] === "C") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">
                                 <center>2</center>
                               </td>
                               <td>Penglihatan</td>
                               <td>
                                 <?php if ($rowStudentRaports["penglihatan"] === "K") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                               <td>
                                 <?php if ($rowStudentRaports["penglihatan"] === "B") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                               <td>
                                 <?php if ($rowStudentRaports["penglihatan"] === "C") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">
                                 <center>3</center>
                               </td>
                               <td>Gigi</td>
                               <td>
                                 <?php if ($rowStudentRaports["gigi"] === "K") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                               <td>
                                 <?php if ($rowStudentRaports["gigi"] === "B") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                               <td>
                                 <?php if ($rowStudentRaports["gigi"] === "C") : ?>
                                   <center><img src="<?= $url; ?>assets/img/logo/check.png" alt="" width="10px;"></center>
                                 <?php endif; ?>
                               </td>
                             </tr>
                           </table>
                           <br>

                           <strong>D. Kehadiran</strong>
                           <table class="table-perkembangan" border="1" cellspacing="0">
                             <thead>
                               <tr>
                                 <td class="no-table">No</td>
                                 <td>Kehadiran</td>
                                 <td>Semester 1</td>
                               </tr>
                             </thead>
                             <tr>
                               <td class="no-table">
                                 <center>1</center>
                               </td>
                               <td>Sakit</td>
                               <td>
                                 <center>
                                   <?php if (!empty($rowStudentRaports["sakit"])) : ?>
                                     <?= $rowStudentRaports["sakit"] . " " . "Hari"; ?>
                                   <?php endif; ?>
                                   <?php if (empty($rowStudentRaports["sakit"])) : ?>
                                     -
                                   <?php endif; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">
                                 <center>2</center>
                               </td>
                               <td>Izin</td>
                               <td>
                                 <center>
                                   <?php if (!empty($rowStudentRaports["izin"])) : ?>
                                     <?= $rowStudentRaports["izin"] . " " . "Hari"; ?>
                                   <?php endif; ?>
                                   <?php if (empty($rowStudentRaports["izin"])) : ?>
                                     -
                                   <?php endif; ?>
                                 </center>
                               </td>
                             </tr>
                             <tr>
                               <td class="no-table">
                                 <center>3</center>
                               </td>
                               <td>Tanpa Keterangan</td>
                               <td>
                                 <center>
                                   <?php if (!empty($rowStudentRaports["tanpa_keterangan"])) : ?>
                                     <?= $rowStudentRaports["tanpa_keterangan"] . " " . "Hari"; ?>
                                   <?php endif; ?>
                                   <?php if (empty($rowStudentRaports["tanpa_keterangan"])) : ?>
                                     -
                                   <?php endif; ?>
                                 </center>
                               </td>
                             </tr>
                           </table>
                           <br>

                           <strong>E. Catatan</strong>
                           <table class="table-perkembangan" border="1" cellspacing="0">
                             <tr>
                               <td class="table-catatan">
                                 <?php if ((error_reporting(0))) : ?>
                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax1["nilai_rata_rata"]) : ?>
                                     Ranking <strong>1</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Pertahankan prestasi yang telah dicapai.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax2["nilai_rata_rata"]) : ?>
                                     Ranking <strong>2</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Pertahankan prestasi yang telah dicapai.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax3["nilai_rata_rata"]) : ?>
                                     Ranking <strong>3</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Pertahankan prestasi yang telah dicapai.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax4["nilai_rata_rata"]) : ?>
                                     Ranking <strong>4</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax5["nilai_rata_rata"]) : ?>
                                     Ranking <strong>5</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax6["nilai_rata_rata"]) : ?>
                                     Ranking <strong>6</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax7["nilai_rata_rata"]) : ?>
                                     Ranking <strong>7</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax8["nilai_rata_rata"]) : ?>
                                     Ranking <strong>8</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax9["nilai_rata_rata"]) : ?>
                                     Ranking <strong>9</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>

                                   <?php if ($rowStudentRaports["nilai_rata_rata"] === $resultRaportsMax10["nilai_rata_rata"]) : ?>
                                     Ranking <strong>10</strong> dari <?php if ($rowSession["level"] === "class_a") : ?> <?= $resultStudentsA["countStudentsA"]; ?> <?php endif; ?> <?php if ($rowSession["level"] === "class_b") : ?> <?= $resultStudentsB["countStudentsB"]; ?> <?php endif; ?> Siswa. Dengan nilai rata-rata <strong><?= $rowStudentRaports["nilai_rata_rata"]; ?></strong>. Tingkatkan lagi kualitas belajarnya.
                                   <?php endif; ?>
                                 <?php endif; ?>
                               </td>
                             </tr>
                           </table>

                           <br>
                           <strong>F. Komentar Orang Tua</strong>
                           <table class="table-perkembangan" border="1" cellspacing="0">
                             <tr>
                               <td class="table-komentar"></td>
                             </tr>
                           </table>

                           <p style="float:right;margin-top:10px;">
                             Paguyaman, <?= date_id(date("Y-m-d")); ?>
                           </p>

                           <div class="table-ttd">
                             <div class="ttd-left">
                               <table>
                                 <tr>
                                   <td>Mengetahui,</td>
                                 </tr>
                                 <tr>
                                   <td>Pimpinan TKN 04 Kreatif</td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <br><br><br>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <strong style="border-bottom:2px solid #000;">ELWIN IBRAHIM,S.Pd</strong>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td><strong>NIP: 197210062005012004</strong></td>
                                 </tr>
                               </table>
                             </div>

                             <div class="ttd-right">
                               <table>
                                 <tr>
                                   <td>
                                     Guru Kelas
                                     <?php if ($rowSession["level"] === "class_a") : ?>
                                       A
                                     <?php endif; ?>
                                     <?php if ($rowSession["level"] === "class_b") : ?>
                                       B
                                     <?php endif; ?>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <br><br><br>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     <strong style="text-transform: uppercase; border-bottom:2px solid #000;">
                                       <?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?>
                                     </strong>
                                   </td>
                                 </tr>
                               </table>
                             </div>
                             <div class="clear-both"></div>
                           </div>
                         </div>

                         <div class="ttd-center">
                           <table>
                             <tr>
                               <td>Mengetahui,</td>
                             </tr>
                             <tr>
                               <td>Orang Tua/Wali Murid</td>
                             </tr>
                             <tr>
                               <td>
                                 <br><br><br>
                               </td>
                             </tr>
                             <tr>
                               <td>
                                 --------------------------------------
                               </td>
                             </tr>
                           </table>
                         </div>


                       <?php endif; ?>
                     <?php endif; ?>
                   <?php endforeach; ?>
                 <?php endforeach; ?>
               </div>

             <?php endif; ?>
           <?php endif; ?>
         <?php endforeach; ?>
       <?php endforeach; ?>
       <!-- end Check Semester 2 -->


     </div>
   </section>
   <!-- ====================================
     end TEMPLATE MEDICAL RECORDS PRINT 
     ===================================-->
 <?php endif; ?>