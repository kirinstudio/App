<?php 

$url ="https://api.hakuna.live/v1/live-room/list/search/region?cursor\u003d\u0026size\u003d20";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host:api.hakuna.live',
        'authorization:Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6IlZTVFI4MTM4NyIsInN1YiI6InZpc2l0b3ItODEzODciLCJjb3VudHJ5IjoiVk4iLCJleHBpcmVkIjoxNjIwOTE0MTM0MzQ0LCJyb2xlcyI6WyJWSVNJVE9SIl0sImF1dGhlbnRpY2F0aW9uTmVlZGVkIjpmYWxzZSwiaXNzIjoiaGFrdW5hIiwiaXNzdWVhdCI6MTYyMDgyNzczNDM0NCwiaWQiOi0xLCJyZWdpb24iOiJWSUVUTkFNIiwianRpIjoiOGM1MzljZGMtNjQ4ZS00YjIyLWFhMDUtYWRlMDBlMGJhYmYyIn0.omZb9pYcqK8R4U3p8B2UVNgb8RemIWtra-FvutXQnLQ',
        'user-agent:Mozilla/5.0 (Linux; Android 9; Bee 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36',
        'x-hakuna-agent:Hakuna/110 WEBCLIENT/2.4.82',));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
        ?>