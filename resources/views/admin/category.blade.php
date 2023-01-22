<!DOCTYPE html>
<html lang="en">

<head>
    <style type="test/css">

        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        h2{
            font-size: 40px;
            padding-bottom: 40px;
        }

    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session() ->has('message'))
                <div class="alert alert-success">
                
                <button type="button" class="close" data-dismiss= "alert" area-hidden="true">x</button>

                {{session()-get('message')}}

                </div>

                <div class="div_center">
                    <h2>Add Catagory</h2>
                    <form action="{{url('/add_category" method="POST">
                        @csrf
                        <input type="text" name="category" placeholder="Write catagory name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
                    </form>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>
@include('admin.script')

</html>