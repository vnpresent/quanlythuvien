<?php
if (Auth::isLogin()) {
?>

<a href="index.php?controller=auth&action=logout" class="nav-link active text-dark">Đăng xuất</a>
<?php

}

else
{
?>
<a href="index.php?controller=auth&action=login" class="nav-link active text-dark">Đăng nhập</a>
<?php
}
?>




