<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Information</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    radial-gradient(circle at top,#00ffff33,#050816 50%),
    #050816;
    overflow:hidden;
}

body::before{
    content:'';
    position:absolute;
    width:100%;
    height:100%;
    background-image:
    linear-gradient(rgba(0,255,255,.08) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0,255,255,.08) 1px, transparent 1px);
    background-size:40px 40px;
}

.container{
    position:relative;
    z-index:2;
}

.card{
    width:650px;
    text-align:center;
    padding:50px;
    border-radius:25px;
    background:rgba(255,255,255,.05);
    border:2px solid #00ffff;
    backdrop-filter:blur(10px);
    box-shadow:0 0 40px rgba(0,255,255,.4);
}

.robot{
    font-size:120px;
    margin-bottom:20px;
    animation:float 3s infinite ease-in-out;
}

@keyframes float{
    50%{
        transform:translateY(-15px);
    }
}

h1{
    color:#00ffff;
    margin-bottom:15px;
    font-size:40px;
    text-transform:uppercase;
    letter-spacing:2px;
}

.subtitle{
    color:white;
    font-size:18px;
    margin-bottom:25px;
}

.description{
    color:#b0bec5;
    line-height:1.8;
    margin-bottom:35px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    background:#00ffff;
    color:#000;
    padding:15px 35px;
    border-radius:50px;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 25px cyan;
}

</style>

</head>
<body>

<div class="container">

    <div class="card">

        <div class="robot">🤖</div>

        <h1>Student Information</h1>

        <p class="subtitle">
            Future Technology Student System
        </p>

        <p class="description">
            Welcome to the Robotics Student Information System.
            Access your profile, academic details, and student
            information through this futuristic portal.
        </p>

        <a href="profile" class="btn">
            ACCESS PROFILE
        </a>

    </div>

</div>

</body>
</html>