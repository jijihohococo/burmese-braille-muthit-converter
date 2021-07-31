<?php

require_once  __DIR__.'/../src/BurmeseBrailleMuthit.php';

use JiJiHoHoCoCo\BurmeseBrailleMuthitConverter\BurmeseBrailleMuthit;

print_r(BurmeseBrailleMuthit::convertBurmeseToBraille('ပွင့်ဖူးကြချိန်အမှန်၊ ဝ ဿန္တလေချိုဖျန်း။'));
// echo '<br>';
// print_r(BurmeseBrailleMuthit::convertBurmeseToBraille('ပွင့် ဖူး ကြ ချိန် အ မှန် ၊'));
