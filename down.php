<?php

print("HI")

header('Content-type: application/doc');

header('Content-Disposition:attachment;filename="events.docx"');

readfile('events.docx');
echo "hi"
?>
