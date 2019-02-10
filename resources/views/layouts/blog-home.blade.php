<!DOCTYPE html>
<html lang="en">

    @include('includes.front_header')

<body>

    <!-- Navigation -->
    @include('includes.front_nav')
    
    <!-- Page Content -->
    <div class="container">
        @include('includes.flash_messages')
        

            <!-- Blog Entries Column -->
            



                <!-- First Blog Post -->
                @yield('content')


                <!-- Pager -->


           

            <!-- Blog Sidebar-->
            
                
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        @include('includes.front_footer')

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
