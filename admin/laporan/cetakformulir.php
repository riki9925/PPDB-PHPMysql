<body onload="window.print()">
<?php
$kdpendaftar=addslashes($_GET['kdpendaftar']);
include "../../koneksi.php";     
        $exec=mysql_query("select * from pendaftar where kdpendaftar='".$kdpendaftar."' ");
     $r=mysql_fetch_array($exec)
        
       ;

    ?>
<table width="100%" border="0">
  <tr>
    <th ><img src="logo.jpg" width="100" ></th>
    <th >FORMULIR PENDAFTARAN SISWA <br>
    SD NEGERI NO XXXXXX PEMATANGSIANTAR</th>
 
  </tr>
</table>
<hr>
<img src="a.jpg">
<table class="table table-striped" width="100%">
          <tr>
            <th width="25%"><div align="left">Nama</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Jenis Kelamin</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[2]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Agama</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[3]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Tempat Lahir</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Tanggal Lahir</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span></td>
          </tr>  <tr>
            <th width="25%"><div align="left">Asal Tk</div></th>
            <td width="10%"> : </td>
            <td> Rp. <?php echo $r[16]; ?></td>
          </tr><tr>
            <th width="25%"><div align="left">Alamat</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r[6]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Status Anak</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Nama Ayah</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Pendidikan Ayah</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[9]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Pekerjaan ayah Ayah</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[10]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Penghasilan Ayah</div></th>
            <td width="10%"> : </td>
            <td> Rp. <?php echo $r[11]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Nama Ibu</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[12]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Pendidikan Ibu</div></th>
            <td width="10%"> : </td>
            <td>  <?php echo $r[13]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Pekerjaan Ibu</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[14]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">No Hp</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[15]; ?></td>
          </tr>
        
      
      
</table>

<p align="right">Mengetahui  </p>
<p align="right"><img src="data:image/png;base64,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" height="60"></p>

<p align="right">KEPALA SEKOLAH </p>
<p align="right">NIP : 81297127391238</p>


*) Cetaklah Formulir ini Dan Tempelkan Foto Anda <br>
*) Formulir di cetak Rangkap 2  <br>
*) Pengumuman Seleksi Pendaftaran Akan di Umumkan Melalui Website Resmi  <br>
        </body>