<?php

// TODO: Fetch parcel bij backend adv het tracking number

$parcelStatus = "Delivered";
$query = http_build_query(["parcel-status" => $parcelStatus]);
header("Location: http://{$_SERVER['HTTP_HOST']}/tracking.php?$query");
