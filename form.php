<?php

require_once "includes/error_handler.php"; // Include the global error handler
require_once "includes/form_validation.php"; // Include the validation file for the form

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cruise Vacation Entry Form</title>

    <!-- Use Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Overrides -->
    <link rel="stylesheet" href="css/styles.css">

</head>

<body class="bg-light">


<?php if ($showForm)  { ?>
<div class="container">
    <main>
        <div class="py-5 text-center">
         <h2>Cruise Vacation Entry Form</h2>
            <p class="lead">Please fill in the information below and click "Submit your entry" for a chance to win a cruise vacation!</p>
        </div>

        <div class="col-12">
            <h4 class="mb-3">Your Information</h4>
            <form class="needs-validation" action= "<?=$_SERVER['PHP_SELF']?>" method="post" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <?php if (!$isFirstNameValid) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <input type="text" class="form-control <?php if (!$isFirstNameValid && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="first-name" name="first-name" placeholder="" value="<?=$form_firstname?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <?php if (!$isLastNameValid) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <input type="text" class="form-control <?php if (!$isLastNameValid && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="last-name" name="last-name" placeholder="" value="<?=$form_lastname?>" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email </label>
                        <?php if (!$isEmailValid) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <input type="email" class="form-control <?php if (!$isEmailValid && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="email" name="email" placeholder="you@example.com" value="<?=$form_email?>"  required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?=$form_address?>">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="zip" class="form-label">City <span class="text-muted">(Optional)</span></label>
                        <?php if (!$isZipValid) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <input type="text" class="form-control <?php if(!$isZipValid && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="city" name="city" placeholder=" " value="<?=$form_zip?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <?php if (!$isStateVaild) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <select class="form-select <?php if(!$isStateVaild && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="state" name="state" required>
                            <option value="">Choose...</option>"
                            <?php
                                // Use the associative array to hydrate the dropdown box
                                
                                foreach ($statesArray as $key => $value) {
                                    $selectedattribute = '';
                                    if($key === $form_state) $selectedattribute = 'selected';
                                    echo "<option value=$key $selectedattribute>$value</option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="">
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="state" class="form-label">Preferred destination</label>
                        <?php if (!$isPreferred_destination) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <select class="form-select <?php if(!$isPreferred_destination && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="preferred-destination" name="preferred-destination" required>
                            <option value="">Please select...</option>
                            <?php
                                // Use the associative array to hydrate the dropdown box
                                foreach ($destinationsArray as $key => $value) {
                                    $selectedattribute = '';
                                    if($key === $form_preferred_destination) $selectedattribute = 'selected';
                                    echo "<option value=$key $selectedattribute>$value</option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid destination.
                        </div>
                    <div class="col-12">
                        <label for="cruiseline" class="form-label">Preferred Cruise Line</label>
                        <?php if (!$isPreferred_cruise_line) echo '<span class= "requiredIndicator">*</span>'; ?>
                        <select class="form-select <?php if (!$isPreferred_cruise_line && $isFormSubmitted) echo 'requiredHighlight'; ?>" id="cruise-line" name="cruise-line" required>
                            <option value="">Please select your preferred cruise... </option>
                            <?php
                                // Use the associative array to hydrate the dropdown box
                                foreach ($cruiseArray as $key => $value) {
                                    $selectedattribute = '';
                                    if($key === $form_preferred_cruise_line) $selectedattribute = 'selected';
                                    echo "<option value=$key $selectedattribute>$value</option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid cruise line.
                        </div>

                    </div>
                    <div class="col-md-5">
                        <label for="zip" class="form-label">Phone <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Do you want to be on the mailing list?</label>
                        <div class="form-check" style="display: inline-block; padding-right: 25px">
                            <input id="mailing-list-yes" name="mailing-list" type="radio" class="form-check-input" value="yes" required="">
                            <label class="form-check-label" for="mailing-list-yes">Yes</label>
                        </div>
                        <div class="form-check" style="display: inline-block">
                            <input id="mailing-list-no" name="mailing-list" type="radio" class="form-check-input" value="no" required="">
                            <label class="form-check-label" for="mailing-list-no">No</label>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Submit your entry</button>

            </form>

            <?php require "includes/footer.php"; ?>
            
        </div>
    </main>
</div>
<?php } else { ?>

Thank you <?=$form_firstName?>, your entry has been submitted.<br>

<?php } ?>

</body>
</html>