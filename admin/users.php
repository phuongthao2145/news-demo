<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1>Manage User</h1>
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
                                    <th>User Id</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>2</td>
                                    <td>user1</td>
                                    <td>*****</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="edit.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <form action="" method="">
                                            <input type="submit" class="btn btn-danger
                                                        btn-mini" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>3</td>
                                    <td>guest</td>
                                    <td>*****</td>
                                    <td>editor</td>
                                    <td>
                                        <a href="edit.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <form action="" method="">
                                            <input type="submit" class="btn btn-danger
                                                        btn-mini" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>