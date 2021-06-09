<?php require_once 'templates/mello/inc/header.php'; ?>
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;font-size: 30px;margin-bottom: 20px"><b>My Account</b></h2>
                <!-- Shopping Summery -->
                <table style="width: 800px;margin-left: 15%" class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>ID</th>
                            <th>FullName</th>
                            <th>UserName</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Ngày khởi tạo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           if(isset($_SESSION['user'])){
                            $id = $_SESSION['user']['user_id'];
                            $result = mysqli_query($mysqli, "SELECT * FROM users WHERE user_id = {$id}");
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['created_time']; ?></td>
                                </tr>
                        <?php
                            }
                           }else{
                               echo 'Tài khoản trống';
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
<?php require_once 'templates/mello/inc/footer.php'; ?>
