<?php require_once 'templates/mello/inc/header.php'; ?>
<?php require_once 'util/function.php'; ?>
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;font-size: 30px;margin-bottom: 20px"><b>Theo dõi đơn hàng</b></h2>
                <p style="text-align: center;margin-bottom:20px;color: blue"> <?php
                    if (isset($_GET['msg'])) {
                        echo $_GET['msg'];
                    }
                    ?></p>

                <!-- Shopping Summery -->
                <table style="width: 800px;margin-left: 15%" class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>MÃ SẢN PHẨM</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th class="text-center">TỔNG TIỀN</th>
                            <th class="text-center">TRẠNG THÁI ĐƠN HÀNG</th>
                            <th class="text-center">CHI TIẾT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['id'])) {
                            $id_del = $_GET['id'];
                        }
                        ?>
                        <?php
                        $id = '';
                        if (isset($_SESSION['user'])) {
                            $id = $_SESSION['user']['user_id'];
                        }

                        $result = mysqli_query($mysqli, "SELECT * FROM orders WHERE user_id = '$id' ORDER BY id DESC");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr id="<?php echo $row['id']; ?>">
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['created_time']; ?></td>
                                <td><?php echo number_format($row['total']); ?></td>
                                <td>
                                    <?php 
                                        if($row['yeucauhuy'] == '1'){
                                            echo '<p style="color:red">Đã hủy</p>';
                                        }elseif($row['yeucauhuy'] == '2'){
                                            echo '<p style="color:red">Đang chờ xác nhận hủy...</p>';
                                        }elseif($row['tinhtrang'] == '1'){
                                            echo 'Đã xử lí | Giao hàng';
                                        }elseif($row['tinhtrang'] == '0'){
                                            echo 'Đang chờ xác thực...';
                                        }
                                    ?>
                                </td>
                                <td><a style="color:blue" href="chitietdh.php?id=<?php echo $row['id']; ?>">Xem</a></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>

    </div>
</div>
</section>
<br>
<?php require_once 'templates/mello/inc/footer.php'; ?>
<script>
    $(document).ready(function() {
        $(".delete").click(function() {

            var del = $(this).attr("id");

            $.ajax({
                url: 'del_wishlist.php',
                type: 'POST',
                data: {
                    id: del
                },
                success: function(data) {
                    if (confirm('Bạn muốn xóa sản phẩm này !')) {
                        $('#' + del).remove();
                    }

                }
            });

        });
    });
</script>