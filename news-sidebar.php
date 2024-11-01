
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <?php
            $getNewItem = $item->getNewItem(0, 6);
            //var_dump($get3NewstItem);
            foreach ($getNewItem as $value):
            ?>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/<?php echo $value['image'] ?>" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $item->getCatNameById($value['category'])[0]['name']; ?></a>
                                    <a class="text-body" href=""><small><?php echo date_format(date_create_from_format("Y-m-d H:i:s", $value['created_at']), "M, d Y"); ?></small></a>
                                </div>
                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="single.php?id=<?php echo $value['id'] ?>"><?php echo substr($value['title'], 0, 40) ?>...</a>
                                <p class="m-0"><?php echo $value['excerpt'] ?></p>
                            </div>
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                    <small><?php echo $item->getAuthorName($value['author'])[0]['name']; ?></small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endforeach
                    ?>
                </div>
            </div>

            <?php include "social-sidebar.php" ?>
        </div>
    </div>
</div>
