<?php
require_once '../../templates/admin/inc/header.php';
#b1: Lấy id
$cat_id = $_GET['id'];
#b2: Xóa + Về trang index thông báo
$query = "DELETE FROM menu WHERE id_menu = {$cat_id}";
if ($mysqli->query($query)) {
   HEADER("LOCATION: index.php?msg=Xóa danh mục thành công");
} else {
   HEADER("LOCATION: index.php?msg=Xóa danh mục không thành công");
}
