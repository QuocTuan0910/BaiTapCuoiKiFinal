<?php require_once '../../templates/admin/inc/header.php'; ?>
<?php require_once '../../templates/admin/inc/leftbar.php'; ?>
<div id="page-wrapper">
    <div id="page-inner">
    <?php 
    $row_count = 4;
    $query1 = mysqli_query($mysqli, "SELECT * FROM users");
    $tongsodong = mysqli_num_rows($query1);
    $sotrang = ceil($tongsodong / $row_count);
    if(isset($_GET['page'])){
        $curent_page = $_GET['page'];
    }else{
        $curent_page = 1;
    }
    $offset = ($curent_page -1 ) * $row_count;
    ?>
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý người dùng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                    <form method="post" action="">
                                        <input type="submit" name="search" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                                        <input type="search" name="timkiem" class="form-control input-sm" placeholder="Nhập tên thành viên" style="float:right; width: 300px;" />
                                        <div style="clear:both"></div>
                                    </form><br />
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Ngày khởi tạo</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(isset($_POST['search'])){
                                        $search = $_POST['timkiem'];
                                    }else{
                                        $search = '';
                                    }
                                    

                                    $query = "SELECT * FROM users WHERE fullname LIKE '%$search%' ORDER BY user_id DESC LIMIT $offset, $row_count";
                                    $result = $mysqli->query($query);
                                    while($arUser = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                        <tr class="<?php echo $cl ?> gradeX">
                                            <td><?php echo $arUser['user_id'] ?></td>
                                            <td><?php echo $arUser['fullname'] ?></td>
                                            <td><?php echo $arUser['email'] ?></td>
                                            <td><?php echo $arUser['created_time'] ?></td>
                                            <td class="center">
                                                <?php if(checkPrivilege('del_user.php?id=0')) { ?>
                                                <a href="admin/user/del.php?id=<?php echo $arUser['user_id'] ?>" onclick="return confirm ('Ban co that muon xoa nguoi dung nay khong ?')" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="dataTables-example_info" style="margin-top:27px">Hiển thị từ 1 đến 5 của <?php echo $result->num_rows; ?> kết quả </div>
                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                        <ul class="pagination">
                                            <?php 
                                            for($i = 1; $i <= $sotrang; $i++){
                                                $active = '';
                                                if($i == $curent_page ){
                                                    $active = 'active';
                                                }
                                            ?>
                                            <li class="paginate_button <?php echo $active; ?>" aria-controls="dataTables-example" tabindex="0"><a href="admin/user/index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                            <?php 
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>

</div>
<!-- /. PAGE INNER  -->
<?php require_once '../../templates/admin/inc/footer.php'; ?>