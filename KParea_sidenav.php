<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 30px;
    right: 10px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="KParea.php">Laporan D.C.A.R</a>
  <a href="KParea_DAARreview.php">Laporan D.A.A.R</a>
  <a href="KParea_PADPK.php">P.A.D.P.K</a>
  <a href="PEarea_Activity.php">My Activity Report</a>
  <a href="Kparea_TargetPenagihan.php">Collection Plan</a>
  <a href="KParea_PM.php">Monitoring Penagihan Mobile</a>
  <br></br>
  <a href="#">Help</a>
</div>

<div id="main" style="background: rgba(7,207,248,1.00)">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "3000px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
</body>
</html> 