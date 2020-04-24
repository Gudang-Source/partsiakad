-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2015 at 06:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_level_adm_um`
--

CREATE TABLE IF NOT EXISTS `id_level_adm_um` (
  `id_level_adm` varchar(1) NOT NULL,
  `level_adm_um` varchar(20) NOT NULL,
  PRIMARY KEY (`id_level_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_ujian_um`
--

CREATE TABLE IF NOT EXISTS `lokasi_ujian_um` (
  `id_lokasi` varchar(5) NOT NULL,
  `nama_lokasi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_beasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_beasiswa` (
  `idBea` int(3) NOT NULL AUTO_INCREMENT,
  `namaBea` varchar(35) NOT NULL,
  `jenisBea` int(1) NOT NULL,
  `persyaratan` text NOT NULL,
  `tglAwalDaftar` date NOT NULL,
  `tglAkhirDaftar` date NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`idBea`),
  KEY `jenisBea` (`jenisBea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cutikuliah`
--

CREATE TABLE IF NOT EXISTS `tb_cutikuliah` (
  `idCuti` int(3) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(12) NOT NULL,
  `alasanCuti` text NOT NULL,
  `lamaCuti` int(1) NOT NULL,
  `statusDPA` int(1) NOT NULL,
  `statusSek1` int(1) NOT NULL,
  `statusKetua` int(1) NOT NULL,
  `statusBAAK` int(1) NOT NULL,
  `statusPR1` int(1) NOT NULL,
  PRIMARY KEY (`idCuti`),
  KEY `NIM` (`NIM`,`statusDPA`,`statusSek1`,`statusKetua`,`statusBAAK`,`statusPR1`),
  KEY `statusDPA` (`statusDPA`),
  KEY `statusSek1` (`statusSek1`),
  KEY `statusKetua` (`statusKetua`),
  KEY `statusBAAK` (`statusBAAK`),
  KEY `statusPR1` (`statusPR1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_data_mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `id_jalur_seleksi` varchar(5) NOT NULL,
  `id_prodi` varchar(2) NOT NULL,
  `akademik_masuk` float NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telp` varchar(10) NOT NULL,
  `alamat_email` varchar(30) NOT NULL,
  `akun_twitter` varchar(20) NOT NULL,
  `kota_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_jenis_kelamin` varchar(1) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `id_status_sipil` varchar(2) NOT NULL,
  `id_golongan_darah` varchar(1) DEFAULT NULL,
  `alamat_tinggal` varchar(25) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `sumber_biaya` varchar(10) NOT NULL,
  `ekstrakulikuler` varchar(10) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `asal_sma` varchar(30) NOT NULL,
  `alamat_sekolah` varchar(25) NOT NULL,
  `telp_fax_sekolah` varchar(12) NOT NULL,
  `id_jurusan_sma` varchar(1) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `jumlah_pelajaran_uan` int(1) NOT NULL,
  `jumlah_nilai_uan` float NOT NULL,
  `tl_di_ijazah` varchar(15) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `alamat_ortu` varchar(25) NOT NULL,
  `no_telp_hp` int(13) NOT NULL,
  `id_pendidikan_ortu` varchar(1) NOT NULL,
  `id_pekerjaan` varchar(1) NOT NULL,
  `id_penghasilan` varchar(1) NOT NULL,
  PRIMARY KEY (`nim`,`id_prodi`),
  KEY `id_jalur_seleksi` (`id_jalur_seleksi`,`id_jenis_kelamin`),
  KEY `id_prodi` (`id_prodi`),
  KEY `id_jalur_seleksi_2` (`id_jalur_seleksi`),
  KEY `id_pekerjaan` (`id_pekerjaan`,`id_penghasilan`),
  KEY `id_penghasilan` (`id_penghasilan`),
  KEY `id_pendidikan_ortu` (`id_pendidikan_ortu`),
  KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  KEY `id_status_sipil` (`id_status_sipil`),
  KEY `id_golongan_darah` (`id_golongan_darah`),
  KEY `id_jurusan_sma` (`id_jurusan_sma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE IF NOT EXISTS `tb_fakultas` (
  `id_fakultas` varchar(2) NOT NULL,
  `nama_fakultas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan_darah`
--

CREATE TABLE IF NOT EXISTS `tb_golongan_darah` (
  `id_gol_darah` varchar(1) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  PRIMARY KEY (`id_gol_darah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalur_seleksi`
--

CREATE TABLE IF NOT EXISTS `tb_jalur_seleksi` (
  `id_jalur` varchar(5) NOT NULL,
  `nama_jalur_seleksi` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jalur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbea`
--

CREATE TABLE IF NOT EXISTS `tb_jenisbea` (
  `idJenis` int(1) NOT NULL AUTO_INCREMENT,
  `jenisBea` varchar(10) NOT NULL,
  PRIMARY KEY (`idJenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kelamin` (
  `id_jenis_kelamin` varchar(1) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  PRIMARY KEY (`id_jenis_kelamin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan_sma`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan_sma` (
  `id_jurusan_sma` varchar(1) NOT NULL,
  `jurusan_sma` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jurusan_sma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_level_admin`
--

CREATE TABLE IF NOT EXISTS `tb_level_admin` (
  `id_level_admin` varchar(3) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_level_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai_siakad`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai_siakad` (
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `id_level_admin` varchar(3) NOT NULL,
  `id_lvl_adm_um` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `id_level_admin` (`id_level_admin`),
  KEY `id_lvl_adm_um` (`id_lvl_adm_um`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tb_pekerjaan` (
  `id_pekerjaan` varchar(1) NOT NULL,
  `nama_pekerjaan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tb_pendaftar` (
  `idPendaftar` int(4) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(12) NOT NULL,
  `semester` int(1) NOT NULL,
  `IPK` float NOT NULL,
  `pengalamanOrganisasi` text NOT NULL,
  `pekerjaanBapak` varchar(20) NOT NULL,
  `gajiBapak` double NOT NULL,
  `pekerjaanIbu` varchar(20) NOT NULL,
  `gajiIbu` double NOT NULL,
  `jmlSaudara` int(1) NOT NULL,
  `dokumenTerkait` longblob NOT NULL,
  `statusPendaftaran` int(1) NOT NULL,
  `statusSeleksi` int(1) NOT NULL,
  `validasiSeleksi` int(1) NOT NULL,
  PRIMARY KEY (`idPendaftar`),
  KEY `statusPendaftaran` (`statusPendaftaran`),
  KEY `validasiSeleksi` (`validasiSeleksi`),
  KEY `NIM` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan_ortu`
--

CREATE TABLE IF NOT EXISTS `tb_pendidikan_ortu` (
  `id_pendidikan_ortu` varchar(1) NOT NULL,
  `tingkat_pendidikan` varchar(14) NOT NULL,
  PRIMARY KEY (`id_pendidikan_ortu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerimabea`
--

CREATE TABLE IF NOT EXISTS `tb_penerimabea` (
  `idPenerima` int(4) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(12) NOT NULL,
  `idBea` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`idPenerima`),
  KEY `NIM` (`NIM`,`idBea`,`status`),
  KEY `idBea` (`idBea`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghasilan`
--

CREATE TABLE IF NOT EXISTS `tb_penghasilan` (
  `id_penghasilan` varchar(1) NOT NULL,
  `rentang_penghasilan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_penghasilan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengundurandiri`
--

CREATE TABLE IF NOT EXISTS `tb_pengundurandiri` (
  `idPengDiri` int(3) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(12) NOT NULL,
  `alasan` text NOT NULL,
  `statusDPA` int(1) NOT NULL,
  `statusSek1` int(1) NOT NULL,
  `statusKetua` int(1) NOT NULL,
  `statusBAAK` int(1) NOT NULL,
  `statusPR1` int(1) NOT NULL,
  PRIMARY KEY (`idPengDiri`),
  KEY `statusDPA` (`statusDPA`),
  KEY `statusSek1` (`statusSek1`),
  KEY `statusKetua` (`statusKetua`),
  KEY `statusBAAK` (`statusBAAK`),
  KEY `statusPR1` (`statusPR1`),
  KEY `NIM` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penundaanukt`
--

CREATE TABLE IF NOT EXISTS `tb_penundaanukt` (
  `idPenundaan` int(3) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(12) NOT NULL,
  `alasan` text NOT NULL,
  `statusDPA` int(1) NOT NULL,
  `statusSek1` int(1) NOT NULL,
  `statusKetua` int(1) NOT NULL,
  `statusBAAK` int(1) NOT NULL,
  `statusPR1` int(1) NOT NULL,
  PRIMARY KEY (`idPenundaan`),
  KEY `NIM` (`NIM`,`statusDPA`,`statusSek1`,`statusKetua`,`statusBAAK`,`statusPR1`),
  KEY `statusDPA` (`statusDPA`),
  KEY `statusSek1` (`statusSek1`),
  KEY `statusKetua` (`statusKetua`),
  KEY `statusBAAK` (`statusBAAK`),
  KEY `statusPR1` (`statusPR1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta_um`
--

CREATE TABLE IF NOT EXISTS `tb_peserta_um` (
  `id_peserta` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama_peserta` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Tempat_Lahir` varchar(15) NOT NULL,
  `alamat_tinggal` varchar(25) NOT NULL,
  `Nama_Ayah` varchar(20) NOT NULL,
  `Nama_Ibu` varchar(20) NOT NULL,
  `id_pekerjaan` varchar(1) NOT NULL,
  `nama_sma_smk` varchar(30) NOT NULL,
  `id_jurusan_sma` varchar(3) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `rata-rata_nilai_un` float NOT NULL,
  `id_prodi_pilihan` varchar(2) NOT NULL,
  `id_lokasi` varchar(5) NOT NULL,
  `nilai_um_tkd` float NOT NULL,
  `nilai_um_mipa` float NOT NULL,
  `status_lulus` varchar(1) NOT NULL,
  `validasi_data_mhs` int(1) NOT NULL,
  `id_ukt_mahasiswa` varchar(1) NOT NULL,
  `ver_ukt_kmhs` int(1) NOT NULL,
  `ver_ukt_skr1` int(1) NOT NULL,
  `ver_ukt_dekan` int(1) NOT NULL,
  `verifikasi_data_mhs` int(1) NOT NULL,
  PRIMARY KEY (`id_peserta`),
  KEY `id_jenis_kelamin` (`jenis_kelamin`),
  KEY `jurusan_sma` (`id_jurusan_sma`,`id_prodi_pilihan`),
  KEY `id_ukt_mahasiswa` (`id_ukt_mahasiswa`),
  KEY `id_prodi_pilihan` (`id_prodi_pilihan`),
  KEY `id_lokasi` (`id_lokasi`),
  KEY `id_pekerjaan` (`id_pekerjaan`),
  KEY `id_jurusan_sma` (`id_jurusan_sma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindahkuliah`
--

CREATE TABLE IF NOT EXISTS `tb_pindahkuliah` (
  `idPindah` int(3) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(12) NOT NULL,
  `alasan` text NOT NULL,
  `idFakultas` varchar(2) NOT NULL,
  `idProdi` varchar(2) NOT NULL,
  `statusDPA` int(1) NOT NULL,
  `statusSek1` int(1) NOT NULL,
  `statusKetua` int(1) NOT NULL,
  `statusBAAK` int(1) NOT NULL,
  `statusPR1` int(1) NOT NULL,
  PRIMARY KEY (`idPindah`),
  KEY `statusDPA` (`statusDPA`),
  KEY `statusSek1` (`statusSek1`),
  KEY `statusKetua` (`statusKetua`),
  KEY `statusBAAK` (`statusBAAK`),
  KEY `statusPR1` (`statusPR1`),
  KEY `NIM` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE IF NOT EXISTS `tb_prodi` (
  `id_prodi` varchar(2) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `id_fakultas` varchar(2) NOT NULL,
  PRIMARY KEY (`id_prodi`),
  KEY `id_fakultas` (`id_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_statusbea`
--

CREATE TABLE IF NOT EXISTS `tb_statusbea` (
  `idstatus` int(1) NOT NULL AUTO_INCREMENT,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_statusvalidasi`
--

CREATE TABLE IF NOT EXISTS `tb_statusvalidasi` (
  `idValidasi` int(1) NOT NULL AUTO_INCREMENT,
  `statusValidasi` varchar(17) NOT NULL,
  PRIMARY KEY (`idValidasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_status_ktp` (
  `id_status_sipil` varchar(2) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`id_status_sipil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukt_mhs`
--

CREATE TABLE IF NOT EXISTS `ukt_mhs` (
  `id_ukt_mahasiswa` varchar(1) NOT NULL,
  `nominal` varchar(10) NOT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id_ukt_mahasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_beasiswa`
--
ALTER TABLE `tb_beasiswa`
  ADD CONSTRAINT `tb_beasiswa_ibfk_1` FOREIGN KEY (`jenisBea`) REFERENCES `tb_jenisbea` (`idJenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_cutikuliah`
--
ALTER TABLE `tb_cutikuliah`
  ADD CONSTRAINT `tb_cutikuliah_ibfk_6` FOREIGN KEY (`statusPR1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cutikuliah_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cutikuliah_ibfk_2` FOREIGN KEY (`statusDPA`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cutikuliah_ibfk_3` FOREIGN KEY (`statusSek1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cutikuliah_ibfk_4` FOREIGN KEY (`statusKetua`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cutikuliah_ibfk_5` FOREIGN KEY (`statusBAAK`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_data_mahasiswa`
--
ALTER TABLE `tb_data_mahasiswa`
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_2` FOREIGN KEY (`id_jalur_seleksi`) REFERENCES `tb_jalur_seleksi` (`id_jalur`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_3` FOREIGN KEY (`id_penghasilan`) REFERENCES `tb_penghasilan` (`id_penghasilan`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_4` FOREIGN KEY (`id_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_pekerjaan`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_5` FOREIGN KEY (`id_pendidikan_ortu`) REFERENCES `tb_pendidikan_ortu` (`id_pendidikan_ortu`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_6` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `tb_jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_7` FOREIGN KEY (`id_status_sipil`) REFERENCES `tb_status_ktp` (`id_status_sipil`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_8` FOREIGN KEY (`id_golongan_darah`) REFERENCES `tb_golongan_darah` (`id_gol_darah`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_9` FOREIGN KEY (`id_jurusan_sma`) REFERENCES `tb_jurusan_sma` (`id_jurusan_sma`);

--
-- Constraints for table `tb_pegawai_siakad`
--
ALTER TABLE `tb_pegawai_siakad`
  ADD CONSTRAINT `tb_pegawai_siakad_ibfk_1` FOREIGN KEY (`id_level_admin`) REFERENCES `tb_level_admin` (`id_level_admin`),
  ADD CONSTRAINT `tb_pegawai_siakad_ibfk_2` FOREIGN KEY (`id_lvl_adm_um`) REFERENCES `id_level_adm_um` (`id_level_adm`);

--
-- Constraints for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD CONSTRAINT `tb_pendaftar_ibfk_1` FOREIGN KEY (`statusPendaftaran`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftar_ibfk_2` FOREIGN KEY (`validasiSeleksi`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftar_ibfk_3` FOREIGN KEY (`NIM`) REFERENCES `tb_data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penerimabea`
--
ALTER TABLE `tb_penerimabea`
  ADD CONSTRAINT `tb_penerimabea_ibfk_1` FOREIGN KEY (`idBea`) REFERENCES `tb_beasiswa` (`idBea`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penerimabea_ibfk_2` FOREIGN KEY (`status`) REFERENCES `tb_statusbea` (`idstatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penerimabea_ibfk_3` FOREIGN KEY (`NIM`) REFERENCES `tb_data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengundurandiri`
--
ALTER TABLE `tb_pengundurandiri`
  ADD CONSTRAINT `tb_pengundurandiri_ibfk_1` FOREIGN KEY (`statusDPA`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengundurandiri_ibfk_2` FOREIGN KEY (`statusSek1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengundurandiri_ibfk_3` FOREIGN KEY (`statusKetua`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengundurandiri_ibfk_4` FOREIGN KEY (`statusBAAK`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengundurandiri_ibfk_5` FOREIGN KEY (`statusPR1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengundurandiri_ibfk_6` FOREIGN KEY (`NIM`) REFERENCES `tb_data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penundaanukt`
--
ALTER TABLE `tb_penundaanukt`
  ADD CONSTRAINT `tb_penundaanukt_ibfk_1` FOREIGN KEY (`statusDPA`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penundaanukt_ibfk_2` FOREIGN KEY (`statusSek1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penundaanukt_ibfk_3` FOREIGN KEY (`statusKetua`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penundaanukt_ibfk_4` FOREIGN KEY (`statusBAAK`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penundaanukt_ibfk_5` FOREIGN KEY (`statusPR1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penundaanukt_ibfk_6` FOREIGN KEY (`NIM`) REFERENCES `tb_data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_peserta_um`
--
ALTER TABLE `tb_peserta_um`
  ADD CONSTRAINT `tb_peserta_um_ibfk_1` FOREIGN KEY (`id_prodi_pilihan`) REFERENCES `tb_prodi` (`id_prodi`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_2` FOREIGN KEY (`jenis_kelamin`) REFERENCES `tb_jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_3` FOREIGN KEY (`id_ukt_mahasiswa`) REFERENCES `ukt_mhs` (`id_ukt_mahasiswa`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_4` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi_ujian_um` (`id_lokasi`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_5` FOREIGN KEY (`id_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_pekerjaan`);

--
-- Constraints for table `tb_pindahkuliah`
--
ALTER TABLE `tb_pindahkuliah`
  ADD CONSTRAINT `tb_pindahkuliah_ibfk_1` FOREIGN KEY (`statusDPA`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pindahkuliah_ibfk_2` FOREIGN KEY (`statusSek1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pindahkuliah_ibfk_3` FOREIGN KEY (`statusKetua`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pindahkuliah_ibfk_4` FOREIGN KEY (`statusBAAK`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pindahkuliah_ibfk_5` FOREIGN KEY (`statusPR1`) REFERENCES `tb_statusvalidasi` (`idValidasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pindahkuliah_ibfk_6` FOREIGN KEY (`NIM`) REFERENCES `tb_data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD CONSTRAINT `tb_prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `tb_fakultas` (`id_fakultas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
