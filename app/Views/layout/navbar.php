 @auth

 <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
     <div class="container">
         <a class="navbar-brand " href="#"><img src="https://i.ibb.co/Z2c6KpC/Whats-App-Image-2021-12-23-at-11-49-53-removebg-preview-2.png" alt="Logo" height="60px" width="90px" class="img-fluid" /></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav mx-auto">
                 <li class="nav-item">
                     <a class="nav-link" href="pages/index">Home</a>
                 </li>
                 <!-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Product
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <li><a class="dropdown-item" href="{{ url('/product')}}">Product Items</a></li>
                         <li><a class="dropdown-item" href="{{ url('/checkout/'.auth()->user()->id) }}">Product Chart</a></li>
                         <li><a class="dropdown-item" href="{{ url('/order/'.auth()->user()->id) }}">Product Order</a></li>
                     </ul>
                 </li> -->
 <!-- <li class="nav-item">
                     <a class="nav-link" href="/pages/gallery">Gallery</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/pages/aboutus">About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="'/pages/contactus'">Contact Us</a>
                 </li>
             </ul>

             <ul class="navbar-nav ms-auto">
                 <div class="d-flex">
                     <h5><a href="{{ url('/checkout/'.auth()->user()->id) }}"><i class="fas fa-shopping-cart text-light m-2"></i></a></h5>
                     <h5><a href="{{ url('/riwayat/'.auth()->user()->id) }}"><i class="fas fa-bell text-light m-2"></i></i></a></h5>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Selamat datang, {{ auth()->user()->nama_lengkap }}
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="{{ url('/home')}}"><i class="fas fa-home"></i> Home</a></li>
                             <li>
                                 <hr class="dropdown-divider">
                             </li>
                             <li>
                                 <form action="/logout" method="post">
                                     @csrf
                                     <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                                 </form>
                             </li>
                         </ul>
                     </li>
                 </div>
             </ul>
         </div>
     </div>
 </nav> --> -->
 @else
 <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
     <div class="container">
         <a class="navbar-brand" href="#"><img src="https://i.ibb.co/Z2c6KpC/Whats-App-Image-2021-12-23-at-11-49-53-removebg-preview-2.png" alt="Logo" height="60px" width="90px" class="img-fluid" /></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav mx-auto">
                 <li class="nav-item">
                     <a class="nav-link" href="/pages/index">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/pages/product">Product</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/pages/gallery">Gallery</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/pages/aboutus">About Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/pages/contactus">Contact Us</a>
                 </li>
             </ul>

             <ul class="navbar-nav ms-auto">
                 <div class="d-flex">
                     <a href="/form/login">
                         <h5><i class="fas fa-sign-in-alt text-light m-2"> Login</i></h5>
                     </a>
                 </div>
             </ul>
         </div>
     </div>
 </nav>
 <!-- @endauth -->