<?php
namespace Phppot;

use Phppot\CountryState;

$countryStateCity = new CountryStateCity();
$countryResult = $countryStateCity->getAllCountry();
?>
<html>
<head>
<TITLE>jQuery Dependent DropDown List - Countries and States</TITLE>
<head>
<link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
<script src="./vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/ajax-handler.js" type="text/javascript"></script>
</head>
<body>



    <div class="frmDronpDown">
        <div class="row">

            <label>Country:</label><br />
            
            <select name="country" onChange="getState(this.value);">
                <option value disabled selected>Select Country</option>




<?php
foreach ($phpData as $country) {
 ?>
 
<option value="<?php echo $country["id"]; ?>">

<?php echo $country["name"]; ?>

</option>
<?php
}
?>




</select>
        </div>
        <div class="row">
            <label>State:</label><br /> <select name="state"
            
                onChange="getCity(this.value);">
                <option value="">Select State</option>
            </select>
        </div>
        <div class="row">
            <label>City:</label><br /> <select name="city"
                id="city-list" class="demoInputBox">
                <option>Select City</option>
            </select>
        </div>
    </div>
</body>
</html>