<?php

// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り
// スーパーグローバル変数
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");

// DBへのデータ保存
// オブジェクト指向４つの要素
// クラス　設計書
// インスタンス　クラスの外　実体
// メソッド（関数）　クラスの外　技
// プロパティ　クラスの中　値


$task = new Task();
$task->create([$title, $contents, $currentTime]);

// リダイレクト
header('location:index.php');
exit;

