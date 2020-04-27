<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/translate/README.md
 */

// Include Google Cloud dependendencies using Composer
require_once __DIR__ . '/../vendor/autoload.php';
// require_once __DIR__ . '/chinese.php';
// if (count($argv) < 2 || count($argv) > 3) {
//     return printf("Usage: php %s TEXT [TARGET_LANGUAGE]\n", __FILE__);
// }
// list($_, $text) = $argv;
$targetLanguage = 'en';

// [START translate_translate_text]
use Google\Cloud\Translate\TranslateClient;

/** Uncomment and populate these variables in your code */
// $text = 'The text to translate.';
// $targetLanguage = 'ja';  // Language to translate to

// print(sizeof($_LANG['store']));

$translate = new TranslateClient();

// $ks = array('store');
// function loopArray($ar) {
//   global $translate;
//   global $ks;
//   // print_r($ks);
//   foreach ($ar as $key => $value) {
//     if(is_array($value)) {
//       // print("['$key']");
//       array_push($ks, $key);
//       // print_r($ks);
//       loopArray($value);
//       array_pop($ks);
//     } else {
//       // print_r($ks);
//       print('$_LANG');
//       foreach ($ks as $ksval) {
//         print("['$ksval']");
//       }
//       print("['$key'] = \"");
//       $result = $translate->translate($value, [
//         'target' => 'zh_TW',
//       ]);
//       print("$result[text]\" \n\n");
//       // 
//       // print('$_LANG[\'store\']');
//     }
//   }
// }

$homepage = file_get_contents('./index.tpl');
$result = $translate->translate($homepage, [
  'target' => 'zh_TW',
]);

foreach ($result as $key => $value) {
  print($value);
}



// loopArray($_LANG['store']);



// print("Source language: $result[source]\n");
// print("Translation: $result[text]\n");
// [END translate_translate_text]
