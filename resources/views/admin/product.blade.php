<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')


    <style>
        .title{
            color: white;
            padding-top:25px;
             font-size:25px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
form input{
    color: black;
}
    </style>
  </head>
  <body>


    @include('admin.sidebar')

      <!-- partial -->

@include('admin.navbar')

<div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
<h1 class="title">Add Product</h1>

<form action="{{ url('uploadproduct') }}" method="Post" enctype="multipart/form-data">

    @csrf

 <div style="padding: 15px;">
<label for="">Product Title</label>
<input  type="text" name="title " placeholder="Give a Product Title" required>
</div>


<div style="padding: 15px;">
    <label for="">Price</label>
    <input type="number" name="price" placeholder="Give a Price" required>
    </div>


<div style="padding: 15px;">
    <label for="">Description</label>
    <input type="text" name="des " placeholder="Give a Product Description" required>
    </div>


<div style="padding: 15px;">
    <label for="">Quantity</label>
    <input type="text" name="quantity" placeholder="Give a Quantity" required>
    </div>


    <div style="padding: 15px;">
        <input type="file" name="file">
        </div>

        <div style="padding: 15px;">
            <input class="btn btn-success" type="submit" >
            </div>

        </form>

</div>




</div>
          @include('admin.script')
  </body>
</html>
