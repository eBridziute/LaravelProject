<!DOCTYPE html>
<html lang="en">

@include('includes.front_header')
@include('includes.front_nav')
<body>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            

                <!-- Blog Post -->

                @yield('content')

           

            <!-- Blog Sidebar Widgets Column -->
    

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>
@yield('scripts')

</body>

</html>
