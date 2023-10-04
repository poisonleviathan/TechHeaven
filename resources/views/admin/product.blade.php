<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include ('admin.css')

    <style type="text/css">
      .div_center{
        text-align: center;
        padding-top: 40px;
        
      }
     .div_center h1{
        font-size: 40px;
        padding-bottom: 40px;
      }
   
      .text_color{

        color: black;
        padding-bottom: 20px;
      }

      label{
        display: inline-block;
        width: 200px;
      }
      .div_design{
        
        padding-bottom: 15px;
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
                <div class="div_center">
                    <h1>Add Product </h1>
<form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

    @csrf
                 <div class="div_design">
                    <input class="text_color" required="" type="text" name="title" placeholder="Write a title">
                    <label >: Product Title </label>

                </div>    

                <div class="div_design">
                    <input class="text_color" required=""  type="text" name="description" placeholder="Write a Description">
                    <label >: Product Description </label>

                </div>   

                <div class="div_design">
                    <input class="text_color" required=""  type="number" name="price" placeholder="Write a Price">
                    <label >: Product Price </label>

                </div>   

                
                <div class="div_design">
                    <input class="text_color"  type="text" name="dis_price" placeholder="Disscount if Available">
                    <label >: Discount Price </label>

                </div>   

                <div class="div_design">
                    <input class="text_color" required=""  type="number" min="0" name="quantity" placeholder="Write the Product Quantity">
                    <label >: Product Quantity </label>

                </div>   


                <div class="div_design">
                   <select  class="text_color" required=""  name="catagory" >
                    <option value="" selected="">Add Catagory Here</option>
                    @foreach($catagory as $catagory)
                    <option value="{{$catagory -> catagory_name}}">{{$catagory -> catagory_name}}</option>
                    @endforeach
                   </select>
                    <label >: Product Catogory </label>

                </div> 
                
                <div class="div_design">
                    
                    <input class="text_color" required=""  type="file"  name="image">
                    <label >: Add the Product Image</label>

                </div>  

                <div class="div_design"> 
                    <input class="btn btn-primary" value="Add Product" type="submit"  >
                    

                </div>  
            </form >
                </div>

            </div>
        </div>
    <!-- plugins:js -->
    @include ('admin.script')
  </body>
</html>