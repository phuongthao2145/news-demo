<?php
include "header.php";
include "sidebar.php";
if (isset($_GET['keyword'])):
    $keyword = $_GET['keyword'];
    // hiển thị 5 sản phẩm trên 1 trang
    $count = 5;
    // Lấy số trang trên thanh địa chỉ
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // Tính tổng số dòng, ví dụ kết quả là 18
    $total = count($item->searchCount($keyword));
    // lấy đường dẫn đến file hiện hành
    $url = $_SERVER['PHP_SELF'] . "?keyword=" . $keyword;

    $search = $item->search($keyword, $page, $count);
?>
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h6>Result: found <?php echo $total; ?> item(s) with keyword "<?php echo $keyword ?>"</h6>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered
                                    table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Title</th>
                                        <th>Excerpt</th>
                                        <th>Category</th>
                                        <th>Feature</th>
                                        <th>View</th>
                                        <th>Author</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($search as $value): ?>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="../img/<?php echo $value['image'] ?>" />
                                            </td>
                                            <td><?php echo $value['title'] ?></td>
                                            <td><?php echo $value['excerpt'] ?></td>
                                            <td><?php echo $value['category'] ?></td>
                                            <td><?php echo $value['featured'] ?></td>
                                            <td><?php echo $value['views'] ?></td>
                                            <td><?php echo $value['author'] ?></td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <?php echo $item->paginate($url, $total, $count,$page) ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
<?php endif; ?>
<?php include "footer.php" ?>