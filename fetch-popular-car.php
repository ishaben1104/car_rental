<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'config/connection.php';

if (isset($_POST["type"])) {

    $query = "SELECT cd.*,cb.brand_id,cb.brand_name FROM car_details as cd LEFT JOIN car_brand as cb ON cb.brand_id = cd.brand_id  WHERE car_name IS NOT NULL";

    if (isset($_POST["type"]) && $_POST["type"] != 'all' ) {
        $brand_filter = $_POST["type"];
        $query .= " AND cb.brand_id = '" . $brand_filter . "'";
    }
    $query .= " LIMIT 6";
    $result = $conn->query($query);
    $output = '';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $output .= '<div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="car-details.php">
                                            <img src="dashboard/assets/images/car/'.$row['image'].'" class="img-fluid" alt="'.$row['brand_name'].'">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">'.$row['brand_name'].'</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <h3 class="listing-title">
                                                <a href="car-details.php">'.$row['car_name'].'</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                                    <p>'.$row['transmission'].'</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-02.svg" alt="22 miles"></span>
                                                    <p>'.$row['mileage'].' miles</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-03.svg" alt="Diesel"></span>
                                                    <p>'.$row['fuel_type'].'</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-05.svg" alt="2019"></span>
                                                    <p>'.$row['vehicle_model'].'</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                                    <p>'.$row['noofseats'].' Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">

                                            <div class="listing-price">
                                                <h6>£'.$row['per_hour_rate'].' <span>/ Hour</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="car-details.php" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}
