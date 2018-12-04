<?php
    include('includes/header.php');
    include('includes/nav.php');
?>
<?php// echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>
<form class="form-signin" action="admin.php" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

    <input class="btn btn-success mb-1" name="login" type="submit" id="login_btn" value="Login" /><br>
    <p>Dont have an account. Register <a href="register.php" class="text-success"> Here </a> </p>
</form>

<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query="SELECT * FROM tbl_user WHERE username='$username' AND password='$password' ";

        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0)
        {
            $_SESSION['username']= $username;
            echo '<script type="text/javascript"> alert("valid ") </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Invalid ") </script>';
        }
        
        header('location:admin.php');
    }
?>


<?php
    include('includes/footer.php')
?>

<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="assets/js/particles.min.js"></script>

<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    
</script>