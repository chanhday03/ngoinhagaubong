<?php 
session_start();
session_destroy();
echo '<h1>Session đã hủy</h1>' ;
echo '<a href="session.php">Khởi tạo Dữ Liệu Session</a>';
echo '<a href="session2.php">Show Dữ Liệu Session</a>';
?>