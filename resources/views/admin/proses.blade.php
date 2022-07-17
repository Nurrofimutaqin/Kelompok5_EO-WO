<body>
    @php

        // mengambil data dari yang dikirim dari form index.php
        $kota = $_POST['kota'];
        $tanggal = $_POST['tanggal'];
        $kelas = $_POST['kelas'];
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $alamat = $_POST['alamat'];
        $penyakit = $_POST['penyakit'];
        $namaortu = $_POST['namaortu'];

        //mengambil dokumen surat
        $document = file_get_contents('SURAT.rtf');

        //mereplace semua kata yang ada di file dengan variabel
        $document = str_replace('#KOTA', $kota, $document);
        $document = str_replace('#TANGGAL', date('d-m-Y', strtotime($tanggal)), $document);
        $document = str_replace('#KELAS', $kelas, $document);
        $document = str_replace('#NAMA', $nama, $document);
        $document = str_replace('#NIS', $nis, $document);
        $document = str_replace('#ALAMAT', $alamat, $document);
        $document = str_replace('#PENYAKIT', $penyakit, $document);
        $document = str_replace('#ORTU', $namaortu, $document);

        // header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
        // nama file yang dihasilkan adalah surat izin.docx
        header('Content-type: application/msword');
        header('Content-disposition: inline; filename=surat.doc');
        header('Content-length: ' . strlen($document));
        echo $document;
    @endphp
</body>
