<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $title ?></title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#050816;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.profile-card{

    width:850px;

    background:rgba(255,255,255,.05);

    border:2px solid #00ffff;

    border-radius:25px;

    overflow:hidden;

    box-shadow:0 0 40px rgba(0,255,255,.3);
}

.header{

    background:linear-gradient(
    135deg,
    #00ffff,
    #0066ff);

    text-align:center;

    padding:40px;
}

.robot-avatar{

    font-size:90px;
    margin-bottom:10px;
}

.header h1{

    color:white;
    margin-bottom:10px;
}

.header p{

    color:#eafcff;
}

.content{

    padding:35px;
}

.section-title{

    color:#00ffff;
    font-size:22px;
    margin-bottom:20px;
    border-bottom:1px solid #00ffff;
    padding-bottom:10px;
}

.info-grid{

    display:grid;

    grid-template-columns:
    repeat(2,1fr);

    gap:20px;
}

.info-box{

    background:#0c1225;

    padding:18px;

    border-radius:12px;

    border:1px solid #1e88e5;
}

.label{

    color:#00ffff;

    font-size:13px;

    text-transform:uppercase;

    margin-bottom:5px;
}

.value{

    color:white;

    font-size:18px;
}

.about{

    margin-top:30px;

    background:#0c1225;

    border:1px solid #1e88e5;

    border-radius:12px;

    padding:20px;
}

.about p{

    color:#e0e0e0;

    line-height:1.8;
}

.btn{

    display:inline-block;

    margin-top:25px;

    text-decoration:none;

    background:#00ffff;

    color:#000;

    padding:12px 25px;

    border-radius:30px;

    font-weight:bold;
}

.btn:hover{

    box-shadow:0 0 20px cyan;
}

.footer{
    text-align:center;
}

</style>

</head>
<body>

<div class="profile-card">

    <div class="header">

        <div class="robot-avatar">
            🤖
        </div>

        <h1><?= $name ?></h1>

        <p>My Student Profile</p>

    </div>

    <div class="content">

        <div class="section-title">
            Student Information
        </div>

        <div class="info-grid">

            <div class="info-box">
                <div class="label">Student ID</div>
                <div class="value"><?= $student_id ?></div>
            </div>

            <div class="info-box">
                <div class="label">Course</div>
                <div class="value"><?= $course ?></div>
            </div>

            <div class="info-box">
                <div class="label">Year Level</div>
                <div class="value"><?= $year ?></div>
            </div>

            <div class="info-box">
                <div class="label">Section</div>
                <div class="value"><?= $section ?></div>
            </div>

            <div class="info-box">
                <div class="label">Email Address</div>
                <div class="value"><?= $email ?></div>
            </div>

        </div>

        <div class="about">

            <div class="section-title">
                Profile Description
            </div>

            <p>
                <?= $description ?>
            </p>

        </div>

        <div class="footer">

            <a href="/LavaLust-dev-v4/public/student" class="btn">
                Return Home
            </a>

        </div>

    </div>

</div>

</body>
</html>