<?php
function hosting_folder_dir() {
  $SUDL = true; // Serving Under Domain Level
  return $SUDL ? '' : '/fastfit'; // if you want to place files in subfolder, then add it here;
}
?>
