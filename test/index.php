<?php

require_once  __DIR__.'/../src/BurmeseBrailleMuthit.php';

use JiJiHoHoCoCo\BurmeseBrailleMuthitConverter\BurmeseBrailleMuthit;

//print_r(BurmeseBrailleMuthit::convertBurmeseToBraille('ကျေ'));

if(BurmeseBrailleMuthit::convertBurmeseToBraille('ပွင့် ဖူး ကြ ချိန် အ မှန် ၊ ဝ ဿန္တ လေ ချို ဖျန်း ။')=="⠏⠜⠌⠄⠂ ⠘⠥⠆ ⠅⠢ ⠨⠔⠊⠝⠄ ⠣ ⠍⠭⠝⠄ ⠒ ⠺ ⠰⠹⠝⠤⠞ ⠱⠇⠨⠔⠊⠑ ⠘⠔⠝⠄⠆ ⠲"){
	echo "Testing Burmese Braille Muthit Converter with syllable breaks are passed.\n";
}
