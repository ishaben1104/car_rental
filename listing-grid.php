<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'include/session.php';
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'include/header-links.php';
?>

<body>
    <div class="main-wrapper">

        <?php
        include 'include/header.php';
        ?>

        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">Rent A Car</h2>
                    </div>
                </div>
            </div>
        </div>
        <section class="section car-listing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 theiaStickySidebar">
                        <form action="#" autocomplete="off" class="sidebar-form">

                            <div class="sidebar-heading">
                                <h3>What Are You Looking For</h3>
                            </div>
                            <div class="product-search">
                                <div class="form-custom">
                                    <input type="text" class="form-control" id="searchCar" placeholder>
                                    <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain1">
                                <div class="card-header-new" id="headingOne">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Car Brand
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                    <div class="card-body-chat">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="checkBoxes1">
                                                    <div class="selectBox-cont">
                                                        <?php
                                                        # Prepare the SELECT Query
                                                        $sqlBrand = "SELECT * FROM car_brand";
                                                        $result = $conn->query($sqlBrand);
                                                        while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username" class="common_selector brand" value="<?php echo $row['brand_id']; ?>">
                                                                <span class="checkmark"></span> <?php echo $row['brand_name']; ?>
                                                            </label>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionMain2">
                                <div class="card-header-new" id="headingTwo">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Car Category
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes2">
                                            <div class="selectBox-cont">
                                                <?php
                                                # Prepare the SELECT Query
                                                $sqlCategory = "SELECT * FROM car_category";
                                                $result = $conn->query($sqlCategory);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username" class="common_selector category" value="<?php echo $row['category_id']; ?>">
                                                        <span class="checkmark"></span> <?php echo $row['category_name']; ?>
                                                    </label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionMain3">
                                <div class="card-header-new" id="headingThree">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Capacity
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes3">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus" class="common_selector capacity" value="2">
                                                    <span class="checkmark"></span> 2
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus" class="common_selector capacity" value="4">
                                                    <span class="checkmark"></span> 4
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus" class="common_selector capacity" value="5">
                                                    <span class="checkmark"></span> 5
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="bystatus" class="common_selector capacity" value="8">
                                                    <span class="checkmark"></span>8
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion" id="accordionMain4">
                                <div class="card-header-new" id="headingFour">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Max Rate Per Hour 
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                    <div class="card-body-chat">
                                        <div class="filter-range pass-group">
                                            <div class="icon-wrapper">
                                                <span class="fas fa-pound-sign icon-position"></span>
                                            </div>
                                            <input type="number" class="input-range price form-control pl-30" id="price" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionMain5">
                                <div class="card-header-new" id="headingFive">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            Rating
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample5">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes4">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category" class="common_selector" value="5">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category" class="common_selector" value="4">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category" class="common_selector" value="3">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category" class="common_selector" value="2">
                                                    <span class="checkmark"></span>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                </label>
                                                <div class="view-content">
                                                    <div class="viewall-Two">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username" class="common_selector" value="1">
                                                            <span class="checkmark"></span>
                                                            <i class="fas fa-star filled"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href class="reset-filter">Reset Filter</a>
                        </form>
                    </div>
                    <div class="col-lg-9">
                        <div class="row filter_data">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'include/footer.php';
        ?>
    </div>

    <?php
    include 'include/footer-scripts.php';
    ?>
    <script>
        $(document).ready(function() {

            filter_data();

            function filter_data() {
                $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data';
                var search = $('#searchCar').val();
                var price = $('#price').val();
                var brand = get_filter('brand');
                var category = get_filter('category');
                var capacity = get_filter('capacity');
                $.ajax({
                    url: "fetch-filter-car.php",
                    method: "POST",
                    data: {
                        action: action,
                        price: price,
                        brand: brand,
                        category: category,
                        capacity: capacity,
                        search: search
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function() {
                filter_data();
            });

            $('#price').keyup(function() {
                filter_data();
            });
            $('#searchCar').keyup(function() {
                filter_data();
            });

        });
    </script>
</body>

</html>