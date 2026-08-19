<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; }
        .card { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        nav a { margin-right: 15px; font-weight: bold; color: #d9534f; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student'); ?>">Home</a> | 
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </nav>
        <hr>
        <h1><?= $title; ?></h1>
        <p><?= $message; ?></p>
    </div>
</body>
</html>