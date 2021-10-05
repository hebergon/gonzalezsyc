<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-storage.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyDMs94J6ChTcW8MFtl6dYy7Wr-1cz5jWuM",
            authDomain: "website-8e65a.firebaseapp.com",
            projectId: "website-8e65a",
            storageBucket: "website-8e65a.appspot.com",
            messagingSenderId: "951419859509",
            appId: "1:951419859509:web:2b0da84796f65f0cd7777c",
            measurementId: "G-2BNFDH2K4P"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const db = firebase.firestore();

        firebase.analytics();

    </script>

</head>
<body id="myPage" data-spy="scroll" data-offset="60">
    

    <!-- start #header -->
    <header id="header" >
        <br>
        <div class="container">
            <div class="row center">
                
                <div class="col-sm-6 col-12">
                
                    <a href="index.php"><img id="logo" src="assets/logo.jpg" style="width: 150px;"></a>
                    <br>
                </div>
                <div class="col-sm-6 col-12 text-right">
                    <h1 class="azul font-roboto" id="somos" style="letter-spacing: 2px;"><strong>González<br> Servicios y Construcciones</strong></h1>
                </div>
            </div>
        </div>
        <br>
    </header>
    <!-- !start #header -->
    
    <!-- start #main -->
    <main id="main-site">