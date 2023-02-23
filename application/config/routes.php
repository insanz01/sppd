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

$route['pengajuan/add_bpd'] = "PengajuanController/add_biaya_perjalanan_dinas";
$route['pengajuan/delete_bpd/(:any)'] = "PengajuanController/delete_biaya_perjalanan_dinas/$1";
$route['pengajuan/bpd/(:any)/(:any)'] = "PengajuanController/status_biaya_perjalanan_dinas/$1/$2";

$route['surat/sppd2'] = "SuratController/surat_perintah_perjalanan_dinas_2";
$route['surat/sppd/(:any)'] = "SuratController/surat_perintah_perjalanan_dinas/$1";
$route['surat/spt/(:any)'] = "SuratController/surat_perintah_tugas/$1";
$route['surat/lpd/(:any)'] = "SuratController/laporan_perjalanan_dinas/$1";
$route['surat/bpd/(:any)'] = "SuratController/biaya_perjalanan_dinas/$1";

$route['laporan/sppd'] = "LaporanController/surat_perintah_perjalanan_dinas";
$route['laporan/lpd'] = "LaporanController/laporan_perjalanan_dinas";
$route['laporan/bpd'] = "LaporanController/biaya_perjalanan_dinas";

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

$route['bulk/lpd/print'] = "SuratController/bulk_laporan_perjalanan_dinas";
$route['bulk/sppd/print'] = "SuratController/bulk_surat_perintah_perjalanan_dinas";
$route['bulk/spt/print'] = "SuratController/bulk_surat_perintah_tugas";
$route['bulk/bpd/print'] = "SuratController/bulk_biaya_perjalanan_dinas";

$route['list/lpd/print'] = "SuratController/list_laporan_perjalanan_dinas";
$route['list/sppd/print'] = "SuratController/list_surat_perintah_perjalanan_dinas";
$route['list/spt/print'] = "SuratController/list_surat_perintah_tugas";
$route['list/bpd/print'] = "SuratController/list_biaya_perjalanan_dinas";

$route["print/penyerahan_bpd/(:any)"] = "KwitansiController/print/$1";