{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$product->title}}
    {{$product->price}}
    {{$product->description}}
    <img src="/product{{$product->description}}" alt="">
    {{$product->catagory}}
    {{$product->quantity}}
    {{$product->discount}}
    
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
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
        text-align: center;
        padding-bottom: 15px;
      }
      #upload{
color: #ddd;

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
                    <h1>Update Product </h1>
<form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

    @csrf
                 <div class="div_design">
                    <input class="text_color" required="" type="text" name="title" value="{{$product->title}}" placeholder="Write a title">
                    <label >: Product Title </label>

                </div>    

                <div class="div_design">
                    <input class="text_color" required=""  type="text" name="description"  value="{{$product->description}}"   placeholder="Write a Description">
                    <label >: Product Description </label>

                </div>   

                <div class="div_design">
                    <input class="text_color" required=""  type="number" name="price"  value="{{$product->price}}"  placeholder="Write a Price">
                    <label >: Product Price </label>

                </div>   

                
                <div class="div_design">
                    <input class="text_color"  type="text" name="dis_price"  value="{{$product->discount}}"  placeholder="Disscount if Available">
                    <label >: Discount Price </label>

                </div>   

                <div class="div_design">
                    <input class="text_color" required=""  type="number" min="0" name="quantity"  value="{{$product->quantity}}"  placeholder="Write the Product Quantity">
                    <label >: Product Quantity </label>

                </div>   


                <div class="div_design">
                   <select  class="text_color" required=""  name="catagory" >
                    <option value="{{$product->catagory}}" selected=""> {{$product->catagory}}</option>
                   
                    @foreach($catagory as $catagory)
                    <option value="{{$catagory -> catagory_name}}">{{$catagory -> catagory_name}}</option>
                    @endforeach
                   </select>
                    <label >: Product Catogory </label>

                </div> 
                
                <div class="div_design">
                    
                   
                    <label >: Current Product Image</label>
                    <img style="margin: auto" height="250px" width="250px"src="/product/{{$product->image}}">
                </div>  

                <div class="div_design">
                    
                    <input id="upload" class="text_color" type="file"  name="image">
                    <label >: Change Product Image</label>

                </div>  

                <div class="div_design"> 
                    <input class="btn btn-primary" value="Update Product" type="submit"  >
                    

                </div>  
            </form >
                </div>

            </div>
        </div>
    <!-- plugins:js -->
    @include ('admin.script')
  </body>
</html>