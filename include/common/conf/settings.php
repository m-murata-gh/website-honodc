<?php

/**
 * 環境設定
 */
// dev= 0, prod = 1
const ENV = 0;

/**
 * timezone
 */
date_default_timezone_set('Asia/Tokyo');

/**
 * url変数
 */
 if (ENV) {
   // prod
   $root = 'https://honodc/';
 } else {
   // dev
   $root = 'http://localhost/honodc/public/';
 }

// URL設定(各ページのリンク用)
// トップページ
$GLOBALS['urlIndex'] = $root;
// お知らせ
$GLOBALS['urlNews'] = $root . 'news/';
  // #article1
  $GLOBALS['urlNewsArticle1'] = $root . 'news/#article1';
  // #article2
  $GLOBALS['urlNewsArticle2'] = $root . 'news/#article2';
  // #article3
  $GLOBALS['urlNewsArticle3'] = $root . 'news/#article3';
// ご挨拶
$GLOBALS['urlGreeting'] = $root . '#greeting';
// 診療科目
$GLOBALS['urlMedical'] = $root . 'medical/';
  // #article1
  $GLOBALS['urlMedicalArticle1'] = $root . 'medical/#article1';
  // #article2
  $GLOBALS['urlMedicalArticle2'] = $root . 'medical/#article2';
  // #article3
  $GLOBALS['urlMedicalArticle3'] = $root . 'medical/#article3';
  // #article4
  $GLOBALS['urlMedicalArticle4'] = $root . 'medical/#article4';
  // #article5
  $GLOBALS['urlMedicalArticle5'] = $root . 'medical/#article5';
// 医院紹介
$GLOBALS['urlClinic'] = $root . 'clinic/';
  // #article1
  $GLOBALS['urlClinicArticle1'] = $root . 'clinic/#article1';
  // #article2
  $GLOBALS['urlClinicArticle2'] = $root . 'clinic/#article2';
  // #article3
  $GLOBALS['urlClinicArticle3'] = $root . 'clinic/#article3';
// アクセス
$GLOBALS['urlAccess'] = $root . '#access';
// Web予約
$GLOBALS['urlReserve'] = $root . 'reserve/';

// 関数呼び出し
// ヘッダー
require_once __DIR__ . '/../../../include/common/view/show-header.php';
// フッター
require_once __DIR__ . '/../../../include/common/view/show-footer.php';
