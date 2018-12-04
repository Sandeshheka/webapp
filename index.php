<?php
    include('includes/header.php');
    include('includes/nav.php');
?>
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Tutorials View</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque velit, id dolor porro amet aspernatur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, dolores?</p>
        
      </main>
      <table align="center" class="table table-bordered">
        <tr>
            <th>Id </th>
            <th>Name</th>
            <th>Cost</th>
            <th>Teacher</th>
        </tr>
<?php       
  
  $sql = "SELECT * FROM tbl_tutorials";
 
       $result = mysqli_query($conn, $sql);
      
       if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          ?>
            
              <tr>
                  <td scope="col"> <?php  echo $row["id"]?> </td>
                  <td><?php  echo $row["name"]?></td>
                  <td><?php  echo $row["cost"]?></td>
                  <td><?php  echo $row["teacher"]?></td>
                  
                   
              </tr>
             
          <?php 
  }
      }
      else{
        print "No Data Found ";
      }
      ?>
  </table>
  
  

<?php
    include('includes/footer.php')
?>
 </table>
    </body>
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
    </html>
