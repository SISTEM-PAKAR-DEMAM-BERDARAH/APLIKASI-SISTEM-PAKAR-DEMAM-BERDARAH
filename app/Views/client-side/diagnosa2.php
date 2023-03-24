<?= $this->extend('/layouts-user/main-layouts') ?>

<?= $this->section('content') ?>
<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <form action="" method="get">
        <div class="card text-center mb-5 border-0 mt-5">
          <div class="card-header p-3 bg-transparent">
            <h1 class="text-center fw-bold">Gejala yang Di Derita</h1>
          </div>
          <div class="card-body">
            <table class="table text-center">
              <thead>
                <tr class="fw-bold">
                  <td>No</td>
               
                  <td>Nama Gejala</td>
                  <td>Nilai Keyakinan</td>
                </tr>
              </thead>

              <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'sistempakar');
               
                $numbtable = 1;
                $getKode = $_GET['kode_gejala'];
                $getGejala = $_GET['nama_gejala'];
                $getKeyakinan = $_GET['nilai_keyakinan'];
                $nilaiUser = array();
                for ($i = 0; $i < count($getKode); $i++) {
                ?>
                  <tr>
                    <td><?= $numbtable++ ?></td>
                  
                    <td><?= $getGejala[$i] ?></td>
                    <td><?= $getKeyakinan[$i] ?></td>
                  </tr>
                  
                  <?php 
                  $query = mysqli_query($conn, "SELECT DISTINCT cf_pakar from basis_pengetahuan WHERE kode_gejala = '$getKode[$i]'");               
                  while ($query2 = mysqli_fetch_array($query)) {
                  array_push($nilaiUser,$query2['cf_pakar']);
                  }
                  
                  
                  ?>

                <?php
                }

                function cf(array $nilaiPakar, array $nilaiUser, array $gejala) {
      
                  $hasilDiagnosa = '';
                  $persentaseHasil='';
                  $nilaiUserD01 = array();
                  $nilaiUserD02 = array();
                  $nilaiUserD03 = array();
                  
                  $gejalaD01 = array();
                  $gejalaD02 = array();
                  $gejalaD03 = array();
                  
                  $nilaiPakarD01 = array();
                  $nilaiPakarD02 = array();
                  $nilaiPakarD03 = array();
                  
                  $nilaiCFD01 = array();
                  $nilaiCFD02 = array();
                  $nilaiCFD03 = array();
                  
                  $hasilD01 = 0;
                  $hasilD02 = 0;
                  $hasilD03 = 0;
                        $panjangGejala = count($gejala);
                  for($i = 0; $i < $panjangGejala; $i++){
                        if($gejala[$i] == "G01" || $gejala[$i] == "G02" ||$gejala[$i] == "G03" || $gejala[$i] == "G04" || $gejala[$i] =="G05"|| $gejala[$i] =="G06"|| $gejala[$i] =="G07"){
                          $gejalaD01[] = $gejala[$i];
                          $nilaiPakarD01[] = $nilaiPakar[$i];
                          $nilaiUserD01[] = $nilaiUser[$i];
                        }
                        if($gejala[$i] == "G08" || $gejala[$i] == "G09" ||$gejala[$i] == "G10" || $gejala[$i] == "G11" || $gejala[$i] =="G05"|| $gejala[$i] =="G06"|| $gejala[$i] =="G12"|| $gejala[$i] =="G13"|| $gejala[$i] =="G14"|| $gejala[$i] =="G15" || $gejala[$i] =="G04"){
                          $gejalaD02[] = $gejala[$i];
                          $nilaiPakarD02[] = $nilaiPakar[$i];
                          $nilaiUserD02[] = $nilaiUser[$i];
                        }
                        if($gejala[$i] == "G16" || $gejala[$i] == "G17" ||$gejala[$i] == "G18" || $gejala[$i] == "G19" || $gejala[$i] =="G20"|| $gejala[$i] =="G21"|| $gejala[$i] =="G22"|| $gejala[$i] =="G23"){
                          $gejalaD03[] = $gejala[$i];
                          $nilaiPakarD03[] = $nilaiPakar[$i];
                          $nilaiUserD03[] = $nilaiUser[$i];
                        }
                  }
                  
                  $panjangGejalaD01 = count($gejalaD01);
                  for($a = 0; $a < $panjangGejalaD01; $a++){
                        $nilaiCFD01[] = $nilaiPakarD01[$a] * $nilaiUserD01[$a]; 
                  }
                  
                  $panjangGejalaD02 = count($gejalaD02);
                  for($b = 0; $b < $panjangGejalaD02; $b++){
                        $nilaiCFD02[] = $nilaiPakarD02[$b] * $nilaiUserD02[$b]; 
                  }
                  $panjangGejalaD03 = count($gejalaD03);
                  for($c = 0; $c < $panjangGejalaD03; $c++){
                        $nilaiCFD03[] = $nilaiPakarD03[$c] * $nilaiUserD03[$c]; 
                        // echo $nilaiCFD03[$b]. " ";
                  }
                  
                  $panjangGejalaD01 = count($gejalaD01);
                  if($panjangGejalaD01 > 0){
                  $hasilD01 = $nilaiCFD01[0];
                        for($a = 1; $a < $panjangGejalaD01; $a++){
                          if($panjangGejalaD01 >1){
                            $hasilD01 = $hasilD01 + $nilaiCFD01[$a] * (1 - $hasilD01);
                          }
                        }
                  }
                  $panjangGejalaD02 = count($gejalaD02);
                  if($panjangGejalaD02 > 0){
                        $hasilD02 = $nilaiCFD02[0];
                        for($a = 1; $a < $panjangGejalaD02; $a++){
                          if($panjangGejalaD02 >1){
                            $hasilD02 = $hasilD02 + $nilaiCFD02[$a] * (1 - $hasilD02);
                          }
                      }
                  }
                  $panjangGejalaD03 = count($gejalaD03);
                  if($panjangGejalaD03 >0){
                        $hasilD03 = $nilaiCFD03[0];
                        for($a = 1; $a < $panjangGejalaD03; $a++){
                        if($panjangGejalaD03 >1){
                           $hasilD03 = $hasilD03 + $nilaiCFD03[$a] * (1 - $hasilD03);
                        }
                  }
                  }
                    if($hasilD01 > $hasilD02){
                        if($hasilD01 > $hasilD03){
                            $hasilDiagnosa = "D01";
                            $persentaseHasil = $hasilD01;
                        }else{
                            $hasilDiagnosa = "D03";
                            $persentaseHasil = $hasilD03;
                        }
                    }else if($hasilD02 > $hasilD03){
                        $hasilDiagnosa = "D02";
                        $persentaseHasil = $hasilD02;
                    }else{
                        $hasilDiagnosa = "D03";
                        $persentaseHasil = $hasilD03;
                    }
                    $akurasi = $persentaseHasil * 100;
                    $output = number_format($akurasi, 2, '.', '');
                    $conn = mysqli_connect('localhost', 'root', '', 'sistempakar');
                    $penyakit = mysqli_query($conn, "SELECT nama_penyakit, gambar FROM penyakit WHERE kode_penyakit = '$hasilDiagnosa'");
                    $dataPenyakit = mysqli_fetch_array($penyakit);
                  
                    $solusi = mysqli_query($conn, "SELECT detail_solusi FROM solusi WHERE kode_penyakit = '$hasilDiagnosa'");
                    $diagnosa = mysqli_fetch_array($solusi);

                    echo "
                      <div class='col-md-9' style='text-align: justify;'>
                        <p class='lead'>Berdasarkan gejala dan nilai keyakinan yang telah Anda sebutkan. Hasil diagnosa menyatakan gejala tersebut memiliki kemungkinan persentase <strong style='font-size: larger;'>$output%</strong>, bahwa penyakit yang sedang diderita adalah <strong style='font-size: larger;'>$dataPenyakit[nama_penyakit]</strong>.</p>

                        <h3 class='mt-5'>Solusi Pengobatan</h3><strong class='lead'>$diagnosa[detail_solusi]</strong>
                      </div>
                      <div class='col-md-3'>
                        <img src='assets/images/penyakit-seeder/$dataPenyakit[gambar]' alt='Gambar Hasil Diagnosa' width='100%'>
                      </div>
                    ";
                  }
                ?>
              </tbody>
            </table>          
          </div>   
          <div class="card-footer p-3 border-0 bg-transparent">
            <div class="alert alert-danger" role="alert">
              <h2 class="mb-3" align="left">Hasil Diagnosa!</h2>
              <div class="row">   
                <?php echo cf($nilaiUser, $getKeyakinan, $getKode) ?>
              </div>
            </div>
          </div>   
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12"></div>
  </div>
</div>




<div class="footer fst-italic p-2">
  <p class="text-center mt-2"> 2023 © Novita Sari. Website Sistem Pakar DBD(Demam Berdarah Dengue).</p>
</div>
<!-- End Content -->

<?= $this->endSection() ?>