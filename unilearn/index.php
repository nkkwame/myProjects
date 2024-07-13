<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniLearn</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>UniLearn</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Welcome to UniLearn</h2>
                <p>Your one-stop solution for university-level IT and Computer Science courses.</p>
            </div>
        </section>

        <section class="courses">
            <div class="container">
                <h2>Featured Courses</h2>
                <div class="course-list">
                    <div class="course-item">
                        <h3>Introduction to Programming</h3>
                        <p>Learn the basics of programming with this introductory course.</p>
                        <a href="course.php?id=1" class="btn">Learn More</a>
                    </div>
                    <div class="course-item">
                        <h3>Web Development</h3>
                        <p>Build modern, responsive websites using HTML, CSS, and JavaScript.</p>
                        <a href="course.php?id=2" class="btn">Learn More</a>
                    </div>
                    <div class="course-item">
                        <h3>Graphic Design</h3>
                        <p>Master the fundamentals of graphic design with hands-on projects.</p>
                        <a href="course.php?id=3" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 UniLearn. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
