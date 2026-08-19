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
    min-height:100vh;
    background:
    radial-gradient(circle at top,#00ffff22,#050816 40%),
    #050816;
    overflow-x:hidden;
    padding:40px;
}

/* Grid Background */
body::before{
    content:'';
    position:fixed;
    inset:0;
    background-image:
    linear-gradient(rgba(0,255,255,.06) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0,255,255,.06) 1px, transparent 1px);
    background-size:40px 40px;
    z-index:-1;
}

.profile-card{
    max-width:1100px;
    margin:auto;
    background:rgba(255,255,255,.03);
    border:2px solid #00ffff;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 0 40px rgba(0,255,255,.4);
}

/* HEADER */
.header{
    text-align:center;
    padding:40px;
    background:linear-gradient(135deg,#00d9ff,#0044ff);
    position:relative;
}

.robot-avatar{
    font-size:100px;
    margin-bottom:10px;
    animation:float 3s infinite ease-in-out;
}

@keyframes float{
    50%{
        transform:translateY(-10px);
    }
}

.header h1{
    color:white;
    font-size:55px;
    margin-bottom:10px;
}

.header p{
    color:#f5f5f5;
    font-size:24px;
    letter-spacing:2px;
}

/* CONTENT */
.content{
    padding:40px;
}

.section-title{
    color:#00ffff;
    font-size:32px;
    margin-bottom:25px;
    border-bottom:2px solid #00ffff;
    padding-bottom:10px;
}

/* GRID */
.info-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
}

.info-box{
    background:#0d1326;
    border:1px solid #00ffff;
    border-radius:18px;
    padding:25px;
    transition:.3s;
}

.info-box:hover{
    transform:translateY(-5px);
    box-shadow:0 0 20px rgba(0,255,255,.5);
}

.label{
    color:#00ffff;
    font-size:14px;
    text-transform:uppercase;
    margin-bottom:10px;
}

.value{
    color:white;
    font-size:30px;
}

/* DESCRIPTION */
.about{
    margin-top:35px;
    background:#0d1326;
    border:1px solid #00ffff;
    border-radius:18px;
    padding:25px;
}

.about p{
    color:#e0e0e0;
    line-height:1.8;
    font-size:18px;
}

/* BUTTON */
.footer{
    text-align:center;
    margin-top:40px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    background:#00ffff;
    color:black;
    padding:15px 40px;
    border-radius:40px;
    font-weight:bold;
    font-size:18px;
    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 30px cyan;
}

/* MOBILE */
@media(max-width:768px){

    .info-grid{
        grid-template-columns:1fr;
    }

    .header h1{
        font-size:35px;
    }

    .value{
        font-size:22px;
    }

    .profile-card{
        width:100%;
    }
}

</style>
</head>
<body>

<div class="profile-card">

    <div class="header">

        <div class="robot-avatar">🤖</div>

        <h1><?= $name ?></h1>

        <p>STUDENT PROFILE</p>

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
                <div class="label">Full Name</div>
                <div class="value"><?= $name ?></div>
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

            <a href="<?= site_url('student') ?>" class="btn">
                RETURN HOME
            </a>

        </div>

    </div>

</div>

</body>
</html>