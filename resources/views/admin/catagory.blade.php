<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">



        .div_center {
            text-align: center;
            padding-top: 40px;
            
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }

        .center {
    text-align: center;
   
    margin: auto;
    width: 50%;
    margin-top: 20px; /* Adjust as needed */
}

/* Additional styling for the table */




.center th,
.center td {
  
    border: 1px solid #ddd;
    border-radius: 10px; /* Adjust the radius as needed */
    padding: 15px;
    text-align: center;
    color: #ffffff;
}

.center th {
    background-color: #191c24;
}

    </style>
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
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_font">Add Catagory</h2>
                    <form action="{{url('/add_catagory')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="catagory" placeholder="Write Category Name">
                        <input type="submit" class="btn btn-primary" value"Add Category">
                    </form>
                </div>

               <!-- Styling for the table -->
                <table class="center" style="border-radius: 10px;">
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
@foreach($data as $data)
                    <tr>
                      <td>
                        {{$data->catagory_name}}
                      </td>
                      <td>
                        <a onclick="return confirm('Are You Sure to Delete This')" class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}">Delete</a>
                      </td>
                     
                    </tr>
@endforeach
                </table> 
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>
