<?php require_once 'templates/mello/inc/header.php' ?>

<?php
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
}
?>
<?php
if (isset($_POST['submit'])) {
    $result_huy = mysqli_query($mysqli, "UPDATE orders SET yeucauhuy = '2' WHERE id = '$order_id'");
?>
    <script>
        window.location.href = 'kiem-tra-and-thu-thuc-thanh-toan.html';
    </script>
<?php
}
?>

<?php
$order = mysqli_query($mysqli, "SELECT orders.*, order_detail.order_id, order_detail.sanpham_id, order_detail.quantity, tbl_sanpham.* 
    FROM orders 
    INNER JOIN order_detail ON orders.id = order_detail.order_id 
    INNER JOIN tbl_sanpham ON tbl_sanpham.sanpham_id = order_detail.sanpham_id
    WHERE orders.id =  '$order_id'");
$row = mysqli_fetch_all($order, MYSQLI_ASSOC);

?>
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;font-size: 30px;margin-bottom: 20px"><b>Theo dõi đơn hàng</b></h2>
                <!-- Shopping Summery -->
                <div class="info-customer">
                    <h3 style="color:red">Thông tin khách hàng</h3><br>
                    <label>Tên: </label><span> <?php echo $row[0]['name']; ?></span><br>
                    <label>Số điện thoại: </label><span> <?php echo $row[0]['phone']; ?></span><br>
                    <label>Địa chỉ: </label><span> <?php echo $row[0]['address']; ?></span><br>
                </div>
                <br>
                <div class="info-product">
                    <h3 style="color:red">Thông tin đơn hàng</h3><br>
                    <label>Mã đơn hàng: </label><span> <?php echo $row[0]['id']; ?></span><br>
                    <label>Ngày đặt hàng: </label><span> <?php echo $row[0]['created_time']; ?></span><br>
                    <label>Trạng thái đơn hàng: </label> <span><?php
                        if ($row[0]['yeucauhuy'] == '1') {
                            echo '<span style="color:red">Đã hủy</span>';
                        } elseif ($row[0]['yeucauhuy'] == '2') {
                            echo '<span style="color:red">Đang chờ xác nhận hủy...</span>';
                        } elseif ($row[0]['tinhtrang'] == '1') {
                            echo 'Đã xử lí | Giao hàng';
                        } elseif ($row[0]['tinhtrang'] == '0') {
                            echo 'Đang chờ xác thực...';
                        }
                        ?></span><br>
                    <label>Ghi chú: </label><span> <?php echo $row[0]['note']; ?></span><br>
                </div>
                <br>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Tổng tiền</th>
                            </tr>
                        </thead>
                        <?php
                        $tongtien = 0;
                        $total = 0;
                        foreach ($row as $value) {
                            $tongtien = ($value['sanpham_giakhuyenmai'] * $value['quantity']);
                            $total += $tongtien;
                        ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $value['id']; ?></th>
                                    <th style="width: 120px;height:100px"><img src="files/uploads/<?php echo $value['sanpham_image']; ?>" alt=""></th>
                                    <td><?php echo $value['sanpham_name']; ?></td>
                                    <td><?php echo $value['quantity']; ?></td>
                                    <td><?php echo number_format($value['sanpham_giakhuyenmai']); ?></td>
                                    <td><?php echo number_format($tongtien); ?></td>
                                </tr>
                            </tbody>
                        <?php
                        }

                        ?>
                        <tr>
                            <td colspan="5" style="text-align:right"><b>THÀNH TIỀN</b></td>
                            <td class="total" colspan="2"><b><?php echo number_format($total); ?></b>
                        </tr>
                    </table>
                </div>
                <!--/ End Shopping Summery -->
                <div>
                    <a style="padding: 3px;background-color:blue;color:white;border-radius: 3px" href="kiem-tra-and-thu-thuc-thanh-toan.html">Quay lại đơn hàng của tôi</a>
                    <form method="POST">
                        <?php
                        if ($row[0]['yeucauhuy'] == '0') {
                        ?>
                            <input style="padding: 5px;background-color:red;color:white;border-radius: 3px" type="submit" name="submit" value="Hủy đơn hàng">
                        <?php
                        }
                        ?>


                    </form>
                </div>
            </div>
        </div>

    </div>
</div>




<?php require_once 'templates/mello/inc/footer.php' ?>