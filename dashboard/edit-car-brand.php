<?php
include '../config/connection.php';

// Fetch Car Brand Details
$id = "";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $editCarBrandSql = "SELECT * FROM `car_brand` WHERE brand_id = '$id'";
    $editCarBrandResult = $conn->query($editCarBrandSql);
    if ($editCarBrandResult->num_rows > 0) {
        $rowEditBrand = $editCarBrandResult->fetch_assoc();
        //Execute the query
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["updateBrand"])) {
                //Retrieve form data
                $brandName = $_POST["brandName"];
                if ($_FILES["customFile"]["size"] > 0){
                    $customFile = $_FILES["customFile"]["name"];
                    $tempname = $_FILES["customFile"]["tmp_name"];
                    $folder = "assets/images/brand/".basename($_FILES["customFile"]["name"]);
                    //SQL query to inser data into the database
                    $sql = "UPDATE `car_brand` SET `brand_name` = '$brandName', `image` = '$customFile' WHERE brand_id = '$id'";

                    //Execute the query
                    if ($conn->query($sql) === TRUE && move_uploaded_file($tempname,$folder)) {
                        echo "<h3>  Car Brand Added Successfully!</h3>";
                        echo "<script> location.href='add-car-brand.php'; </script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        die;
                    }
                }else{
                    $image = $rowEditBrand["image"];
                    //SQL query to inser data into the database
                    $sql = "UPDATE `car_brand` SET `brand_name` = '$brandName' , `image` = '$image' WHERE brand_id = '$id'";

                    //Execute the query
                    if ($conn->query($sql) === TRUE) {
                        echo "<h3>  Car Brand Added Successfully!</h3>";
                        echo "<script> location.href='add-car-brand.php'; </script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        die;
                    }
                }
            }
        }
    }else{
        echo "<h3>No Data Found!</h3>";
        die;
    }
}
?>

<!DOCTYPE html>
<html>

<?php
include 'include/header-links.php';
include 'include/session.php';
?>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <?php
            include 'include/sidebar.php';
            ?>
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <?php
                include 'include/header.php';
                ?>
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-lg mx-auto">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Edit Car Brand</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner bg-grey">
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="row g-gs">
                                                        <!-- Brand -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="brandName">Brand Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="brandName" name="brandName" value="<?php echo isset($rowEditBrand['brand_name']) ? $rowEditBrand['brand_name'] : '' ?>" placeholder="Convertible" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Upload File -->
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="noofseats">Upload photo</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" class="form-file-input" id="customFile" name="customFile" onchange="loadFile(event)">
                                                                        <label class="form-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="categoryImage"></label>
                                                                <div class="form-control-wrap">
                                                                    <img class="form-control" src="assets/images/brand/<?php echo $rowEditBrand['image']; ?>" style="width: 60px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <div class="form-control-wrap">
                                                                    <button type="submit" class="btn btn-lg btn-primary" name="updateBrand">Update Brand</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <?php
                include 'include/dashboard-footer.php';
                ?>
            </div>
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <?php
    include 'include/footer-scripts.php';
    ?>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
</body>

</html>
