<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; }
        .card { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        nav a { margin-right: 15px; font-weight: bold; color: #d9534f; text-decoration: none; }
        .info p { margin: 8px 0; font-size: 16px; }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student'); ?>">Home</a> | 
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </nav>
        <hr>
        <h1>Student Information</h1>
        <div class="info">
            <p><strong>Student ID:</strong> <?= $student_id; ?></p>
            <p><strong>Name:</strong> <?= $name; ?></p>
            <p><strong>Course:</strong> <?= $course; ?></p>
            <p><strong>Year Level:</strong> <?= $year; ?></p>
            <p><strong>Section:</strong> <?= $section; ?></p>
            <p><strong>Email:</strong> <?= $email; ?></p>
            <p><strong>Skills:</strong> <?= $skills; ?></p>
            <p><strong>Hobby:</strong> <?= $hobby; ?></p>
        </div>
    </div>
</body>
</html>