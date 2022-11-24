<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard | IT Tomorrow</title>
    <link rel="stylesheet" href="dashboard-admin.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="header">
        <a href="home-admin.php"><img src="logo-ittomorrow.png" style="width: 100px; height: 100px;"></a>
        <div class="navBar">
            <h3><a href="home-admin.php" style="color: aliceblue;">Home</a></h3>
            <h3><a href="login-admin.php" style="color: aliceblue;">Log out</a></h3>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <!-- Page content -->
    <div class="main">
        <div class="container-1">
            <h3>Dashboard Kompetisi</h3>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Kategori Kompetisi</th>
                        <th>Peserta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="cot.html">Coding Tomorrow</a></td>
                        <td>6000</td>
                    </tr>
                    <tr class="active-row">
                        <td><a href="uit.html">UI Tomorrow</a></td>
                        <td>5150</td>
                    </tr>
                    <tr>
                        <td><a href="pst.html">Poster Tomorrow</a></td>
                        <td>6000</td>
                    </tr>
                    <!-- and so on... -->
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="dashboard-coding">
            <h3>Coding Tomorrow</h3>
            <table class="table-coding">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Peserta</th>
                        <th>NIM</th>
                        <th>Institusi Peserta</th>
                        <th>Email Peserta</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="detail-peserta.php"><button>Detail</button></a></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dashboard-ui">
            <h3>UI Tomorrow</h3>
            <table class="table-ui">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Peserta</th>
                        <th>NIM</th>
                        <th>Institusi Peserta</th>
                        <th>Email Peserta</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="detail-peserta.html"><button>Detail</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dashboard-poster">
            <h3>Poster Tomorrow</h3>
            <table class="table-poster">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Peserta</th>
                        <th>NIM</th>
                        <th>Institusi Peserta</th>
                        <th>Email Peserta</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Andhika Rafi Lazuardi</td>
                        <td>G6401211139</td>
                        <td>Institut Pertanian Bogor</td>
                        <td>andhikarafilazuardi@gmail.com</td>
                        <td><a href="detail-peserta.html"><button>Detail</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>© Copyright <strong>IT Tomorrow 2022</strong> (Projek Basis Data)</p>
    </div>
</body>

</html>