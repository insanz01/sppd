<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AppController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'AppController/index';

$route['auth'] = "AuthController/index";
$route['auth/do_login'] = "AuthController/do_login";
$route['auth/logout'] = "AuthController/do_logout";

$route['karyawan'] = "KaryawanController/index";
$route['karyawan/add'] = "KaryawanController/add_karyawan";
$route['karyawan/do_add'] = "KaryawanController/do_add_karyawan";
$route['karyawan/edit/(:any)'] = "KaryawanController/edit_karyawan/$1";
$route['karyawan/do_edit'] = "KaryawanController/do_update_karyawan";
$route['karyawan/delete'] = "KaryawanController/delete_karyawan";

$route['pengajuan/sppd'] = "PengajuanController/surat_perintah_perjalanan_dinas";
$route['pengajuan/add_sppd'] = "PengajuanController/add_surat_perintah_perjalanan_dinas";
$route['pengajuan/edit_sppd/(:any)'] = "PengajuanController/edit_surat_perintah_perjalanan_dinas/$1";
$route['pengajuan/do_edit_sppd/(:any)'] = "PengajuanController/do_edit_surat_perintah_perjalanan_dinas/$1";
$route['pengajuan/delete_sppd/(:any)'] = "PengajuanController/delete_surat_perintah_perjalanan_dinas/$1";

$route['pengajuan/spt'] = "PengajuanController/surat_perintah_tugas";
$route['pengajuan/add_spt'] = "PengajuanController/add_surat_perintah_tugas";
$route['pengajuan/edit_spt/(:any)'] = "PengajuanController/edit_surat_perintah_tugas/$1";
$route['pengajuan/do_edit_spt/(:any)'] = "PengajuanController/do_edit_surat_perintah_tugas/$1";
$route['pengajuan/delete_spt/(:any)'] = "PengajuanController/delete_surat_perintah_tugas/$1";

$route['pengajuan/lpd'] = "PengajuanController/laporan_perjalanan_dinas";
$route['pengajuan/add_lpd'] = "PengajuanController/add_laporan_perjalanan_dinas";
$route['pengajuan/edit_lpd/(:any)'] = "PengajuanController/edit_laporan_perjalanan_dinas/$1";
$route['pengajuan/do_edit_lpd/(:any)'] = "PengajuanController/do_edit_laporan_perjalanan_dinas/$1";
$route['pengajuan/delete_lpd/(:any)'] = "PengajuanController/delete_laporan_perjalanan_dinas/$1";
$route['pengajuan/lpd/(:any)/(:any)'] = "PengajuanController/status_laporan_perjalanan_dinas/$1/$2";

$route['pengajuan/nd'] = "PengajuanController/nota_dinas";
$route['pengajuan/add_nd'] = "PengajuanController/add_nota_dinas";
$route['pengajuan/edit_nd/(:any)'] = "PengajuanController/edit_nota_dinas/$1";
$route['pengajuan/do_edit_nd/(:any)'] = "PengajuanController/do_edit_nota_dinas/$1";
$route['pengajuan/delete_nd/(:any)'] = "PengajuanController/delete_nota_dinas/$1";
$route['pengajuan/nd/(:any)/(:any)'] = "PengajuanController/status_nota_dinas/$1/$2";

$route['pengajuan/add_bpd'] = "PengajuanController/add_biaya_perjalanan_dinas";
$route['pengajuan/delete_bpd/(:any)'] = "PengajuanController/delete_biaya_perjalanan_dinas/$1";
$route['pengajuan/bpd/(:any)/(:any)'] = "PengajuanController/status_biaya_perjalanan_dinas/$1/$2";

$route['surat/sppd2'] = "SuratController/surat_perintah_perjalanan_dinas_2";
$route['surat/sppd/(:any)'] = "SuratController/surat_perintah_perjalanan_dinas/$1";
$route['surat/spt/(:any)'] = "SuratController/surat_perintah_tugas/$1";
$route['surat/lpd/(:any)'] = "SuratController/laporan_perjalanan_dinas/$1";
$route['surat/bpd/(:any)'] = "SuratController/biaya_perjalanan_dinas/$1";
$route['surat/ptpd/(:any)'] = "SuratController/pembatalan_tugas_perjalanan_dinas/$1";
$route['surat/nd/(:any)'] = "SuratController/nota_dinas/$1";

