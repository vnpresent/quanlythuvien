<?php


// số tài liệu đang được mượn
echo count(Rent::statisdocument());

// số đọc giả đang mượn sách
echo count(Rent::statisreader());

// số tài liệu còn lại
echo count(Rent::statisdocumentremain());

// độc giả vi phạm
echo count(Breach::violatingreaders());

?>