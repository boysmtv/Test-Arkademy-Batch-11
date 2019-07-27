<?php 
	$namaa 			= "Dedy Wijaya";
	$age			= 21;
	$address 		= "Jl. Jagawana Gg. H. Beta No. 86 Ds. Sukatani Kab. Bekasi";
	$hobbies[]		= array("Makan","Renang","Gym");
	$is_married 	= 0;
	$list_school[] 	= array("Universitas Singaperbangsa Karawang","2015","2019","Teknik Informatika");
	$skil[] 		= "Java Android Studio";
	$skil[] 		= "Office";
	$skil[] 		= "Corel Draw";
	$skil[] 		= "Administrasi Jaringan";
	$interest_in_coding 	 = 1;

	if ($is_married == 0){
		$is_married = false;
	}else{
		$is_married = true;
	}

	if ($interest_in_coding == 0){
		$interest_in_coding = false;
	}else{
		$interest_in_coding = true;
	}

	class skills{
		var $skil;
		public function tampungskil($temp4){
			return $this->skil=$temp4;
		}
		public function cetakskil(){
			echo $this->skil;
		}
	}

	class univ{
		var $univ;
		public function tampunglist_school($temp2){
			return $this->list_school=$temp2;
		}
		public function cetaklist_school(){
			echo $this->list_school;
		}
	}

	class biodata{
		var $nama;
		var $address;
		var $list_school;
		var $is_married;
		var $interest_in_coding;
		var $skil;
		var $hobbies;

		public function tampung($temp){
			return $this->nama=$temp;
		}

		public function tampungaddress($temp1){
			return $this->address=$temp1;
		}

		public function tampungis_married($temp3){
			return $this->is_married=$temp3;
		}

		public function tampung_interest($temp4){
			return $this->interest_in_coding=$temp4;
		}
		
		public function tampunghobbies($temp5){
			return $this->hobbies=$temp5;
		}

		public function cetaknama(){
			echo $this->nama;
		}

		public function cetakaddress(){
			echo $this->address;
		}

		public function cetakis_married(){
			echo $this->is_married;
		}

		public function cetakinterest_in_coding(){
			echo $this->interest_in_coding;
		}

		public function cetakhobbies(){
			echo $this->hobbies;
		}
	}

	$namaku = new biodata();
	$bid 	= new skills();
	$uni 	= new univ();

	$data = array(
			'nama' => $namaku -> tampung($namaa),
			'address' => $namaku -> tampungaddress($address),
			'hobbies' => $namaku -> tampunghobbies($hobbies),
			'is_married' => $namaku -> tampungis_married($is_married),
			'interest_in_coding' => $namaku -> tampung_interest($interest_in_coding),
			'list_school' => $uni -> tampunglist_school($list_school),
			'skil' => $bid -> tampungskil($skil)
	);
	$json_data = json_encode($data);
	echo $json_data;
?>

