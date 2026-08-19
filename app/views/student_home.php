<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Portal</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    background:#050816;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    text-align:center;
    color:white;
}

.robot{
    font-size:120px;
    animation:float 2s ease-in-out infinite;
}

@keyframes float{
    50%{
        transform:translateY(-15px);
    }
}

.card{
    background:rgba(255,255,255,.05);
    border:1px solid #00ffff;
    border-radius:20px;
    padding:40px;
    width:500px;
    box-shadow:0 0 30px rgba(0,255,255,.4);
}

h1{
    color:#00ffff;
    margin-bottom:15px;
}

p{
    color:#cfd8dc;
    margin-bottom:25px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    background:#00ffff;
    color:#000;
    padding:12px 25px;
    border-radius:30px;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
    box-shadow:0 0 20px cyan;
}
</style>

</head>
<body>

<div class="container">

    <div class="robot">🤖</div>

    <div class="card">

        <h1>Student Information</h1>

        <p>
            Welcome to the futuristic student information system.
        </p>

        <a href="/LavaLust-dev-v4/public/student/profile" class="btn">
            Access Profile
        </a>

    </div>

</div>

</body>
</html>