<?php include '../header.php'; ?>

<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="../index.php">Home</a></li>
                    <li class="page-breadcrumb__nav active"><a href="../product.php">Products</a></li>
                    <li class="page-breadcrumb__nav active"><a href="rice.php">Rice</a></li>
                </ul>
                <h2 class="mt-2"> PRODUCTS </>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- :::::: Start Main Container Wrapper :::::: -->
<main id="main-container" class="main-container m-t-100">

    <!-- Start Product Details Gallery -->
    <div class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="product-gallery-box m-b-0">
                        <div class="product-image--gallery overflow-hidden">
                            <h4 class="font--regular m-b-20">Broken Rice
                            </h4>
                            <div class="float-left float-grid-1 m-t-0">
                                <div class="img-responsive border-around">
                                    <img src="../assets/img/product/rice/broken1.jpg" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-7 m-b-0">
                    <div class="product-details-box m-b-0">


                        <div class="mt12px pt22px bdrT proDtls">
                            <h4 class="b large alpha75 mb10px m-b-30">Product Details</h4>
                            <table class="w100 mb15px formTable ">
                                <p>Broken Rice consists of rice grains that have been broken during milling, often used in dishes like rice porridge, rice flour, or as a budget-friendly alternative in everyday meals.
                                </p>
                                <!--<h5>Features</h5>-->

                                <tbody>

                                    <tr>
                                        <td class="p7px alpha75 w33">Product Name:</td>
                                        <td class="p7px">Broken Rice</td>
                                    </tr>
                                    <tr>
                                        <td class="p7px alpha75 w33">Origin of Product:</td>
                                        <td class="p7px">INDIA</td>
                                    </tr>
                                    <tr>
                                        <td class="p7px alpha75 w33">Packing:</td>
                                        <td class="p7px">Jute bag/p p Bag (or) as per buyers request</td>
                                    </tr>
                                    <tr>
                                        <td class="p7px alpha75 w33">Payment Terms:</td>
                                        <td class="p7px">T T (Or) L/C at sight</td>
                                    </tr>
                                    <tr>
                                        <td class="p7px alpha75 w33">Delivery Terms:</td>
                                        <td class="p7px">FOB ,CIF</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <div class="product-var__item m-t-30">

                            <?php include '../product-quote.php'; ?>

                        </div>
                    </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->


</main> <!-- :::::: End MainContainer Wrapper :::::: -->

<?php include '../footer.php'; ?>