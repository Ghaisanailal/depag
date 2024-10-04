<br>

<?php
include "isi-dashboard-admin.php";
?>

<h4><?php echo $ucapan . ", " . $namas ?></h4>
<hr>
<div class="row">

    <div class="col-md-2">
        <div class="list-group">

            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_user; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>ACCOUNT</b></li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_user_pegawai; ?></span>Pegawai</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_user_users; ?></span>Users</li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_users; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>USERS</b></li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_users_aktif; ?></span>Aktif</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_users_belum_aktif; ?></span>Belum Aktif</li>
        </div>
    </div>


    <div class="col-md-2">
        <div class="list-group">

            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_pegawai; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>PEGAWAI</b></li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_pembimbing; ?></span>Pembimbing</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_penguji; ?></span>Penguji</li>
        </div>
    </div>

    <div class="col-md-2">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_seminar; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>SEMINAR</b></li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_seminar_disetujui; ?></span>Disetujui</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_seminar_belum; ?></span>Belum Disetujui</li>
            <li class="list-group-item"> <span class="badge"><?php echo $jum_seminar_lulus; ?></span>Lulus</li>
        </div>
    </div>

    <div class="col-md-4">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>NILAI</b></li>
            <li class="list-group-item">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percen_nilpra; ?>%">
                    </div>
                </div><b>Prakerin</b> <?php echo $nilai_prakerin; ?> dari <?php echo $jum_seminar; ?> sudah dinilai (<?php echo $percen_nilpra; ?>%).
            </li>

            <li class="list-group-item">
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percen_nillap; ?>%">
                    </div>
                </div><b>Laporan</b> <?php echo $nilai_laporan; ?> dari <?php echo $jum_seminar; ?> sudah dinilai (<?php echo $percen_nilpra; ?>%).
            </li>

            <li class="list-group-item">
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percen_nilapl; ?>%">
                    </div>
                </div><b>Aplikasi</b> <?php echo $nilai_aplikasi; ?> dari <?php echo $jum_seminar; ?> sudah dinilai (<?php echo $percen_nilpra; ?>%).
            </li>
        </div>
    </div>

</div>