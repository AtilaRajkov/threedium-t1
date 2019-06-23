<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        @yield('seo-title')

        <!--Contains all the necessary css links-->
        @include('blog.layout.partials.head')

        @yield('custom-css')

    </head>

    <body>

        <!--Navigation and Header-->
        @include('blog.layout.partials.navigation')
        
        @yield('header')

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                
                    @yield('content')

                </div>
            </div>
        </div>

        @include('blog.layout.partials.footer')
        
        @yield('custom-js')


    </body>

</html>
