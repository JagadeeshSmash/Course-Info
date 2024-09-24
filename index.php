<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Data to Mail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-12 centered p-0">
                <form method="post" action="https://formspree.io/f/xgvwjdpe" class="p-5 w-100">
                    <h2 class="text-center">Fill Your Details</h2>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" placeholder="" class="form-control">
                                <label for="">Name</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="course" placeholder="" class="form-control">
                                <label for="">Course</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="tel" name="phone" placeholder="" class="form-control">
                                <label for="">Mobile</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="email" name="email" placeholder="" class="form-control">
                                <label for="">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="address" placeholder="" class="form-control">
                                <label for="">Address</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="message" placeholder="" class="form-control">
                                <label for="">Message</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-warning w-25">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $to = "satya788058@gmail.com";
    $subject = "Course Information";
    $message = "
    <div class='container table-responsive py-5'>
        <table class='table table-hover text-center table-bordered'>
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>$name</td>
                </tr>
                <tr>
                    <th>Course</th>
                    <td>$course</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>$mobile</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>$address</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>$message</td>
                </tr>
            </tbody>
        </table>
    </div>";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Mail is sent successfully")</script>';
    } else {
        echo '<script>alert("Sending mail is failed")</script>';
    }
}
?>