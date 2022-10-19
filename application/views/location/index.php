<?php
$this->load->view('templates/header');
?>
<div class="row">
    <div class="col-lg-12">
        <span id="success-msg"></span>
    </div>
</div>
<form class="dynamic-dependent-frm" id="dynamic-dependent-frm">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <select title="Select Country" name="regcountry" class="form-control" id="country-name">
                    <option value="">Select Country</option>
                    <?php
                    foreach ($geCountries as $key => $element) {
                        echo '<option value="'.$element['country_id'].'">'.$element['country_name'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <select title="Select State" name="state_name" class="form-control" id="state-name">
                    <option value="">Select State</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <select title="Select City" name="city_name" class="form-control" id="city-name">
                    <option value="">Select City</option>
                </select>
            </div>
        </div>
    </div>
</form>
<?php
$this->load->view('templates/footer');
?>