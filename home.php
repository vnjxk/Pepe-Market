<?php

header('Location: ' . dirname("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI])") . '');
?>