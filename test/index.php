<?php

require_once  __DIR__.'/../src/BurmeseBrailleMuthit.php';

use JiJiHoHoCoCo\BurmeseBrailleMuthitConverter\BurmeseBrailleMuthit;

if(BurmeseBrailleMuthit::convertBurmeseToBraille('ပွင့် ဖူး ကြ ချိန် အ မှန် ၊ ဝ ဿန္တ လေ ချို ဖျန်း ။')=="⠏⠜⠌⠄⠂ ⠘⠥⠆ ⠅⠢ ⠨⠔⠊⠝⠄ ⠣ ⠍⠭⠝⠄ ⠒ ⠺ ⠰⠹⠝⠤⠞ ⠱⠇⠨⠔⠊⠑ ⠘⠔⠝⠄⠆ ⠲"){
	echo "Testing Burmese Braille Muthit Converter with syllable breaks are passed.\n";
}

print_r(BurmeseBrailleMuthit::convertBurmeseToBraille('၁၉၂၀ပြည့်ကျောင်းသားသပိတ်ကြီးတွင်ဦးဖိုးကျားသည်ထင်ရှားသောခေါင်း‌ဆောင်တစ်ဦးဖြစ်သည်။'));


//echo BurmeseBrailleMuthit::convertBurmeseToBraille('သင်္ကြန်');
// echo '<br>';
// echo BurmeseBrailleMuthit::convertBurmeseToBraille('ကွေး');
