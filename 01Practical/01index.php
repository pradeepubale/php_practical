<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "03header.php";?>

</head>
<body>
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Bootstrap
    </a>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>

    <form class="row g-3 needs-validation" action="04form_data.php" method="post" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="user" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Education</label>
            <select class="form-select" name="education" id="validationCustom04" required>
                <option selected disabled value="">Choose Education</option>
                <option>First Year</option>
                <option>Second Year</option>
                <option>Third Year</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Pincode</label>
            <input type="text" class="form-control" name="zipcode" id="validationCustom05" required>
            <div class="invalid-feedback">
                Please provide a valid pincode.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
    <br/><br/><br/><br/>
    <?php include "02footer_include.php"; ?>
</body>
</html>
