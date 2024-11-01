<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require 'base/dbconn.php';
    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["userpassword"];
    $confirmpassword = $_POST["usercpassword"];
    $city = $_POST["usercity"];
    $contact = $_POST["usercontact"];
  
    $sqlemail = "SELECT * FROM `boy` WHERE Email='$email'";

    $result = mysqli_query($connection, $sqlemail);

    $row = mysqli_num_rows($result); //1

    if ($row > 0) {
        echo "useremail already exist";
    } else {

        if ($password == $confirmpassword) {

            $hashpasss= password_hash($password,PASSWORD_DEFAULT);

            $sqlinsert = "INSERT INTO `boy` (`name`, `email`, `password`, `contact`, `city`) VALUES ('$name', '$email', '$hashpasss', '$contact', '$city')";

            $resultins = mysqli_query($connection, $sqlinsert);
            if ($resultins) {
                echo "inserted";
            }
        } else {
            echo "password doesnot match";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo">student  Management  <span>System</span></a>
            <a href="./signup.php" class="login">Sign up</a>
            <a href="student.php" class="login">select courses</a>
            <a href="comment.php" class="login">Courses for student registration</a>
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Best School in karachi According to courses</h2>
            <span class="home-subtitle">your infrastructure of school just looking like a wow</span>
        </div>
    </section>
    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titletext">
                Here we have all Trending topics look and enjoy
            </h2>
            <p class="title-text">Many of today’s high-demand jobs were created in the last decade, according to the International Society for Technology in Education (ISTE). As advances in technology drive globalization and digital transformation, teachers can help students acquire the necessary skills to succeed in the careers of the future.
How important is technology in education? The COVID-19 pandemic is quickly demonstrating why online education should be a vital part of teaching and learning. By integrating technology into existing curricula, as opposed to using it solely as a crisis-management tool, teachers can harness online learning as a powerful educational tool.
                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quaerat voluptatum deserunt accusantium, laborum et sunt deleniti voluptatibus alias repudiandae quos ratione amet iste quibusdam blanditiis exercitationem eum quia. Velit.
                <a href="#" class="btn2">Read more</a>
            </p>
            

        </div>
        <div class="imgBx">
            <img src="./images/19.jfif" alt="" class="fitbg">
        </div>
    </section>

    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter="all">All</span>
        <span class="filter-item" data-filter="tech">Technology</span>
        <span class="filter-item" data-filter="food">Courses</span>
        <span class="filter-item" data-filter="news">Artifical or data science</span>
    </div>
    
    <div class="post container">
        <!-- Post 1 -->
        <div class="post-box tech">
            <img src="images/11.jpg" alt="" class="post-img">
            <h2 class="category">Technology</h2>
            <a href="#" class="post-title">management system offering so many different courses data science</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/11.jpg" alt="" class="profile-img">
                <span class="profile-name">courses Technology</span>
            </div>
        </div>
        <!-- Post 2 -->
        <div class="post-box tech">
            <img src="images/12.jfif" alt="" class="post-img">
            <h2 class="category">Technology</h2>
            <a href="#" class="post-title">Best courses on my management system for students</a>
            <span class="post-date">01 October 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/12.jfif" alt="" class="profile-img">
                <span class="profile-name">schedule for courses</span>
            </div>
        </div>
        <!-- Post 3 -->
        <div class="post-box food">
            <img src="images/13.jpg" alt="" class="post-img">
            <h2 class="category">courses</h2>
            <a href="#" class="post-title">for data science or artifical intelligence courses</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/13.jpg" alt="" class="profile-img">
                <span class="profile-name">Artifical intelligence courses</span>
            </div>
        </div>
        <!-- Post 4 -->
        <div class="post-box news">
            <img src="images/14.jfif" alt="" class="post-img">
            <h2 class="category">Technology</h2>
            <a href="#" class="post-title">How to join our best course on Aptech</a>
            <span class="post-date">12 September 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/14.jfif" alt="" class="profile-img">
                <span class="profile-name">Video editing courses </span>
            </div>
        </div>
        <!-- Post 5 -->
        <div class="post-box tech">
            <img src="images/15.jpg" alt="" class="post-img">
            <h2 class="category">courses</h2>
            <a href="#" class="post-title">How to join courses our physical courses</a>
            <span class="post-date">14 Augest 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/15.jpg" alt="" class="profile-img">
                <span class="profile-name">physical courses</span>
            </div>
        </div>
        <!-- Post 6 -->
        <div class="post-box news">
            <img src="images/16.jfif" alt="" class="post-img">
            <h2 class="category">Area</h2>
            <a href="#" class="post-title">How to join our best courses on Ned university</a>
            <span class="post-date">12 May 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/16.jfif" alt="" class="profile-img">
                <span class="profile-name">Ned university courses</span>
            </div>
        </div>
        <!-- Post 7 -->
        <div class="post-box tech">
            <img src="images/17.jfif" alt="" class="post-img">
            <h2 class="category">Technology</h2>
            <a href="#" class="post-title">Top our courses for students</a>
            <span class="post-date">12 December 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/17.jfif" alt="" class="profile-img">
                <span class="profile-name">Free courses for students</span>
            </div>
        </div>
        <!-- Post 8 -->
        <div class="post-box news">
            <img src="images/18.jfif" alt="" class="post-img">
            <h2 class="category">News about course</h2>
            <a href="#" class="post-title">How to create the best UI with Figma</a>
            <span class="post-date">12 October 2023</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/18.jfif" alt="" class="profile-img">
                <span class="profile-name">university News</span>
            </div>
        </div>
        <!-- Post 9 -->
        <div class="post-box food">
            <img src="images/19.jfif" alt="" class="post-img">
            <h2 class="category">Artifical intelligence</h2>
            <a href="#" class="post-title">students for Artifical intelligence and data science</a>
            <span class="post-date">24 April 2012</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            <div class="profile">
                <img src="images/19.jfif" alt="" class="profile-img">
                <span class="profile-name">students</span>
            </div>
        </div>
    </div>


<div class="container">
    <h1>Add new students According to courses</h1>
</div>

<div class="owl-carousel owl-theme">
<div class="item"><a href="comment.php"><img src="images/20.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/21.jpg" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/22.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/27.jpg" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"></a><img src="images/28.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/29.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/30.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/31.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/32.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/33.png" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/34.png" alt="" style="height: 200px; width: 200px;"></a></div>
    <div class="item"><a href="comment.php"><img src="images/35.jfif" alt="" style="height: 200px; width: 200px;"></a></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

</script>






    








    <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus quisquam minus quo illo numquam vel incidunt pariatur hic commodi expedita tempora praesentium at iure fugiat ea, quam laborum aperiam veritatis.</p>
                <ul class="sci">
                    <li><a href="https://github.com/sajjidkhalid"><i class="bx bxl-github"></i></a></li>
                    <li><a href="https://www.facebook.com/msajid.jhedu.3"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                    <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bxs-map'></i></span>
                        <span>Gulshan e iqbal <br> karachi <br> pakistan</span>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="mailto:codemyhobby9@gmail.com">ITschoolcollege@gmail.com</a></p>
                    </li>
                    <li>
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="comment.php">ADD A Course for student according to student id</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    

















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>