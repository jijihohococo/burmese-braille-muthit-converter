<?php

require_once  __DIR__.'/../src/BurmeseBrailleMuthit.php';

use JiJiHoHoCoCo\BurmeseBrailleMuthitConverter\BurmeseBrailleMuthit;

const SUCCESS_MESSAGE="Testing Burmese Braille Muthit Converter with syllable breaks is passed.\n";
const NORMAL_SUCCESS_MESSAGE="Testing Burmese Braille Muthit Converter without syllable breaks is passed.\n";

if(BurmeseBrailleMuthit::convertBurmeseToBraille('ပွင့် ဖူး ကြ ချိန် အ မှန် ၊ ဝ ဿန္တ လေ ချို ဖျန်း ။')=="⠏⠜⠌⠄⠂ ⠘⠥⠆ ⠅⠢ ⠨⠔⠊⠝⠄ ⠣ ⠍⠭⠝⠄ ⠒ ⠺ ⠰⠹⠝⠤⠞ ⠱⠇⠨⠔⠊⠑ ⠘⠔⠝⠄⠆ ⠲"){
	echo SUCCESS_MESSAGE;
}

if(BurmeseBrailleMuthit::convertBurmeseToBraille('၁၉၂၀ ပြည့် ကျောင်း သား သ ပိတ် ကြီး တွင် ဦး ဖိုး ကျား သည် ထင် ရှား သော ခေါင်း ‌ဆောင် တစ် ဦး ဖြစ် သည် ။')=="⠼⠁⠊⠃⠚ ⠏⠢⠷⠄⠂ ⠱⠅⠔⠁⠌⠄⠆ ⠹⠁⠆ ⠹ ⠏⠊⠞⠄ ⠅⠢⠪⠆ ⠞⠜⠌⠄ ⠰⠑⠪⠆ ⠘⠊⠑⠆ ⠅⠔⠁⠆ ⠹⠷⠄ ⠚⠌⠄ ⠗⠭⠁⠆ ⠱⠹⠁ ⠱⠨⠰⠁⠌⠄⠆  ⠱⠖⠁⠌⠄ ⠞⠎⠄ ⠰⠑⠪⠆ ⠘⠢⠎⠄ ⠹⠷⠄ ⠲"){
	echo SUCCESS_MESSAGE;
}

if(BurmeseBrailleMuthit::convertBurmeseToBraille("အမြွှာ")=="⠣⠍⠢⠜⠭⠁"){
	echo NORMAL_SUCCESS_MESSAGE;
}

if(BurmeseBrailleMuthit::convertBurmeseToBraille("ကြွေ")=="⠱⠅⠢⠜"){
	echo NORMAL_SUCCESS_MESSAGE;
}

if(BurmeseBrailleMuthit::convertBurmeseToBraille("ရွှေမြန်မာများရွှေ့ပြောင်းကြခြင်း")=="⠱⠗⠜⠭⠍⠢⠝⠄⠍⠁⠍⠔⠁⠆⠱⠗⠜⠭⠂⠱⠏⠢⠁⠌⠄⠆⠅⠢⠨⠢⠌⠄⠆"){
	echo NORMAL_SUCCESS_MESSAGE;
}
