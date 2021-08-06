<?php


$file = new SplFileObject('resources/lang/lang.csv', 'a');
$file->fputcsv(array('explore-more-descr','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','إنها حقيقة راسخة منذ فترة طويلة أن القارئ سيتشتت انتباهه بسبب المحتوى القابل للقراءة للصفحة عند النظر إلى تخطيطها.
'));
$file = null;
//fclose($file);

?>