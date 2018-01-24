<?php
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/ajax/log.txt',print_r($_REQUEST, true));