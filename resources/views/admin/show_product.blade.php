<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include ('admin.css')


    <style type="text/css">

.center_text{
    font-size: 40px;
    text-align: center;
    padding-top: 40px;
    padding-bottom: 40px;
}

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
   @include ('admin.sidebar')


   
      <!-- partial -->
      @include ('admin.header')

      
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <h1 class="center_text">All Products</h1>
                <table class="center">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Disscount Price</th>
                        <th>Product Image</th> 
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>

                    @foreach($product as $product)

                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->catagory}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount}}</td>
                        <td>
                            <img src="/product/{{$product->image}}" width="250px" height="250px">
                        </td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delete this?')" href="{{url('delete_product',$product->id)}}">Delete</a></td>
                        <td><a  class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a></td>
                    </tr>

                    @endforeach
                </table>



            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include ('admin.script')
  </body>
</html>