$route['laporan/sppd'] = "LaporanController/surat_perintah_perjalanan_dinas";
$route['laporan/lpd'] = "LaporanController/laporan_perjalanan_dinas";
$route['laporan/bpd'] = "LaporanController/biaya_perjalanan_dinas";
$route['laporan/nd'] = "LaporanController/nota_dinas";

$route['laporan/spt'] = "LaporanController/surat_perintah_tugas";

// $route['na/bpd'] = "NonAdminController/biaya_perjalanan_dinas";
$route['na/bpd'] = "PengajuanController/biaya_perjalanan_dinas";
$route['na/bpd/laporan'] = "NonAdminController/laporan_biaya_perjalanan_dinas";
$route['na/bpd/add'] = "NonAdminController/add_biaya_perjalanan_dinas";
$route['na/bpd/delete/(:any)'] = "NonAdminController/delete_biaya_perjalanan_dinas/$1";

$route['na/lpd'] = "NonAdminController/laporan_perjalanan_dinas";

$route['kwitansi'] = "KwitansiController/index";
$route['kwitansi/add'] = "KwitansiController/add";
$route['kwitansi/do_add'] = "KwitansiController/do_add";
$route['kwitansi/delete/(:any)'] = "KwitansiController/delete/$1";

$route['api/karyawan/(:any)'] = 'APIController/karyawan_by_NIP/$1';
$route['api/anggaran/(:any)/(:any)/(:any)'] = "APIController/beban_anggaran_pesawat/$1/$2/$3";
$route['api/jabatan/chart'] = 'APIController/chart_jabatan';
$route['api/sppd/(:any)'] = 'APIController/sppd/$1';
$route['api/spt/(:any)'] = 'APIController/spt/$1';

$route['api/provinsi'] = 'APIController/provinsi';
$route['api/kabupaten/(:any)'] = 'APIController/kabupaten/$1';

$route['api/biaya/hotel/(:any)'] = "APIController/biaya_hotel/$1";
$route['api/biaya/pesawat/(:any)'] = "APIController/biaya_pesawat/$1";
$route['api/biaya/harian/(:any)'] = "APIController/biaya_harian/$1";
$route['api/biaya/taxi/(:any)'] = "APIController/biaya_taxi/$1";
$route['api/biaya/sewa/(:any)'] = "APIController/biaya_sewa/$1";


$route['bulk/lpd/print'] = "SuratController/bulk_laporan_perjalanan_dinas";
$route['bulk/sppd/print'] = "SuratController/bulk_surat_perintah_perjalanan_dinas";
$route['bulk/spt/print'] = "SuratController/bulk_surat_perintah_tugas";
$route['bulk/bpd/print'] = "SuratController/bulk_biaya_perjalanan_dinas";

$route['list/lpd/print'] = "SuratController/list_laporan_perjalanan_dinas";
$route['list/sppd/print'] = "SuratController/list_surat_perintah_perjalanan_dinas";
$route['list/spt/print'] = "SuratController/list_surat_perintah_tugas";
$route['list/bpd/print'] = "SuratController/list_biaya_perjalanan_dinas";
$route['list/nd/print'] = "SuratController/list_nota_dinas";

$route['biaya/pesawat'] = "BiayaController/list_biaya_pesawat";
$route['biaya/pesawat/add'] = "BiayaController/add_biaya_pesawat";
$route['biaya/pesawat/do_add'] = "BiayaController/do_add_biaya_pesawat";
$route['biaya/pesawat/edit/(:any)'] = "BiayaController/edit_biaya_pesawat/$1";
$route['biaya/pesawat/do_edit/(:any)'] = "BiayaController/do_edit_biaya_pesawat/$1";
$route['biaya/pesawat/delete'] = "BiayaController/delete_biaya_pesawat";

$route['biaya/taxi'] = "BiayaController/list_biaya_taxi";
$route['biaya/taxi/add'] = "BiayaController/add_biaya_taxi";
$route['biaya/taxi/do_add'] = "BiayaController/do_add_biaya_taxi";
$route['biaya/taxi/edit/(:any)'] = "BiayaController/edit_biaya_taxi/$1";
$route['biaya/taxi/do_edit/(:any)'] = "BiayaController/do_edit_biaya_taxi/$1";
$route['biaya/taxi/delete'] = "BiayaController/delete_biaya_taxi";

