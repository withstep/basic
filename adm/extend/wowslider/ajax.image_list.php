<?php
$sub_menu = '700400';
include_once('./_common.php');

$rows = array();

if ( !isset($ws_id) )
{
	$error = array('error' => urlencode('슬라이더 아이디가 존재하지 않습니다.'));
	die( urldecode( json_encode( $error ) ) );
}

$sql = "select * from {$g5['ws_images_table']} where ws_id = '{$ws_id}' order by wsi_id asc";
$result = sql_query( $sql );
while ( $row = mysql_fetch_assoc($result) )
{
// 	$row['wsi_title'] = urlencode( $row['wsi_title'] );
	$rows[] = $row;
}

die( json_encode( $rows ) );
?>