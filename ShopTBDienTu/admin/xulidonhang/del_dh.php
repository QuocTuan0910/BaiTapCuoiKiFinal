<?php 
require_once "../../util/DBConnectionUtil.php";
?>
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        #b2: Xóa + Về trang index thông báo
        $query = "DELETE FROM orders WHERE id = '{$id}'";
        $result = $mysqli->query($query);
        header('location: index.php');
    }
?>