$route['biaya/hotel'] = "BiayaController/list_biaya_hotel";
$route['biaya/hotel/add'] = "BiayaController/add_biaya_hotel";
$route['biaya/hotel/do_add'] = "BiayaController/do_add_biaya_hotel";
$route['biaya/hotel/edit/(:any)'] = "BiayaController/edit_biaya_hotel/$1";
$route['biaya/hotel/do_edit/(:any)'] = "BiayaController/do_edit_biaya_hotel/$1";
$route['biaya/hotel/delete'] = "BiayaController/delete_biaya_hotel";

$route['biaya/transportasi'] = "BiayaController/list_biaya_transportasi";
$route['biaya/transportasi/add'] = "BiayaController/add_biaya_transportasi";
$route['biaya/transportasi/do_add'] = "BiayaController/do_add_biaya_transportasi";
$route['biaya/transportasi/edit/(:any)'] = "BiayaController/edit_biaya_transportasi/$1";
$route['biaya/transportasi/do_edit/(:any)'] = "BiayaController/do_edit_biaya_transportasi/$1";
$route['biaya/transportasi/delete'] = "BiayaController/delete_biaya_transportasi";

$route['biaya/harian'] = "BiayaController/list_biaya_harian";
$route['biaya/harian/add'] = "BiayaController/add_biaya_harian";
$route['biaya/harian/do_add'] = "BiayaController/do_add_biaya_harian";
$route['biaya/harian/edit/(:any)'] = "BiayaController/edit_biaya_harian/$1";
$route['biaya/harian/do_edit/(:any)'] = "BiayaController/do_edit_biaya_harian/$1";
$route['biaya/harian/delete'] = "BiayaController/delete_biaya_harian";

$route['biaya/harian_dki'] = "BiayaController/list_biaya_harian_dki";
$route['biaya/harian_dki/add'] = "BiayaController/add_biaya_harian_dki";
$route['biaya/harian_dki/do_add'] = "BiayaController/do_add_biaya_harian_dki";
$route['biaya/harian_dki/edit/(:any)'] = "BiayaController/edit_biaya_harian_dki/$1";
$route['biaya/harian_dki/do_edit/(:any)'] = "BiayaController/do_edit_biaya_harian_dki/$1";
$route['biaya/harian_dki/delete'] = "BiayaController/delete_biaya_harian_dki";

$route['kinerja'] = "KinerjaController/index";
$route['kinerja/detail/(:any)'] = "KinerjaController/detail/$1";
$route['kinerja/update/skor'] = "KinerjaController/update_skor";

$route['batalkan/sppd'] = "BatalkanController/index";
$route['batalkan/sppd/add/(:any)'] = "BatalkanController/add/$1";
$route['batalkan/sppd/riwayat'] = "BatalkanController/riwayat";
$route['batalkan/sppd/do_batal/(:any)'] = "BatalkanController/do_batal/$1";
$route['batalkan/sppd/riwayat_na'] = "BatalkanController/riwayat_na";

$route['permintaan/sppd'] = "PermintaanController/sppd";
$route['permintaan/sppd/approve/(:any)'] = "PermintaanController/sppd_approve/$1";
$route['permintaan/sppd/reject/(:any)'] = "PermintaanController/sppd_reject/$1";

$route['pengganti'] = "PenggantiController/index";
$route['pengganti/add'] = "PenggantiController/add";
$route['pengganti/do_add'] = "PenggantiController/do_add";
$route['pengganti/print/(:any)'] = "PenggantiController/print/$1";

$route['penolakan'] = "PenolakanController/index";

$route['list/penyerahan_bpd/print'] = "KwitansiController/list_penyerahan_bpd";

$route["print/penyerahan_bpd/(:any)"] = "KwitansiController/print/$1";
$route['print/riwayat/penolakan'] = "OthersController/print_riwayat_penolakan";

$route["print/biaya/pesawat"] = "OthersController/print_biaya_pesawat";
$route["print/biaya/hotel"] = "OthersController/print_biaya_hotel";
$route["print/biaya/taxi"] = "OthersController/print_biaya_taxi";
$route["print/biaya/sewa"] = "OthersController/print_biaya_sewa";
$route["print/biaya/harian"] = "OthersController/print_biaya_harian";

$route['print/karyawan'] = "OthersController/print_karyawan";