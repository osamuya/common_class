<?php


class checkdegit {
	/*
	* Check Digit JANコード
	* url: http://www.dsri.jp/jan/check_digit.html
	*
	* 1. JANコード（短縮タイプ8桁）
	*/
	function janCode_8degits($para) {
		/*
		* Check Digit JANコード（短縮タイプ8桁）:
		* JAN code (short type 8 digits)
		* http://www.dsri.jp/jan/check_digit.html
		*
		* 1430001 =
		*	491 3桁乱数
		*	0001 シリアル（0001 - 1860)
		*   1 チェックデジット
		*/

		$split_number = array();
		$split_number = preg_split("//u", $para, -1, PREG_SPLIT_NO_EMPTY);

		$sum1 = ($split_number[0]+$split_number[2]+$split_number[4]+$split_number[6])*3;
		$sum2 = $split_number[1]+$split_number[3]+$split_number[5];
		$sum3 = $sum1 + $sum2;
		$sum4 = array();
		$sum4 = preg_split("//u", $sum3, -1, PREG_SPLIT_NO_EMPTY);
		$sum5 = array();
		$sum5 = array_reverse($sum4);
		$sum6 = 10 - $sum5[0];
		if ($sum6 == 10) {
			$checkdegit = 0;
		} else if ($sum6 > 0) {
			$checkdegit = $sum6;
		}
		return $checkdegit;
	}
}


// シリアル
$number = array(
1=> array ('522', '9999', '00'),
2=> array ('862', '9999', '00'),
);