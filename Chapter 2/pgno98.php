<?php
header("Content-type:image/png");
$handle = ImageCreate(930,980);
$bg_color = ImageColorAllocate($handle,240,240,140);
$txt_color = ImageColorAllocate($handle,0,0,0);
ImageString ($handle, 5, 5, 18, "MSBTE.org.in", $txt_color);
imagepng($handle);
?>