<?php
$car_id = $_SESSION['car_id'];
?><div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete Record</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        <div class="modal-body">
            <p>Are you sure, you want to delete this record?</p>
        </div>
        <div class="modal-footer bg-light">
            <button type="submit" class="btn btn-lg btn-primary" onclick="deleteData(<?php echo $car_id; ?>)">Yes</button>
            <button type="submit" data-bs-dismiss="modal" class="btn btn-lg btn-danger">No</button>
        </div>
    </div>
</div>