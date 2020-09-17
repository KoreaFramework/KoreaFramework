<?php

private $kimchiCnt = 0;

function setKimchiCnt($cnt) {
	$this->kimchiCnt = $cnt;
}

function eatKimchi() {
	$this->kimchiCnt = $this->kimchiCnt - 1;
}

function kimchiHwakin() {
	if($this->kimchiCnt == 0) die();
}

function isGubn() {
}

// 구분값 유형인지 확인한다.
function getDdht() {
}

function sutjaro($munja) {
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

	return $gyulgwa;
}
