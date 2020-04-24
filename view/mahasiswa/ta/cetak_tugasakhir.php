<?php
require('/../../fpdf18/fpdf.php'); // file fpdf.php harus diincludekan
class PDF extends FPDF
{
    function Header()
    {
// setting properti font
        $this->SetFont('Arial', 'I', 10);
// menulis header
        $this->Cell(30, 10, 'Surat Berita Acara Tugas Akhir', 0, 0, 'L');
// membuat jarak terhadap cell sebelumnya
        $this->Cell(132);
// setting properti font
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(30, 10, 'PSSI UNEJ', 0, 0, 'L');
// membuat garis dari koordinat (11 mm, 18 mm) sampai koordinat (198
// mm,18 mm)
        $this->Line(11, 18, 198, 18);
// membuat space kosong antara header dengan teks konten
        $this->Ln(20);
    }

}

$pdf = new PDF('P', 'mm', 'A5');
$pdf->SetMargins(4, 4, 3);

$title = 'Surat Berita Acara Tugas Akhir';
$pdf->SetTitle($title);
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->MultiCell(0, 5, "
   Berita Acara pada mahasiswa yang diuji oleh :

    NIP                     :	" . $data[0]['Penguji'] . "
    Nama Dosen       :	" . $data[0]['namaLengkap'] . "

    berikut ini adalah data mahasiswa yang akan diuji :
    NIM                           :	" . $data[0]['nim'] . "
    Nama Mahasiswa      :	" . $data[0]['nama_user'] . "
    Judul Skripsi              :	" . $data[0]['judul_TA'] . "

    Demikian surat tugas ini, Saya mengucapkan terimakasih.



                                                             Jember, 10-10-16



                                                                 ttd Dekan
	. ");
$pdf->Output();
?>