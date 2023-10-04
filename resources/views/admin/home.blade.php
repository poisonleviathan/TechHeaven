<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include ('admin.css')
   
    <style type="text/css">
      .content-wrapper{
        text-align: center;
        padding-top: 40px;
        
      }
     .content-wrapper h1{
        font-size: 40px;
        padding-bottom: 40px;




      }



      #body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #img {
          margin-left: 10%;
            max-width: 100%;
            max-height: 75%;
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

        <div id="body" class="main-panel">
          <div class="content-wrapper">
<h1>
  Wellcome to Tech Heaven 
</h1>

<img id="img"src="admin/assets/images/Wellcome.png"  alt="" srcset="">
          </div>
        </div>

        {{-- @include ('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include ('admin.script')
  </body>
</html>