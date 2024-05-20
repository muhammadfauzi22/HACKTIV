<html>
<h1>Tugas 1</h1>

<body>
    Silahkan Input Nilai Anda :
    <form method="post">
        <input type="number" name="nilai">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        if ($nilai <= 100 && $nilai >= 85) {
            echo 'Peringkat Anda adalah ' . 'A';
        } elseif ($nilai <= 84 && $nilai >= 75) {
            echo 'Peringkat Anda adalah ' . 'B';
        } elseif ($nilai <= 74 && $nilai >= 60) {
            echo 'Peringkat Anda adalah ' . 'C';
        } elseif ($nilai <= 59 && $nilai >= 50) {
            echo 'Peringkat Anda adalah ' . 'D';
        } elseif ($nilai <= 49 && $nilai >= 0) {
            echo 'Peringkat Anda adalah ' . 'E';
        } else {
            echo 'Nilai tidak ada pada rentang peringkat!';
        }
    } else {
        echo "Input belum diisi";
    }
    ?>
