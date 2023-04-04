<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <form action="" class="row needs-validarion g-3" novalidate>
            <div class="col-12 h3">Student registration</div>
            <!--frist name-->
            <div class="col-sm-12 col-md-6">
                <label for="frist-name" class="form-label">Frist name <span class="text-danger">*<span></label>
                <input type="text" name="frist_name" id="frist-name" class="form-control" placeholder="Enter student's frist name" required>
                <div class="invalid-feedback">Frist name is required</div>
            </div>
            <!--last name-->
            <div class="col-sm-12 col-md-6">
                <label for="last-name" class="form-label">Last name <span class="text-danger">*<span></label>
                <input type="text" name="last_name" id="last-name" class="form-control" placeholder="Enter student's last name" required>
                <div class="invalid-feedback">last name is required</div>
            </div>
            <!--mobile-->
            <div class="col-sm-12 col-md-6">
                <label for="mobile" class="form-label">Mobile <span class="text-danger">*<span></label>
                <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number" required>
                <div class="invalid-feedback">mobile number is required</div>
            </div>
            <!--email-->
            <div class="col-sm-12 col-md-6">
                <label for="email" class="form-label">EMAIL <span class="text-danger">*<span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email id" required>
                <div class="invalid-feedback">Email id is required</div>
            </div>
            <!--branch-->
            <div class="col-sm-12 col-md-6">
                <label for="branch" class="form-label">Branch <span class="text-danger">*<span></label>
                    <select name="branch" id="branch" class="form-select" required>
                        <option value="select your branch">select your branch</option>
                        <option value="mechanical">Mechanical</option>
                        <option value="civil">civil</option>
                        <option value="aero">Aeronautical</option>
                        <option value="electrical">Electrical</option>
                    </select>
            </div>
            <!--hostel-->
            <div class="col-sm-12 col-md-6">
                <label for="hostel" class="form-label d-block">Do you need hostel facility <span class="text-danger">*<span></label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="yes" name="hostel" required>
                        <label for="yes" class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="no" name="hostel" required>
                        <label for="no" class="form-check-label">NO</label>
                    </div>
            </div>
            <!--additional subjects-->
            <div class="col-sm-12 col-md-6">
                <label for="subjects" class="form-label d-block">Additional subjects</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="cybersecurity" name="cybersecurity">
                    <label for="cybersecurity" class="form-check-label">Cyber security</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="ai" name="ai">
                    <label for="ai" class="form-check-label">Artifical intelegence</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="iot" name="iot">
                    <label for="iot" class="form-check-label">IOT</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="blockchain" name="blockchain">
                    <label for="blockchain" class="form-check-label">Block chain</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="robotics" name="robotics">
                    <label for="robotics" class="form-check-label">Robotics</label>
                </div>
                </div>
                <!--address-->
                <div class="col-sm-12 col-md-6">
                    <label for="address" class="form-label d-block">Address <span class="text-danger">*<span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!--submit-->
                <div class="col-sm-12 col-md-6 offset-md-6 text-end">
                    <button class="btn btn-danger btn-sm" type="reset">
                        <i class="bi bi-reply"></i>RESET
                    </button>
                    <button class="btn btn-success btn-sm" type="reset">
                        <i class="bi bi-person-fill"></i>SAVE
                    </button>
                </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>