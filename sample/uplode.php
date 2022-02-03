<?php
$targetPath = 'uploads/' .basename($_FILES['inpfile']['name']);
move_uploaded_file($FILES['inpfile']['tnp_name'], $targetPath);