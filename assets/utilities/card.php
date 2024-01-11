<?php include 'assets/data/medicament_data.php'; ?>

<?php
    foreach ($medicament as $value) {
        echo '<div class="col">
            <div class="card bg-op text-white d-flex align-items-center ">
            <img src="/assets/img/medicament/' . $value['img'] .'.png" class="card-img-top w-40" alt="">
                <div class="card-body d-flex align-items-center flex-column ">
                    <h5 class="card-title text-center">' . $value['title'] . '</h5>
                    <p class="card-text text-center ft">' . $value['description'] . '</p>
                    <p class="card-text text-center">' . $value['prix'] . '</p>
                    <a href="#" class="btn btn-success w-50 d-flex justify-content-center" role="button">Acheter</a>
                </div>
            </div>
        </div>';
    }
?>
