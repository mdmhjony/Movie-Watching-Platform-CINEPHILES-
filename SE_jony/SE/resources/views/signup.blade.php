<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("https://wallpapers.com/images/featured/9pvmdtvz4cb0xl37.jpg");
            background-repeat: no-repeat, repeat;
        }
    </style>
</head>

<body>




    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mt-md-4 pb-2">

                                <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                                <p class="text-white-50 mb-5">Please enter your information to create an account!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeFullName" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeFullName">Name</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typeConfirmPassword" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeConfirmPassword">Confirm Password</label>
                                </div>

                                <button onclick="signup()" id="signup" class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="#!" class="text-white-50 fw-bold">Log
                                        In</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name ="csrf-token"]').attr("content"),
            },
        });


        function signup() {

            var typeFullName = document.getElementById("typeFullName").value;
            var typeEmailX = document.getElementById("typeEmailX").value;
            var typePasswordX = document.getElementById("typePasswordX").value;
            var typeConfirmPassword = document.getElementById("typeConfirmPassword").value;

            console.log("in");

            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    typeFullName: typeFullName,
                    typeEmailX: typeEmailX,
                    typePasswordX: typePasswordX,
                    typeConfirmPassword: typeConfirmPassword

                },
                url: "/signupdata",
                success: function(data) {
                    console.log(data);

                    window.location.href = "{{'/'}}";

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>

</body>

</html>