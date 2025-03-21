<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Contact Us - StudentMS</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .container {
            margin-top: 100px;
        }
        h1 {
            text-align: center;
        }
        .contact-section {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 50px;
        }
        .contact-card {
            background-color: #111;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
        }
        .contact-card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #28a745;
        }
        h5 {
            margin-top: 15px;
        }
        p {
            margin: 5px 0;
            font-size: 0.95rem;
            color: #b5b5b5;
        }
        .contact-info {
            margin-top: 10px;
        }
        .contact-info i {
            margin-right: 8px;
            color: #4caf50;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>

    <a href="home.php" class="btn btn-success btn-back">Back to Home</a>

    <div class="container">
        <h1>Contact <span class="text-success">Us</span></h1>
        <div class="contact-section">
            <!-- Maxine's Contact Card -->
            <div class="contact-card">
                <img src="img/pfp1.jpeg" alt="Maxine">
                <h5>Maxine</h5>
                <p>Project Manager</p>
                
            </div>
            <!-- Friend's Contact Card -->
            <div class="contact-card">
                <img src="img/pfp3.jpeg" alt="Friend">
                <h5>Jenfiel</h5>
                <p>Front-End Developer</p>

            </div>
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
