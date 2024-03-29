<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('theme.header_dashboard_admin')
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>
        </div>

<div class="card-body">
    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

    <table class="table table-borderless datatable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Customer</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><a href="#">#2457</a></th>
          <td>Brandon Jacob</td>
          <td><a href="#" class="text-primary">At praesentium minu</a></td>
          <td>$64</td>
          <td><span class="badge bg-success">Approved</span></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2147</a></th>
          <td>Bridie Kessler</td>
          <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
          <td>$47</td>
          <td><span class="badge bg-warning">Pending</span></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2049</a></th>
          <td>Ashleigh Langosh</td>
          <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
          <td>$147</td>
          <td><span class="badge bg-success">Approved</span></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2644</a></th>
          <td>Angus Grady</td>
          <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
          <td>$67</td>
          <td><span class="badge bg-danger">Rejected</span></td>
        </tr>
        <tr>
          <th scope="row"><a href="#">#2644</a></th>
          <td>Raheem Lehner</td>
          <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
          <td>$165</td>
          <td><span class="badge bg-success">Approved</span></td>
        </tr>
      </tbody>
    </table>

  </div>

</div>
</div><!-- End Recent Sales -->
<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
