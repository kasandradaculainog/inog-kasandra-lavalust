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
    background:
    radial-gradient(circle at top,#00ffff22,#050816 60%),
    #050816;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.profile-card{
    width:900px;
    background:rgba(255,255,255,.05);
    border:2px solid #00ffff;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 0 40px rgba(0,255,255,.4);
}

.header{
    background:linear-gradient(135deg,#00ffff,#0044ff);
    text-align:center;
    padding:40px;
}

.robot-avatar{
    font-size:100px;
    margin-bottom:10px;
}

.header h1{
    color:white;
    margin-bottom:10px;
}

.header p{
    color:#f5f5f5;
}

.content{
    padding:35px;
}

.section-title{
    color:#00ffff;
    font-size:24px;
    margin-bottom:20px;
    border-bottom:2px solid #00ffff;
    padding-bottom:10px;
}

.info-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.info-box{
    background:#0d1326;
    border:1px solid #00ffff;
    border-radius:15px;
    padding:18px;
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
    background:#0d1326;
    border:1px solid #00ffff;
    border-radius:15px;
    padding:20px;
}

.about p{
    color:#e0e0e0;
    line-height:1.8;
}

.footer{
    text-align:center;
    margin-top:30px;
}

.btn{
    text-decoration:none;
    background:#00ffff;
    color:black;
    padding:12px 30px;
    border-radius:30px;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    box-shadow:0 0 25px cyan;
}

@media(max-width:768px){

    .info-grid{
        grid-template-columns:1fr;
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

        <h1>Kasandra D. Inog</h1>

        <p>Student Profile </p>

    </div>

    <div class="content">

        <div class="section-title">
            Student Information
        </div>

        <div class="info-grid">

            <div class="info-box">
                <div class="label">Student ID</div>
                <div class="value">MCC2024-01533</div>
            </div>

            <div class="info-box">
                <div class="label">Full Name</div>
                <div class="value">Kasandra D. Inog</div>
            </div>

            <div class="info-box">
                <div class="label">Course</div>
                <div class="value">BS Information Technology</div>
            </div>

            <div class="info-box">
                <div class="label">Year Level</div>
                <div class="value">3rd Year</div>
            </div>

            <div class="info-box">
                <div class="label">Section</div>
                <div class="value">3F6</div>
            </div>

            <div class="info-box">
                <div class="label">Email Address</div>
                <div class="value">kasandra.inog@gmail.com</div>
            </div>

        </div>

        <div class="about">

            <div class="section-title">
                Profile Description
            </div>

            <p>
                I am currently a 3rd Year BS Information Technology
                student at Mindoro State University Calapan Campus.
                I am passionate about technology, programming,
                robotics, and innovative digital solutions that
                help improve society through modern computing.
            </p>

        </div>

        <div class="footer">

            <a href="../student" class="btn">
                RETURN HOME
            </a>

        </div>

    </div>

</div>

</body>
</html>