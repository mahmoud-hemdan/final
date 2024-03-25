   <!--  wrapper -->
   <div id="wrapper">
       <!-- navbar top -->
       <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
           <!-- navbar-header -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="{{ route('home') }}" style="font-size:30px; color:black">
                   RESTAURANT SYSTEM
               </a>
           </div>
           <!-- end navbar-header -->
           <!-- navbar-top-links -->
           <ul class="nav navbar-top-links navbar-right">

           </ul>
           <!-- end navbar-top-links -->

       </nav>
       <!-- end navbar top -->

       <!-- navbar side -->
       <nav class="navbar-default navbar-static-side" role="navigation">
           <!-- sidebar-collapse -->
           <div class="sidebar-collapse">
               <!-- side-menu -->
               <ul class="nav" id="side-menu">
                   <li>
                       <!-- user image section-->
                       <div class="">
                           <div class="">
                               <img src="{{ asset('assets/img/RESTURANT.png') }}" alt="" width="100%"
                                   height="220px">
                           </div>
                           <div class="">

                               <div class="user-text-online">

                               </div>
                           </div>
                       </div>
                       <!--end user image section-->
                   </li>

                   <li>
                       <a href="{{ route('home') }}"><i class="fa-solid fa-computer"></i> Homepage</a>
                   </li>

                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> Customers<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('customer.create') }}">Add customers</a>
                           </li>
                           <li>
                               <a href="{{ route('customers') }}">View customer table</a>
                           </li>
                       </ul>


                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> Products<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('produst.create') }}">Add Products</a>
                           </li>
                           <li>
                               <a href="{{ route('products') }}">View Products table</a>
                           </li>
                       </ul>
                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> Orders<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('order.create') }}">Add Orders</a>
                           </li>
                           <li>
                               <a href="{{ route('order') }}">View Orders table</a>
                           </li>
                       </ul>
                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> order_customer<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('order_customer.create') }}">Add order_customer</a>
                           </li>
                           <li>
                               <a href="{{ route('order_customer.view') }}">View Orders_Customer table</a>
                           </li>
                       </ul>




                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> Reservations<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('Reservations.view') }}">View reservations table</a>
                           </li>
                       </ul>

                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> comments<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('comments.view') }}">View comments table</a>
                           </li>
                       </ul>

                   <li>
                       <a href="#"><i class="fa-solid fa-pen-to-square"></i> Contact<span
                               class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                           <li>
                               <a href="{{ route('Contact.view') }}">View Contact table</a>
                           </li>
                       </ul>



                       <!-- end side-menu -->
           </div>
           <!-- end sidebar-collapse -->
       </nav>
       <!-- end navbar side -->
       <!--  page-wrapper -->
       <div id="page-wrapper">

           <div class="row">
               <!-- Page Header -->
               <div class="col-lg-12">


               </div>
               <!--End Page Header -->
