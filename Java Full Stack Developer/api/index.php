<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollments";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connection succeeded";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $sql = "INSERT INTO registrations (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Full Stack Developer Course</title>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
</head>
<body>
    <header>
        <div class="container card-header">
            <h1 style="align: left; color: #d91c5c; align:center;">Java <span style="color: #8e44ad;">Full</span> Stack Developer Course</h1>
           <!-- Admin Button -->
                <!-- <form id="login-form"> -->
                <button id="admin-btn" class="admin-button"><b>Admin</b></button>
               <!-- </form> -->
</div>
              

    </header>
    <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Admin Login</h2>
            <form id="login-form" action="admin.php" method="get">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        </div>
    <br><div class="main-container">
	<div class="flex-container Profile" style="background-color: white; padding:10px; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 400px; height: 520px; width: 300px; margin: auto; display: flex;">
	<div>
	<img src="sirimg.jpeg" alt="Image" style="width: 300px; height: 350px; border-radius: 10px;display: block;
  margin-left: auto; margin-right: auto;" class="img-thumbnail">
            <h3 style="text-align: center;"><b>Mr. Nitin Kale</b></h3>
			<h4 style="text-align: center;">Internship Department Head</h4>
			</div>
	</div>
<div class="flex-container" style="background-color: white; padding:20px; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 1000px; margin: auto; display: flex; align-items: center;">
        <div  class="info" style="flex: 1;">
        <div>    <h1 style="color: #d91c5c;">Java <span style="color: #8e44ad;">Full</span> Stack Developer</h1>
            <p style="color: black; width: 400px; alig: left;"><b>Develop Dynamic Web Applications with Java. Master Java programming, 
			Angular for responsive front-end web development, and Spring and Spring Boot for robust back-end 
			systems, culminating in a comprehensive skillset to build, integrate, and deploy cloud-ready web 
			applications.</b></p>

            <div style="margin-top: 20px;">
                <button class="download-btn"  style="cursor: pointer;">Download Brochure</button>
            </div>
            <p style="margin-top: 20px;"><a href="#" style="color: #333;">For enquiries call: 7219514324</a></p>
        </div>
        <div class="image-container" style="flex: 1; align: right">
            <img class="info-img img-thumbnail" src="img2.jpg" alt="Java Image">
        </div></div>
    </div></div>

	<div class="container">
        <div class="tabs">
            <div class="tab active" data-tab="description">Description</div>
            <div class="tab" data-tab="curriculum">Curriculum</div>
            
        </div>
        <div class="content">
            <div class="tab-content" id="description" style="display: block;">
                <h3>Best Java Training institute in Pune</h3>
                <h4>Best Java Course Details :-</h4>
                <p>Full stack java development and Java is the highest demand job in the Software Industry.</p>
                <p>Full-stack java developers develop both the front-end and the server-side of the application, deploy, debug and maintain their databases and servers.</p>
                <p>If you wish to be a full stack java developer one must be proficient in:</p>
                <ul>
                    <li>Basic Technology – C programming</li>
                    <li>Databases – SQL and No SQL</li>
                    <li>Front End Technology – HTML, CSS, Bootstrap, JavaScript</li>
                    <li>Server Side Programming – Java</li>
                    <li>Frameworks – Hibernate, Spring, Spring Boot, Angular</li>
                </ul>
            </div>
            <div class="tab-content" id="curriculum">
                <ul class="curriculum">
                    <li class="curriculum-item">
                        <div class="curriculum-title">C programming</div>
                        <ul class="sublist">
                            <li>Introduction to C</li>
                            <li>Data Types and Variables</li>
                            <li>Control Structures</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">SQL</div>
                        <ul class="sublist">
                            <li>Introduction to SQL</li>
                            <li>Database Design</li>
                            <li>Queries and Joins</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">NO-SQL</div>
                        <ul class="sublist">
                            <li>Introduction to NoSQL</li>
                            <li>Document Databases</li>
                            <li>Key-Value Stores</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Responsive Web Design</div>
                        <ul class="sublist">
                            <li>HTML5 and CSS3</li>
                            <li>Media Queries</li>
                            <li>Frameworks</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Core Java</div>
                        <ul class="sublist">
                            <li>Introduction to Java</li>
                            <li>OOP Concepts</li>
                            <li>Exception Handling</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Java Web App</div>
                        <ul class="sublist">
                            <li>Servlets</li>
                            <li>JSP</li>
                            <li>Spring MVC</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Hibernate</div>
                        <ul class="sublist">
                            <li>Introduction to Hibernate</li>
                            <li>Mappings</li>
                            <li>Criteria Queries</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Spring Framework</div>
                        <ul class="sublist">
                            <li>Introduction to Spring</li>
                            <li>Dependency Injection</li>
                            <li>Spring Boot</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Spring Boot and REST</div>
                        <ul class="sublist">
                            <li>RESTful Services</li>
                            <li>Spring Boot Features</li>
                            <li>API Development</li>
                        </ul>
                    </li>
                    <li class="curriculum-item">
                        <div class="curriculum-title">Angular</div>
                        <ul class="sublist">
                            <li>Introduction to Angular</li>
                            <li>Components and Modules</li>
                            <li>Routing</li>
                        </ul>
                    </li>
                </ul>
            </div>  
        </div>
    </div>
    <script src="script.js"></script>
    <section id="enroll" class="section">
        <div class="container">
            <h2>Enroll Now</h2>
            <p>Ready to start your journey to becoming a Java Full Stack Developer? Click the 
			button below to enroll in the course now!</p>
			
            <button id="enroll-btn">Enroll Now</button>
    <div id="enroll-form-container">
        <div id="enroll-form">
            <div class="image-container">
                <img src="rdmap.jfif" alt="Course Roadmap">
            </div>
            <div class="form-container">
                <h3 style="align:right">Enroll Now</h3>
                <form action="index.php" method="POST">
				
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" required>
                    <label for="phone">Phone: </label>
                    <input type="tel" id="phone" name="phone" required>
                    <button style="align:center;" type="submit">Submit</button>
                    <button  type="button" id="close-btn">Close</button>
					
                </form>
            </div>
        </div>
		</div>
    </section>

   
</body>
</html>
