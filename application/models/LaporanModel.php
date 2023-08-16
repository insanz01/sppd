<?php

class LaporanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_reports($target) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_all_laporan_perjalanan_dinas();
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_all_surat_perintah_perjalanan_dinas();
        break;
      case "surat_perintah_tugas":
        return $this->get_all_surat_perintah_tugas();
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_all_biaya_perjalanan_dinas();
        break;
      case "nota_dinas":
        return $this->get_all_nota_dinas();
        break;
    }
  }

  public function get_all_reports_filter($target, $filter) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_all_laporan_perjalanan_dinas_filter($filter);
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_all_surat_perintah_perjalanan_dinas_filter($filter);
        break;
      case "surat_perintah_tugas":
        return $this->get_all_surat_perintah_tugas_filter($filter);
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_all_biaya_perjalanan_dinas_filter($filter);
        break;
    }
  }

  public function get_single_report_by_hash($target) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_single_laporan_perjalanan_dinas();
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_single_surat_perintah_perjalanan_dinas();
        break;
      case "surat_perintah_tugas":
        return $this->get_single_surat_perintah_tugas();
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_single_biaya_perjalanan_dinas();
        break;
    }
  }

  public function get_all_reports_by_user($target) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_all_laporan_perjalanan_dinas_by_user();
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_all_surat_perintah_perjalanan_dinas_by_user();
        break;
      case "surat_perintah_tugas":
        return $this->get_all_surat_perintah_tugas_by_user();
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_all_biaya_perjalanan_dinas_by_user();
        break;
    }
  }

  public function get_all_reports_by_user_filter($target, $filter) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_all_laporan_perjalanan_dinas_by_user_filter($filter);
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_all_surat_perintah_perjalanan_dinas_by_user_filter($filter);
        break;
      case "surat_perintah_tugas":
        return $this->get_all_surat_perintah_tugas_by_user_filter($filter);
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_all_biaya_perjalanan_dinas_by_user_filter($filter);
        break;
      case "nota_dinas":
        return $this->get_all_nota_dinas_filter($filter);
        break;
    }
  }

  public function get_all_laporan_perjalanan_dinas() {
    $query = "SELECT * FROM laporan_perjalanan_dinas";

    $lpd = $this->db->query($query)->result_array();

    $results = [];

    foreach($lpd as $l) {
      $status = "initial";
      $result = $l;

      if($l['status'] == 1) {
        $status = "diterima";
      } else if ($l['status'] == -1) {
        $status = "ditolak";
      }

      $result['status'] = $status;

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_nota_dinas() {
    $query = "SELECT * FROM nota_dinas";

    $nd = $this->db->query($query)->result_array();

    return $nd;
  }

  public function get_all_surat_perintah_perjalanan_dinas() {
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_perjalanan_dinas_existing($source = "surat_perintah_tugas") {
    $sourceTable = "surat_perintah_tugas";

    $attrName = "nomor_SPPD";
    $attrTarget = "nomor_SPPD";
    if($source == "surat_perintah_tugas") {
      $attrName = "nomor_SPPD";
    } else if($source == "biaya_perjalanan_dinas") {
      $attrName = "nomor_SPPD";
    } else if($source == "laporan_perjalanan_dinas") {
      $attrName = "perihal";
      $attrTarget = "maksud_perjalanan_dinas";
      $sourceTable = "surat_perintah_perjalanan_dinas";
    } else if($source == "surat_perintah_perjalanan_dinas") {
      $attrName = "nomor_SPPD";
    } else if($source == "nota_dinas") {
      $sourceTable = "surat_perintah_perjalanan_dinas";
    }

    $query = "SELECT * FROM $sourceTable WHERE $attrTarget NOT IN (SELECT $attrName FROM $source)";
    
    return $this->db->query($query)->result_array();
  }

  public function get_single_surat_perintah_perjalanan_dinas($hash_id) {
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas WHERE hash_id = '$hash_id'";

    return $this->db->query($query)->row_array();
  }

  public function get_all_surat_perintah_tugas() {
    $query = "SELECT * FROM surat_perintah_tugas";

    return $this->db->query($query)->result_array();
  }

  public function get_single_surat_perintah_tugas($hash_id) {
    $query = "SELECT * FROM surat_perintah_tugas WHERE hash_id = '$hash_id'";

    return $this->db->query($query)->row_array();
  }

  public function get_all_biaya_perjalanan_dinas() {
    $query = "SELECT b.id, b.hash_id, b.nomor_SPPD, k.nama as nama_karyawan, b.status FROM biaya_perjalanan_dinas b JOIN karyawan k ON b.user_id = k.user_id ORDER BY b.id DESC";

    $bpd = $this->db->query($query)->result_array();
    $results = [];

    foreach ($bpd as $b) {
      $status = 'initial';

      if($b['status'] == -1) {
        $status = "ditolak";
      } else if($b['status'] == 1) {
        $status = "diterima";
      }

      $result = [
        'id' => $b['id'],
        'hash_id' => $b['hash_id'],
        'nomor_SPPD' => $b['nomor_SPPD'],
        'nama_karyawan' => $b['nama_karyawan'],
        'status' => $status,
      ];

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_biaya_perjalanan_dinas_by_user() {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT b.id, b.hash_id, b.file_dokumen, k.nama as nama_karyawan, b.status, b.nomor_SPPD, b.tanggal, b.perincian_biaya, b.jumlah_biaya, b.keterangan, b.nama_bendaharawan, b.NIP_bendaharawan FROM biaya_perjalanan_dinas b JOIN karyawan k ON b.user_id = k.user_id WHERE b.user_id = $user_id ORDER BY b.id DESC";

    $bpd = $this->db->query($query)->result_array();
    $results = [];

    foreach ($bpd as $b) {
      $status = 'initial';

      if($b['status'] == -1) {
        $status = "ditolak";
      } else if($b['status'] == 1) {
        $status = "diterima";
      }

      $result = [
        'id' => $b['id'],
        'hash_id' => $b['hash_id'],
        'nomor_SPPD' => $b['nomor_SPPD'],
        'tanggal' => $b['tanggal'],
        'perincian_biaya' => $b['perincian_biaya'],
        'jumlah_biaya' => $b['jumlah_biaya'],
        'keterangan' => $b['keterangan'],
        'nama_bendaharawan' => $b['nama_bendaharawan'],
        'NIP_bendaharawan' => $b['NIP_bendaharawan'],
        'file_pengajuan' => $b['file_dokumen'],
        'nama_karyawan' => $b['nama_karyawan'],
        'status' => $status,
      ];

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_biaya_perjalanan_dinas_by_user_filter($filter) {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT b.id, b.hash_id, b.file_dokumen, k.nama as nama_karyawan, b.status, b.nomor_SPPD, b.tanggal, b.perincian_biaya, b.jumlah_biaya, b.keterangan, b.nama_bendaharawan, b.NIP_bendaharawan FROM biaya_perjalanan_dinas b JOIN karyawan k ON b.user_id = k.user_id WHERE b.user_id = $user_id AND DATE(b.created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' ORDER BY b.id DESC";

    $bpd = $this->db->query($query)->result_array();
    $results = [];

    foreach ($bpd as $b) {
      $status = 'initial';

      if($b['status'] == -1) {
        $status = "ditolak";
      } else if($b['status'] == 1) {
        $status = "diterima";
      }

      $result = [
        'id' => $b['id'],
        'hash_id' => $b['hash_id'],
        'nomor_SPPD' => $b['nomor_SPPD'],
        'tanggal' => $b['tanggal'],
        'perincian_biaya' => $b['perincian_biaya'],
        'jumlah_biaya' => $b['jumlah_biaya'],
        'keterangan' => $b['keterangan'],
        'nama_bendaharawan' => $b['nama_bendaharawan'],
        'NIP_bendaharawan' => $b['NIP_bendaharawan'],
        'file_pengajuan' => $b['file_dokumen'],
        'nama_karyawan' => $b['nama_karyawan'],
        'status' => $status,
      ];

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_laporan_perjalanan_dinas_by_user() {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');

    $query = "SELECT * FROM laporan_perjalanan_dinas WHERE user_id = $user_id";

    $lpd = $this->db->query($query)->result_array();

    $results = [];

    foreach($lpd as $l) {
      $status = "initial";
      $result = $l;

      if($l['status'] == 1) {
        $status = "diterima";
      } else if ($l['status'] == -1) {
        $status = "ditolak";
      }

      $result['status'] = $status;

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_surat_perintah_perjalanan_dinas_by_user() {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_tugas_by_user() {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT * FROM surat_perintah_tugas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_laporan_perjalanan_dinas_by_user_filter($filter) {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');

    $query = "SELECT * FROM laporan_perjalanan_dinas WHERE user_id = $user_id AND DATE(created_at) BETWEEN $filter[filter_awal] AND $filter[filter_akhir]";

    $lpd = $this->db->query($query)->result_array();

    $results = [];

    foreach($lpd as $l) {
      $status = "initial";
      $result = $l;

      if($l['status'] == 1) {
        $status = "diterima";
      } else if ($l['status'] == -1) {
        $status = "ditolak";
      }

      $result['status'] = $status;

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_surat_perintah_perjalanan_dinas_by_user_filter($filter) {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_tugas_by_user_filter($filter) {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT * FROM surat_perintah_tugas WHERE DATE(created_at) BETWEEN $filter[filter_awal] AND $filter[filter_akhir] OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

    return $this->db->query($query)->result_array();
  }

  // FILTER
  public function get_all_nota_dinas_filter($filter) {
    $query = "SELECT * FROM nota_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

    return $this->db->query($query)->result_array();
  }

  public function get_all_biaya_perjalanan_dinas_filter($filter) {
    $query = "SELECT * FROM biaya_perjalanan_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

    // return $this->db->query($query)->result_array();

    $bpd = $this->db->query($query)->result_array();
    $results = [];

    foreach ($bpd as $b) {
      $status = 'initial';

      if($b['status'] == -1) {
        $status = "ditolak";
      } else if($b['status'] == 1) {
        $status = "diterima";
      }

      $result = [
        'id' => $b['id'],
        'hash_id' => $b['hash_id'],
        'nomor_SPPD' => $b['nomor_SPPD'],
        'tanggal' => $b['tanggal'],
        'perincian_biaya' => $b['perincian_biaya'],
        'jumlah_biaya' => $b['jumlah_biaya'],
        'keterangan' => $b['keterangan'],
        'nama_bendaharawan' => $b['nama_bendaharawan'],
        'NIP_bendaharawan' => $b['NIP_bendaharawan'],
        'file_pengajuan' => $b['file_dokumen'],
        'nama_karyawan' => $b['nama_karyawan'],
        'status' => $status,
      ];

      array_push($results, $result);
    }

    return $results;
  }
  
  public function get_all_laporan_perjalanan_dinas_filter($filter) {
    $query = "SELECT * FROM laporan_perjalanan_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

    $lpd = $this->db->query($query)->result_array();

    $results = [];

    foreach($lpd as $l) {
      $status = "initial";
      $result = $l;

      if($l['status'] == 1) {
        $status = "diterima";
      } else if ($l['status'] == -1) {
        $status = "ditolak";
      }

      $result['status'] = $status;

      array_push($results, $result);
    }

    return $results;
  }
  
  public function get_all_surat_perintah_perjalanan_dinas_filter($filter) {
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

    return $this->db->query($query)->result_array();
  }
  
  public function get_all_surat_perintah_tugas_filter($filter) {
    $query = "SELECT * FROM surat_perintah_tugas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

    return $this->db->query($query)->result_array();
  }
}