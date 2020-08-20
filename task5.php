<?php
//次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
// 文字列から HTML および PHP タグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push
//array_pushとは、配列の最後に1つ以上の要素を追加したい時に使用する関数
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//array_merge
//ひとつまたは複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//time, mktime
//現在の Unix タイムスタンプを返す
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

//date
//ローカルの日付/時刻を書式化する
echo date('l \t\h\e jS');