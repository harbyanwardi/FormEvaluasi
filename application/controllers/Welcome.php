<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
         $this->load->helper('form','url');
		 $this->load->model('M_eval');

	}

	public function index()
	{
		$data = array();
		$data_insert = array(
							'pil_training' => $this->pil_training(),
							'v_user' => $this->v_user()
			);
		$this->load->view('form_awal',$data_insert);
	}
	
	public function insert()
	{
		
		$nama_user = $_POST['nama_user'];
		$judul_materi = $_POST['judul_materi'];
		$bahasa = $_POST['bahasa'];
	if($bahasa=='indonesia'){
			$tanya_i = $this->tanya_instruktur_ind();
			$tanya_i2 = $this->tanya_instruktur2_ind();
			$tanya_i3 = $this->tanya_instruktur3_ind();
			$tanya_i4 = $this->tanya_instruktur4_ind();
			$tanya_i5 = $this->tanya_instruktur5_ind();
			$tanya_i6 = $this->tanya_instruktur6_ind();
			$tanya_i7 = $this->tanya_instruktur7_ind();
			$tanya_i8 = $this->tanya_instruktur8_ind();
			$tanya_i9 = $this->tanya_instruktur9_ind();
			
			$tanya_t = $this->tanya_training_ind();
			$intro = $this->intro_ind();
		}
		else{
			$tanya_i = $this->tanya_instruktur();
			$tanya_i2 = $this->tanya_instruktur2();
			$tanya_i3 = $this->tanya_instruktur3();
			$tanya_i4 = $this->tanya_instruktur4();
			$tanya_i5 = $this->tanya_instruktur5();
			$tanya_i6 = $this->tanya_instruktur6();
			$tanya_i7 = $this->tanya_instruktur7();
			$tanya_i8 = $this->tanya_instruktur8();
			$tanya_i9 = $this->tanya_instruktur9();
			$tanya_t = $this->tanya_training();
			$intro = $this->intro_eng();
		}

		$cek_instrukturjumlah = $this->M_eval->GetData("tr_materi ","where judul_materi = '$judul_materi'");
		$id_materi = $cek_instrukturjumlah[0]['id_materi'];
		$jum_instruk = $cek_instrukturjumlah[0]['jum_instruktur'];
			$data_insert = array(
				'nama_user' => $nama_user,	
				'bahasa' => $bahasa,
				'instruktur'=> $this->instruktur($id_materi),
				'instruktur2'=> $this->instruktur2($id_materi),
				'instruktur3'=> $this->instruktur3($id_materi),
				'instruktur4'=> $this->instruktur4($id_materi),
				'instruktur5'=> $this->instruktur5($id_materi),
				'instruktur6'=> $this->instruktur6($id_materi),
				'instruktur7'=> $this->instruktur7($id_materi),
				'instruktur8'=> $this->instruktur8($id_materi),
				'instruktur9'=> $this->instruktur9($id_materi),
				'jum_instruk' => $jum_instruk,			
				'tanya_i' => $tanya_i,
				'tanya_i2' => $tanya_i2,
				'tanya_i3' => $tanya_i3,
				'tanya_i4' => $tanya_i4,
				'tanya_i5' => $tanya_i5,
				'tanya_i6' => $tanya_i6,
				'tanya_i7' => $tanya_i7,
				'tanya_i8' => $tanya_i8,
				'tanya_i9' => $tanya_i9,
				'tanya_t' => $tanya_t,
				'intro' => $intro,
				'judul_materi' => $judul_materi
				);

			$data = array(
						'nama_user' => $nama_user,
				);
			$res = $this->M_eval->InsertData('tr_user',$data);
			$this->load->view('form_edit',$data_insert);
		

	}
	
	public function input_form()
	{

		$nama_user = $_POST['nama_user'];
		$bahasa = $_POST['bahasa'];		
		$cek_user = $this->M_eval->GetData("tr_user ","where nama_user = '$nama_user'");
		$id_user = $cek_user[0]['id_user'];
		$judul_materi = $_POST['judul_materi'];
		$cek_instrukturjumlah = $this->M_eval->GetData("tr_materi ","where judul_materi = '$judul_materi'");		
		$jum_instruk = $cek_instrukturjumlah[0]['jum_instruktur'];
		$cek_materi = $this->M_eval->GetData("tr_materi ","where judul_materi = '$judul_materi'");
		$id_materi = $cek_materi[0]['id_materi'];
		if($bahasa=='inggris'){
			$cekdata = $this->M_eval->Hitung("mst_pertanyaan_eng");
			$cekdata_i = $this->M_eval->Hitung("mst_pertanyaan_instruktur_eng");
		}
		else{
			$cekdata = $this->M_eval->Hitung("mst_pertanyaan_indo");
			$cekdata_i = $this->M_eval->Hitung("mst_pertanyaan_instruktur_indo");
		}
		$isi_saran = $_POST['isi_saran'];
		if($jum_instruk==9){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$id_instruktur4 = $_POST['id_instruktur4'];
			$id_instruktur5 = $_POST['id_instruktur5'];
			$id_instruktur6 = $_POST['id_instruktur6'];
			$id_instruktur7 = $_POST['id_instruktur7'];
			$id_instruktur8 = $_POST['id_instruktur8'];
			$id_instruktur9 = $_POST['id_instruktur9'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			$isi_saran_ins_4 = $_POST['isi_saran_ins_4'];
			$isi_saran_ins_5 = $_POST['isi_saran_ins_5'];
			$isi_saran_ins_6 = $_POST['isi_saran_ins_6'];
			$isi_saran_ins_7 = $_POST['isi_saran_ins_7'];
			$isi_saran_ins_8 = $_POST['isi_saran_ins_8'];
			$isi_saran_ins_9 = $_POST['isi_saran_ins_9'];
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3 || $id_instruktur==$id_instruktur4 || $id_instruktur2==$id_instruktur4 || $id_instruktur3==$id_instruktur4 || $id_instruktur==$id_instruktur5 || $id_instruktur2==$id_instruktur5 || $id_instruktur3==$id_instruktur5 || $id_instruktur4==$id_instruktur5 || $id_instruktur==$id_instruktur6 || $id_instruktur2==$id_instruktur6 || $id_instruktur3==$id_instruktur6 || $id_instruktur4==$id_instruktur6 || $id_instruktur5==$id_instruktur6 || $id_instruktur==$id_instruktur7 || $id_instruktur2==$id_instruktur7 || $id_instruktur3==$id_instruktur7 || $id_instruktur4==$id_instruktur7 || $id_instruktur5==$id_instruktur7 || $id_instruktur6==$id_instruktur7 || $id_instruktur==$id_instruktur8 || $id_instruktur2==$id_instruktur8 || $id_instruktur3==$id_instruktur8 || $id_instruktur4==$id_instruktur8 || $id_instruktur5==$id_instruktur8 || $id_instruktur6==$id_instruktur8 || $id_instruktur7==$id_instruktur8 || $id_instruktur==$id_instruktur9 || $id_instruktur2==$id_instruktur9 || $id_instruktur3==$id_instruktur9 || $id_instruktur4==$id_instruktur9 || $id_instruktur5==$id_instruktur9 || $id_instruktur6==$id_instruktur9 || $id_instruktur7==$id_instruktur9 || $id_instruktur8==$id_instruktur9){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);

				$data_saran_ins4 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur4,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_4		
					);
				$res_saran_ins4 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins4);

				$data_saran_ins5 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur5,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_5		
					);
				$res_saran_ins5 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins5);

				$data_saran_ins6 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur6,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_6		
					);
				$res_saran_ins6 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins6);

				$data_saran_ins7 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur7,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_7		
					);
				$res_saran_ins7 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins7);

				$data_saran_ins8 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur8,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_8		
					);
				$res_saran_ins8 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins8);

				$data_saran_ins9 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur9,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_9		
					);
				$res_saran_ins9 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins9);

				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i4 = $_POST['nilai_i4'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i4);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur4,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i5 = $_POST['nilai_i5'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i5);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur5,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i6 = $_POST['nilai_i6'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i6);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur6,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i7 = $_POST['nilai_i7'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i7);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur7,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i8 = $_POST['nilai_i8'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i8);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur8,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i9 = $_POST['nilai_i9'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i9);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur9,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==8){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$id_instruktur4 = $_POST['id_instruktur4'];
			$id_instruktur5 = $_POST['id_instruktur5'];
			$id_instruktur6 = $_POST['id_instruktur6'];
			$id_instruktur7 = $_POST['id_instruktur7'];
			$id_instruktur8 = $_POST['id_instruktur8'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			$isi_saran_ins_4 = $_POST['isi_saran_ins_4'];
			$isi_saran_ins_5 = $_POST['isi_saran_ins_5'];
			$isi_saran_ins_6 = $_POST['isi_saran_ins_6'];
			$isi_saran_ins_7 = $_POST['isi_saran_ins_7'];
			$isi_saran_ins_8 = $_POST['isi_saran_ins_8'];
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3 || $id_instruktur==$id_instruktur4 || $id_instruktur2==$id_instruktur4 || $id_instruktur3==$id_instruktur4 || $id_instruktur==$id_instruktur5 || $id_instruktur2==$id_instruktur5 || $id_instruktur3==$id_instruktur5 || $id_instruktur4==$id_instruktur5 || $id_instruktur==$id_instruktur6 || $id_instruktur2==$id_instruktur6 || $id_instruktur3==$id_instruktur6 || $id_instruktur4==$id_instruktur6 || $id_instruktur5==$id_instruktur6 || $id_instruktur==$id_instruktur7 || $id_instruktur2==$id_instruktur7 || $id_instruktur3==$id_instruktur7 || $id_instruktur4==$id_instruktur7 || $id_instruktur5==$id_instruktur7 || $id_instruktur6==$id_instruktur7 || $id_instruktur==$id_instruktur8 || $id_instruktur2==$id_instruktur8 || $id_instruktur3==$id_instruktur8 || $id_instruktur4==$id_instruktur8 || $id_instruktur5==$id_instruktur8 || $id_instruktur6==$id_instruktur8 || $id_instruktur7==$id_instruktur8){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);

				$data_saran_ins4 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur4,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_4		
					);
				$res_saran_ins4 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins4);

				$data_saran_ins5 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur5,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_5		
					);
				$res_saran_ins5 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins5);

				$data_saran_ins6 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur6,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_6		
					);
				$res_saran_ins6 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins6);

				$data_saran_ins7 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur7,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_7		
					);
				$res_saran_ins7 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins7);

				$data_saran_ins8 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur8,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_8		
					);
				$res_saran_ins8 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins8);

				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i4 = $_POST['nilai_i4'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i4);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur4,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i5 = $_POST['nilai_i5'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i5);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur5,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i6 = $_POST['nilai_i6'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i6);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur6,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i7 = $_POST['nilai_i7'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i7);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur7,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i8 = $_POST['nilai_i8'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i8);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur8,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==7){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$id_instruktur4 = $_POST['id_instruktur4'];
			$id_instruktur5 = $_POST['id_instruktur5'];
			$id_instruktur6 = $_POST['id_instruktur6'];
			$id_instruktur7 = $_POST['id_instruktur7'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			$isi_saran_ins_4 = $_POST['isi_saran_ins_4'];
			$isi_saran_ins_5 = $_POST['isi_saran_ins_5'];
			$isi_saran_ins_6 = $_POST['isi_saran_ins_6'];
			$isi_saran_ins_7 = $_POST['isi_saran_ins_7'];
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3 || $id_instruktur==$id_instruktur4 || $id_instruktur2==$id_instruktur4 || $id_instruktur3==$id_instruktur4 || $id_instruktur==$id_instruktur5 || $id_instruktur2==$id_instruktur5 || $id_instruktur3==$id_instruktur5 || $id_instruktur4==$id_instruktur5 || $id_instruktur==$id_instruktur6 || $id_instruktur2==$id_instruktur6 || $id_instruktur3==$id_instruktur6 || $id_instruktur4==$id_instruktur6 || $id_instruktur5==$id_instruktur6 || $id_instruktur==$id_instruktur7 || $id_instruktur2==$id_instruktur7 || $id_instruktur3==$id_instruktur7 || $id_instruktur4==$id_instruktur7 || $id_instruktur5==$id_instruktur7 || $id_instruktur6==$id_instruktur7){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);

				$data_saran_ins4 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur4,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_4		
					);
				$res_saran_ins4 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins4);

				$data_saran_ins5 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur5,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_5		
					);
				$res_saran_ins5 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins5);

				$data_saran_ins6 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur6,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_6		
					);
				$res_saran_ins6 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins6);

				$data_saran_ins7 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur7,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_7		
					);
				$res_saran_ins7 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins7);

				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i4 = $_POST['nilai_i4'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i4);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur4,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i5 = $_POST['nilai_i5'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i5);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur5,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i6 = $_POST['nilai_i6'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i6);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur6,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i7 = $_POST['nilai_i7'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i7);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur7,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==6){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$id_instruktur4 = $_POST['id_instruktur4'];
			$id_instruktur5 = $_POST['id_instruktur5'];
			$id_instruktur6 = $_POST['id_instruktur6'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			$isi_saran_ins_4 = $_POST['isi_saran_ins_4'];
			$isi_saran_ins_5 = $_POST['isi_saran_ins_5'];
			$isi_saran_ins_6 = $_POST['isi_saran_ins_6'];
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3 || $id_instruktur==$id_instruktur4 || $id_instruktur2==$id_instruktur4 || $id_instruktur3==$id_instruktur4 || $id_instruktur==$id_instruktur5 || $id_instruktur2==$id_instruktur5 || $id_instruktur3==$id_instruktur5 || $id_instruktur4==$id_instruktur5 || $id_instruktur==$id_instruktur6 || $id_instruktur2==$id_instruktur6 || $id_instruktur3==$id_instruktur6 || $id_instruktur4==$id_instruktur6 || $id_instruktur5==$id_instruktur6){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);

				$data_saran_ins4 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur4,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_4		
					);
				$res_saran_ins4 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins4);

				$data_saran_ins5 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur5,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_5		
					);
				$res_saran_ins5 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins5);

				$data_saran_ins6 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur6,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_6		
					);
				$res_saran_ins6 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins6);

				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i4 = $_POST['nilai_i4'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i4);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur4,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i5 = $_POST['nilai_i5'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i5);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur5,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i6 = $_POST['nilai_i6'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i6);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur6,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==5){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$id_instruktur4 = $_POST['id_instruktur4'];
			$id_instruktur5 = $_POST['id_instruktur5'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			$isi_saran_ins_4 = $_POST['isi_saran_ins_4'];
			$isi_saran_ins_5 = $_POST['isi_saran_ins_5'];
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3 || $id_instruktur==$id_instruktur4 || $id_instruktur2==$id_instruktur4 || $id_instruktur3==$id_instruktur4 || $id_instruktur==$id_instruktur5 || $id_instruktur2==$id_instruktur5 || $id_instruktur3==$id_instruktur5 || $id_instruktur4==$id_instruktur5){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);

				$data_saran_ins4 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur4,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_4		
					);
				$res_saran_ins4 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins4);

				$data_saran_ins5 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur5,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_5		
					);
				$res_saran_ins5 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins5);

				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i4 = $_POST['nilai_i4'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i4);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur4,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i5 = $_POST['nilai_i5'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i5);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur5,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==4){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$id_instruktur4 = $_POST['id_instruktur4'];
			
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			$isi_saran_ins_4 = $_POST['isi_saran_ins_4'];
			
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3 || $id_instruktur==$id_instruktur4 || $id_instruktur2==$id_instruktur4 || $id_instruktur3==$id_instruktur4){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);

				$data_saran_ins4 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur4,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_4		
					);
				$res_saran_ins4 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins4);
				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i4 = $_POST['nilai_i4'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i4);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur4,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==3){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$id_instruktur3 = $_POST['id_instruktur3'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			$isi_saran_ins_3 = $_POST['isi_saran_ins_3'];
			if($id_instruktur==$id_instruktur2 || $id_instruktur2==$id_instruktur3 || $id_instruktur==$id_instruktur3){
				$this->flashdata_failed();
			}
			else{
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				$data_saran_ins3 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur3,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_3		
					);
				$res_saran_ins3 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins3);
				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);


				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i3 = $_POST['nilai_i3'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i3);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,	
						'id_instruktur'=> $id_instruktur3,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii,
						'id_materi'=> $id_materi
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				

				$this->flashdata_succeed();

			}
		}
		else if($jum_instruk==2){
			$id_instruktur = $_POST['id_instruktur'];
			$id_instruktur2 = $_POST['id_instruktur2'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			$isi_saran_ins_2 = $_POST['isi_saran_ins_2'];
			if($id_instruktur==$id_instruktur2){
				$this->flashdata_failed();
			}
			else{
			    $data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);

				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);

				$data_saran_ins2 = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur2,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins_2		
					);
				$res_saran_ins2 = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins2);
				
				for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);
				}
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,
						'id_materi'=> $id_materi,
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii
						
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			
				for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i2 = $_POST['nilai_i2'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i2);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,
						'id_materi'=> $id_materi,
						'id_instruktur'=> $id_instruktur2,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii
					
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);	
				}
				
				$this->flashdata_succeed();

			}
		}
		else{
			$id_instruktur = $_POST['id_instruktur'];
			$isi_saran_ins = $_POST['isi_saran_ins'];
			for($d=0;$d<$cekdata_i;$d++){
					$id_pertanyaan_i = $_POST['id_pertanyaan_i'][$d];
					$nilai_i = $_POST['nilai_i'.$id_pertanyaan_i];
					$nilai_ii = implode(" ",$nilai_i);
					
					
					$data_instruktur = array(
						'id_user' => $id_user,
						'id_materi'=> $id_materi,
						'id_instruktur'=> $id_instruktur,
						'id_pertanyaan_i' => $id_pertanyaan_i,
						'nilai_i' => $nilai_ii
					
						);
					$res_i = $this->M_eval->InsertData('nilai_instruktur',$data_instruktur);
				}
			for($i=0;$i<$cekdata;$i++){
					$id_pertanyaan = $_POST['id_pertanyaan'][$i];
					$nilai_t = $_POST['nilai_t'.$id_pertanyaan];
					
						$nilai_tt = implode(" ",$nilai_t);
					
					
					$data_training = array(
						'id_user' => $id_user,	
						'id_materi'=> $id_materi,
						'id_pertanyaan' => $id_pertanyaan,
						'nilai_t' => $nilai_tt
						);
					
					$res_t = $this->M_eval->InsertData('nilai_training',$data_training);
				}
				$data_saran = array(
				'id_user' => $id_user,
				'id_materi' => $id_materi,
				'isi_saran' => $isi_saran		
					);
				$res_saran = $this->M_eval->InsertData('tr_saran',$data_saran);
				
				$data_saran_ins = array(
				'id_user' => $id_user,
				'id_instruktur' => $id_instruktur,
				'id_materi' => $id_materi,
				'isi_saran_ins' => $isi_saran_ins		
					);
				$res_saran_ins = $this->M_eval->InsertData('tr_saran_instruktur',$data_saran_ins);
				$this->flashdata_succeed();	
		}		
		
	}
	
	public function intro_ind(){
	    $kalimat = "Form ini bertujuan untuk memberikan evaluasi terhadap topik pelatihan yang telah dilakukan, dimana kami dapat meningkatkan program pelatihan ini di waktu yang akan datang. Silahkan pilih nilai yang terdapat dalam form sesuai dengan pilihan/penilaian anda";
	    $show = $this->load->view('component/intro',$kalimat,TRUE);
		return $show;
	}
	public function intro_eng(){
	    $kalimat = "This form is aimed to give evaluation on the program that has been conducted, base on which we can improve the program in the future. Please choose the score in the provided form that is appropriately matched to your selection";
	    $show = $this->load->view('component/intro_eng',$kalimat,TRUE);
		return $show;
	}
	
	public function instruktur($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur',$data_insert,TRUE);
		return $show;
	}
	public function instruktur2($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur2',$data_insert,TRUE);
		return $show;
	}
	public function instruktur3($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur3',$data_insert,TRUE);
		return $show;
	}
	public function instruktur4($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur4',$data_insert,TRUE);
		return $show;
	}
	public function instruktur5($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur5',$data_insert,TRUE);
		return $show;
	}
	public function instruktur6($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur6',$data_insert,TRUE);
		return $show;
	}
	public function instruktur7($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur7',$data_insert,TRUE);
		return $show;
	}
	public function instruktur8($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur8',$data_insert,TRUE);
		return $show;
	}
	public function instruktur9($id_materi){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("tr_instruktur ","where id_materi = '$id_materi'"));
		$show = $this->load->view('component/instruktur9',$data_insert,TRUE);
		return $show;
	}
	public function pil_training(){
		$data_insert = array('data_insert'=> $this->M_eval->GetData('tr_materi'));
		$show = $this->load->view('component/pil_training',$data_insert,TRUE);
		return $show;
	}
	public function v_user(){
		$data_insert = array('data_insert'=> $this->M_eval->GetData('tr_user'));
		$show = $this->load->view('component/v_user',$data_insert,TRUE);
		return $show;
	}

	public function tanya_instruktur(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));
		$show = $this->load->view('component/tanya_instruktur',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));
		$show = $this->load->view('component/tanya_instruktur',$data_insert,TRUE);
		return $show;
	}

	public function tanya_instruktur2(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur2',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur2_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur2',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur3(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur3',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur4(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur4',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur5(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur5',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur6(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur6',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur7(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur7',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur8(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur8',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur9(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_eng"));

		$show = $this->load->view('component/tanya_instruktur9',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur3_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur3',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur4_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur4',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur5_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur5',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur6_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur6',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur7_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur7',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur8_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur8',$data_insert,TRUE);
		return $show;
	}
	public function tanya_instruktur9_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_instruktur_indo"));

		$show = $this->load->view('component/tanya_instruktur9',$data_insert,TRUE);
		return $show;
	}
	public function tanya_training(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_eng"));
		$show = $this->load->view('component/tanya_training',$data_insert,TRUE);
		return $show;
	}
	public function tanya_training_ind(){
		
		$data_insert = array('data_insert'=> $this->M_eval->GetData("mst_pertanyaan_indo"));
		$show = $this->load->view('component/tanya_training',$data_insert,TRUE);
		return $show;
	}

public function flashdata_failed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Pilih Satu Instruktur untuk satu form  </div></div>");
                redirect('Welcome/index');
    }
    
    public function flashdata_succeed(){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Input Form Kuesioner Berhasil !</div></div>");
        	redirect('Welcome/index');
                
    }

	
}
