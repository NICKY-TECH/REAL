@extends('layouts.app')

@section('content')
                    <!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


    <!-- Navbar -->

    <!-- End Navbar -->
<div class="container mt-5">
  <form class="ms-md-auto pe-md-3 d-flex align-items-center form" method="get">
    <select class="form-select mr-5 form-child" name="category">
      <option selected>Search By</option>
      <option value="Seller">Seller</option>
      <option value="Price">Price</option>
      <option value="Rooms">Rooms</option>
      <option value="keyword">Keywords</option>
    </select>
    <div class="input-group">
      <span class="input-group-text text-body"></span>
      <input type="text" class="form-control form-child form-child-input" placeholder="Search">
    </div>
    <button class="btn btn-outline-primary btn-sm mb-0 me-3">Search</button>
  </form>
</div>

{{-- enter code here.... --}}
<p class="text-center mt-5 tag"> Your dream home awaits</p>
<div class="container-fluid card-container">
  <div class="row house-info">
    <div class="col house-info-col">
      <p>MIKE ODU</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eligendi corrupti, veniam delectus harum odio quaerat nobis vero ullam magni aliquid debitis quod culpa autem, dicta vitae eius fugit minus.
      Nisi magni suscipit officia cumque odio, dolores, harum provident atque nostrum asperiores dolor ea illum voluptatem. Reiciendis, expedita. Quos cupiditate iusto eaque doloremque voluptate, adipisci autem nisi!</p>
      <p>4 rooms</p>
      <p>2,000,000</p>
      <a class="font-weight-bold" href="#">VIEW</a>

    </div>
    <div class="col image-col">
      <img src="{{ asset('/images/lovely.jpg') }}" class="img-fluid h-100">
    </div>

  </div>
  <div class="row house-info">
    <div class="col house-info-col">
      <p>MIKE ODU</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eligendi corrupti, veniam delectus harum odio quaerat nobis vero ullam magni aliquid debitis quod culpa autem, dicta vitae eius fugit minus.
      Nisi magni suscipit officia cumque odio, dolores, harum provident atque nostrum asperiores dolor ea illum voluptatem. Reiciendis, expedita. Quos cupiditate iusto eaque doloremque voluptate, adipisci autem nisi!</p>
      <p>4 rooms</p>
      <p>2,000,000</p>
      <a class="font-weight-bold" href="#">VIEW</a>

    </div>
    <div class="col image-col">
      <img src="{{ asset('/images/lovely.jpg') }}" class="img-fluid h-100">
    </div>

  </div>
  <div class="row house-info">
    <div class="col house-info-col">
      <p>MIKE ODU</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eligendi corrupti, veniam delectus harum odio quaerat nobis vero ullam magni aliquid debitis quod culpa autem, dicta vitae eius fugit minus.
      Nisi magni suscipit officia cumque odio, dolores, harum provident atque nostrum asperiores dolor ea illum voluptatem. Reiciendis, expedita. Quos cupiditate iusto eaque doloremque voluptate, adipisci autem nisi!</p>
      <p>4 rooms</p>
      <p>2,000,000</p>
      <a class="font-weight-bold" href="#">VIEW</a>

    </div>
    <div class="col image-col">
      <img src="{{ asset('/images/lovely.jpg') }}" class="img-fluid">
    </div>

  </div>
</div>
  {{-- <div class="row house-info">
    <div class="col house-info-col">
  <p>Mr Mike Odu<p>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime officiis, illum praesentium quia quae, corporis quibusdam iusto modi facere animi corrupti minus dignissimos asperiores tenetur exercitationem nesciunt accusantium. Quaerat, veniam.
    ias et in id sed modi asperiores. Facere cum beatae iusto accusantium, ab cupiditate maxime architecto vel harum molestiae illo explicabo nostrum doloremque ipsum officia quasi libero voluptates rem.</p>
    <p>2,000,000</p>
    <p class="text-center">VIEW</p>
</div>
<div class="col image-col"><img src="{{ asset('/images/lovely.jpg') }}" class="img-fluid"></div>
  </div>
  <div class="row house-info">
    <div class="col house-info-col">
      <p>Mr Mike Odu<p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime officiis, illum praesentium quia quae, corporis quibusdam iusto modi facere animi corrupti minus dignissimos asperiores tenetur exercitationem nesciunt accusantium. Quaerat, veniam.
        ias et in id sed modi asperiores. Facere cum beatae iusto accusantium, ab cupiditate maxime architecto vel harum molestiae illo explicabo nostrum doloremque ipsum officia quasi libero voluptates rem.</p>
        <p>2,000,000</p>
        <p class="text-center">VIEW</p>
    </div>
    <div class="col image-col"><img src="{{ asset('/images/lovely.jpg') }}" class="img-fluid"></div>
    </div> --}}

    

    <div class="container-fluid py-4">

      <footer class="footer pt-3  text-center">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ?? <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">JIM REAL ESTATE</h5>
          <p>customize your dashboard.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
