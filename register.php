<?php
    include('includes/header.php');
    include('includes/nav.php');
?>

<form class="form-signin" action="register.php" method="post">
    <label><b>Username<span class="warning-text">
                <?php 
                if(isset($validation['username'])) { 
                    echo $validation['username'];
                }
                ?></span></label><br />
    <input class="form-control" name="username" type="text" class="inputvalues" placeholder="Type your username"
        required />
    <label><b>Email
            <?php 
                if(isset($validation['email'])) { 
                    echo $validation['email'];
                }
                ?></span></label><br />
    <input name="email" type="text" class="form-control" placeholder="Type your Email" required />
    <label><b>Password
            <?php 
                if(isset($validation['password'])) { 
                    echo $validation['password'];
                }
                ?></span></label>
    <input class="form-control" name="password" type="password" class="inputvalues" placeholder="Type your password"
        required />
    <label><b>Conform Password
            <?php 
                if(isset($validation['cpassword'])) { 
                    echo $validation['cpassword'];
                }
                ?></span></label>
    <input class="form-control" name="cpassword" type="password" class="inputvalues" placeholder="Conform password"
        required />
    <label><b>Address
            <?php 
                if(isset($validation['address'])) { 
                    echo $validation['address'];
                }
                ?></span></label>
    <input class="form-control" name="address" type="text" class="inputvalues" placeholder="Address" required />

    <input name="submit_btn" class="btn btn-success mb-1" type="submit" id="signup_btn" value="Register" />
    <p>Already have an Account. Login <a href="login.php" class="text-success"> Here </a> </p>
</form>



<!-- =========== Registration Code Here ==========  -->
<?php
if(isset($_POST['submit_btn'])){
    // assigning variables(left) to take values from text field of forms via POST method (right)
    $username = $_POST['username'];
    $email = $_POST['email'];
    $ency_password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    
    // query to check if the entered email exists or not
    $userexist = "SELECT * FROM tbl_user WHERE email = '$email'";
    $result_userexist = $conn->query($userexist);
    //condition if user exists refresh to the location specified with message user=exists
    //else register
    if($data = $result_userexist->fetch_array()) {
        header('location:register.php?user=exists');
    } elseif($ency_password != $cpassword) {
        header('location:register.php?pwd=wrong');
    } else {
        // query to insert into table
        $register = "INSERT INTO tbl_user (username, email, password, user_type) VALUES ('$username', '$email', '$ency_password', 'Normal')"; 
        $conn->query($register);
        header('location:register.php?insert=insert'); 
    }
}
// if user is registered the GET value from header('location..) passes through URL
// below code used to specify the user that he has been registered successfully...
if(isset($_GET['insert'])) {
    ?>
<script>
    alert('User Successfully Registered!!!'); //this alerts webpage with HTML5 alertbox
</script>
<?php
}
// below code alerts user if the user already exists via GET method from URL
if(isset($_GET['user'])) {
    ?>
<script>
    alert('User with same email address already exists!!!'); //this alerts webpage with HTML5 alertbox
</script>
<?php
}

if(isset($_GET['pwd'])) {
    ?>
<script>
    alert('Password didnt match'); //this alerts webpage with HTML5 alertbox
</script>
<?php
}
?>
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

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

