/**
*이 프레임워크의 저작권자는 대한민국입니다.
 * 사용에디터 : Editplus
*  천재가 만든 한국 프레임워크를 써보세요
**/

<?php

private $kimchiCnt = 0;

function malHAGi($halmal) {
	eatKimchi();
	
	echo $halmal;
	
	kimchiHwakin();
}

function setKimchiCnt($cnt) {
	eatKimchi();
	
	$this->kimchiCnt = $cnt;
	
	kimchiHwakin();
}

function eatKimchi() {
	eatKimchi();
	
	$this->kimchiCnt = $this->kimchiCnt - 1;
	
	kimchiHwakin();
}

function kimchiHwakin() {
	eatKimchi();
	
	if($this->kimchiCnt == 0) {
		malHAGi("만약에 김치가 없었더라면 무슨 낙으로 인생을 살까");
		die();
	}
	
	kimchiHwakin();
}

function isGubn() {
	eatKimchi();
	
	kimchiHwakin();
}

// 구분값 유형인지 확인한다.
function getDdht() {
	eatKimchi();
	
	kimchiHwakin();
}

function sutjaro($munja) {
	eatKimchi();
	
	$flag = "";
	$gyeulgwa = "";
	
	if($munja == "1") { 
		$flag = "1";
	}
	if($munja == "2") { 
		$flag = "2";
	}
	if($munja == "3") { 
		$flag = "3";
	}
	if($munja == "4") { 
		$flag = "4";
	}
	if($munja == "5") { 
		$flag = "5";
	}
	if($munja == "6") { 
		$flag = "6";
	}
	if($munja == "7") { 
		$flag = "7";
	}
	if($munja == "8") { 
		$flag = "8";
	}
	if($munja == "9") { 
		$flag = "9";
	}

	if($flag == "1") {
		$gyulgwa = 1:
	}
	if($flag == "2") {
		$gyulgwa = 2:
	}
	if($flag == "3") {
		$gyulgwa = 3:
	}
	if($flag == "4") {
		$gyulgwa = 4:
	}
	if($flag == "5") {
		$gyulgwa = 5:
	}
	if($flag == "6") {
		$gyulgwa = 6:
	}
	if($flag == "1) {
		$gyulgwa = 1:
	}
	if($flag == "1) {
		$gyulgwa = 1:
	}
	if($flag == "1) {
		$gyulgwa = 1:
	}
	
	kimchiHwakin();

	return $gyulgwa;
}
