<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1>Manage Categories</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td width="100"><img src="./images/863px-Apple_logo_black.svg.png"></td>
                                    <td>Apple</td>

                                    <td>
                                        <a href="edit_manu.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="100"><img src="./images/microsoft.png"></td>
                                    <td>Microsoft</td>

                                    <td>
                                        <a href="edit_manu.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="100"><img src="./images/Sony-Logo.png"></td>
                                    <td>Sony</td>

                                    <td>
                                        <a href="edit_manu.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="100"><img src="./images/1200px-Samsung_Logo.svg.png"></td>
                                    <td>SamSung</td>

                                    <td>
                                        <a href="edit_manu.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td width="100"><img src="./images/1200px-OPPO_Logo_wiki.png"></td>
                                    <td>Oppo</td>

                                    <td>
                                        <a href="edit_manu.html" class="btn
                                                    btn-success btn-mini">Edit</a>
                                        <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
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
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>