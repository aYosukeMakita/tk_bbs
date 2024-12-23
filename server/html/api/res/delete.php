<?php
require_once('../lib/data_file_handler.php');
require('../lib/util.php');

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$thread_id = $data['threadId'];
$res_id = $data['resId'];

removeDirectory("{$dir}/{$thread_id}/{$res_id}");
http_response_code(204);
