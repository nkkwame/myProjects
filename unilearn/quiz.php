<?php
include 'database.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$course_id = $_GET['course_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process quiz answers and store results
    // This is a simplified example, in reality you would have more complex logic
    $score = 0;
    foreach ($_POST['answers'] as $question_id => $answer) {
        // Validate answers and calculate score
    }
    echo "Your score is: $score";
}

$sql = "SELECT * FROM quizzes WHERE course_id='$course_id'";
$result = $conn->query($sql);
$quiz = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
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
        <div class="container">
            <h2><?php echo $quiz['title']; ?></h2>
            <form method="post" action="quiz.php?course_id=<?php echo $course_id; ?>">
                <!-- Render quiz questions here -->
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 UniLearn. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
