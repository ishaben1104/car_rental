<?php
include 'config/connection.php';
//error_reporting(E_ALL);
//ini_set('display_errors',1);
if(isset($_POST["car_id"])) {
    $car_id = $_POST["car_id"];
    $pickup_date = $_POST["pickup_date"];
    $temp_id = $_POST["temp_id"];
    $getBookingSql = "SELECT * FROM `bookings` WHERE car_id = '$car_id' AND STR_TO_DATE(pickup_datetime, '%d-%m-%Y') = STR_TO_DATE('".$pickup_date."', '%d-%m-%Y') AND status = 'pending' ";
    $getBookingResult = $conn->query($getBookingSql);

    # Prepare the SELECT Query
    $sqlCarDetails = "SELECT cd.*, cb.brand_name, cb.brand_id, cc.category_id, cc.category_name FROM car_details as cd LEFT JOIN car_brand as cb ON cd.brand_id = cb.brand_id LEFT JOIN car_category as cc ON cc.category_id = cd.category_id WHERE car_id = '$car_id'";
    $resultCarDetails = $conn->query($sqlCarDetails);
    $rowCarDetails = $resultCarDetails->fetch_assoc();


    $sqlBookingDetails = "SELECT * FROM temporary_booking WHERE temporary_id = '$temp_id'";
    $resultBookingDetails = $conn->query($sqlBookingDetails);
    $rowBookingDetails = $resultBookingDetails->fetch_assoc();
    $bookingDetails = unserialize($rowBookingDetails['booking_details']);

   if ($getBookingResult->num_rows > 0 ){
       $responseStatus = 'not available';
       $response = '<div class="modal-content">
                    <div class="modal-header">
                        <div class="form-header text-start mb-0">
                            <h4 class="mb-0 text-dark fw-bold">Availability Details</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="align-center" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="available-for-ride" style="color: redborder: 1px solid red;color: red;">
                                    <p><i class="fa-regular fa-circle-check"></i>'.$rowCarDetails["car_name"].' is '.$responseStatus.' for a ride</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="car-listing.php" class="btn btn-back">Back<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>';
   } else {

       $responseStatus = 'available';

       $start = strtotime($bookingDetails["pickup_date"] ." ".$bookingDetails["pickup_time"]);
       $end = strtotime($bookingDetails["dropoff_date"] ." ".$bookingDetails["dropoff_time"]);

       // Formulate the Difference between two dates
       $diff = abs($end - $start);

       $hours = abs($end - $start)/3600;

        $amountCharge = floor((int)$hours * (int)$rowCarDetails['per_hour_rate']);
       $bookingDetailsNewData = unserialize($rowBookingDetails['booking_details']);
       $bookingDetailsNewData['amount'] = $amountCharge;
       $bookingDetailsNew = serialize($bookingDetailsNewData);

       $sqlTemp = "UPDATE `temporary_booking` SET `booking_details` = '$bookingDetailsNew' WHERE temporary_id = '$temp_id'";
       if ($conn->query($sqlTemp) == TRUE){
           setcookie('booking_id', $temp_id, time() + 86400 * 14);
           setcookie('redirect_url', 'booking-payment.php', time() + 86400 * 14);
       }

       $response = '<div class="modal-content">
                    <div class="modal-header">
                        <div class="form-header text-start mb-0">
                            <h4 class="mb-0 text-dark fw-bold">Availability Details</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="align-center" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="available-for-ride">
                                    <p><i class="fa-regular fa-circle-check"></i>'.$rowCarDetails["car_name"].' is '.$responseStatus.' for a ride</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row booking-info">
                                    <div class="col-md-4 pickup-address">
                                        <h5>Pickup</h5>
                                        <p>'.$bookingDetails["pickup_city"].'</p>
                                        <span>Date & time : '.$bookingDetails["pickup_date"].' '.$bookingDetails["pickup_time"].'</span>
                                    </div>
                                    <div class="col-md-4 drop-address">
                                        <h5>Drop Off</h5>
                                        <p>'.$bookingDetails["dropoff_city"].'</p>
                                        <span>Date & time : '.$bookingDetails["dropoff_date"].' '.$bookingDetails["dropoff_time"].'</span>
                                    </div>
                                    <div class="col-md-4 booking-amount">
                                        <h5>Booking Amount</h5>
                                        <h6><span>£'.$amountCharge.' </span> /trip</h6>
                                    </div>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="grand-total">
                                    <h5>Grand Total</h5>
                                    <span>£'.$amountCharge.'</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="booking-payment.php" class="btn btn-back">Go to Details<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>';

   }

   echo $response;

}
?>
