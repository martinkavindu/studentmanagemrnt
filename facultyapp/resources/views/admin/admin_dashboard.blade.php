<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>student management system</title>

    <style>
        body{
   width: 100%;
    height: 100%;
    background-image: url({{asset('upload/dash.jpg')}}) ;
 
        }
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}
.navbar-brand h3{
    display: flex;
    align-items: center;
    color: orange
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
.swal-popup .swal-small {
  width: 200px !important;
  font-size: 14px !important; 
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}



        </style>
</head>
<body>

  @include('sweetalert::alert')

<div class='container'>
    <div class="row">
        <div class='col-md-11'>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><h3>Student Management App</h3></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
            </div>
          </nav>
        </div>

    </div>

    <div class='row'>
    <div class="col-md-2">
        <div class="sidebar">
        
            <a href="{{route('all.teachers')}}">Teachers</a>
            <a href="{{route('all.students')}}">Students</a>
            <a href="{{route('all.courses')}}">Courses</a>
            <a href="{{route('all.batches')}}">Batches</a>
            <a href="#">Enrollment</a>
            <a href="#">Payment</a>
          </div>

    </div>

    <div class="col-md-9">


@yield('content')

  
    </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if (Session::has('message'))
  <script>
    toastr.options = {
      'progressBar': true,
      'closeButton': true,
      'positionClass': 'toast-top-right', 
      'showDuration': '300',
      'hideDuration': '1000',
      'timeOut': '5000',
      'extendedTimeOut': '1000',
      'showEasing': 'swing',
      'hideEasing': 'linear',
      'showMethod': 'fadeIn',
      'hideMethod': 'fadeOut',
      'onShown': function () {
       
        $('.toast').css('background-color', '#28a745'); 
        $('.toast').css('color', '#fff'); 
      }
    };
    toastr.success("{{ Session::get('message') }}", 'Success!', { timeOut: 1000 });
  </script>
@endif


<script>

function confirmation(ev) {
  ev.preventDefault();
  var urlToRedirect = ev.currentTarget.getAttribute('href');
  console.log(urlToRedirect);

  swal({
    title: 'Are you sure to delete',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
    customClass: {
      popup: 'swal-small', 
    },
  })

  .then((willCancel) => {
    if (willCancel) {
      window.location.href = urlToRedirect;
    }
  });
}

  </script>
</body>
</html>