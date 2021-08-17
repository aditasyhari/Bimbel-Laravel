<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <center>
        <h2 class="card-title">Absen Siswa Terbatas | <span class="text-uppercase">{{ $kelas->kategori }}</span></h2>
        <p class="">{{ $absen->tanggal }} - {{ $kelas->nama_kelas }}</p>
        <br>
        <table class="table"
            style=
            "
                width:100%;
                text-align: center;
                border-radius: 1px;
            "
        >
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody class="">
                <?= $n = 1 ?>
                @foreach($user as $u)
                    <tr>
                        <td><?= $n++; ?></td>
                        <td>{{ $u->profileUser->nama }}</td>
                        <td>{{ $u->email }}</td>
                            <?php
                                $s = \App\AbsensiUser::where('user_id', $u->id)->first();
                            ?>
                        <td>{{ $s->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <table>
            <tbody>
                <?php
                    $hadir  = \App\AbsensiUser::where('status','hadir')->where('absensi_id', '=', $absen->id)->count();
                    $thadir = \App\AbsensiUser::where('status','tidak hadir')->where('absensi_id', '=', $absen->id)->count();
                    $izin   = \App\AbsensiUser::where('status','izin')->where('absensi_id', '=', $absen->id)->count();
                    $none   = \App\AbsensiUser::where('status','none')->where('absensi_id', '=', $absen->id)->count();
                ?>
                <tr>
                    <td style='text-align:left;'>Total Siswa </td>
                    <td colspan='3' style='text-align:left;'>: {{$user->count()}} Siswa</td>
                </tr>
                <tr>
                    <td style='text-align:left;'>Total Siswa Hadir : </td>
                    <td colspan='3' style='text-align:left;'>: {{$hadir}} Siswa</td>
                </tr>
                <tr>
                    <td style='text-align:left;'>Total Siswa Tidak Hadir : </td>
                    <td colspan='3' style='text-align:left;'>: {{$thadir}} Siswa</td>
                </tr>
                <tr>
                    <td style='text-align:left;'>Total Siswa Izin : </td>
                    <td colspan='3' style='text-align:left;'>: {{$izin}} Siswa</td>
                </tr>
            </tbody>
        </table>
    </center>
</body>
</html>