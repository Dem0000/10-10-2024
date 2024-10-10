

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $patient_name = htmlspecialchars($_POST['patient_name']);
    $doctor_name = htmlspecialchars($_POST['doctor_name']);
    $department_name = htmlspecialchars($_POST['department_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    $appointment_date = htmlspecialchars($_POST['appointment_date']);
} else {
  
    header("Location: your_form_page.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
  <body>
    <?php include 'header.php' ?>
    <div style="text-align: center; height: 50vh; display: flex; flex-direction: column; justify-content: center;">
        <h1>Appointment Confirmation</h1>
        <p><strong>Patient Name:</strong> <?php echo $patient_name; ?></p>
        <p><strong>Doctor's Name:</strong> <?php echo $doctor_name; ?></p>
        <p><strong>Department's Name:</strong> <?php echo $department_name; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
        <p><strong>Symptoms:</strong> <?php echo $symptoms; ?></p>
        <p><strong>Appointment Date:</strong> <?php echo $appointment_date; ?></p>
    </div>
    <div>
        <?php include 'info.php'; ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
