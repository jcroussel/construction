<?php

header("Status: 301 Moved Permanently", false, 301);
header("Location: http://" . $_SERVER['HTTP_HOST']);
exit();
?>