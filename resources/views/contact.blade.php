<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GeDoc - Contact</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background-image: url('{{ asset('../img/docs.jpg')}}');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        </div>
                                        @if(isset($data))
                                        <h1 class="h4 text-gray-900 mb-4">Merci !</h1>
                                    <div class="row">
                                        Non: {{ $data->name }}
                                    </div>
                                    
                                    <div class="row">
                                        Télephone: {{ $data->phone }}
                                    </div>
                                    
                                    <div class="row">
                                        Email: {{ $data->email }}
                                    </div>
                                    
                                    <div class="row">
                                        Message: {{ $data->message }}
                                    </div>
                                    <div class="row">
                                       
                                    </div>
                                    @else
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenue</h1>
                                    <form action="/contactForm" method="post" class="user">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user"
                                                id="name" placeholder="Votre nom complet...">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Votre Addresse E-mail...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control form-control-user"
                                                id="phone" 
                                                placeholder="Votre Télephone...">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-user" placeholder="Votre message..."></textarea>
                                        </div>
                                        <button class="btn btn-primary text-uppercase  btn-block" type="submit">Envoyer</button>
                                        <!-- <a  class="btn btn-primary btn-user btn-block">
                                            Envoyer
                                        </a> -->
                                        
                                       
                                    </form>
                                    @endif
                                                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>