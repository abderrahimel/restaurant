<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/assets/css/foodmenu.css') }}" />
  </head>
  <body>
      <div class="container-scroller">
            @include("admin.navbar")
           <div style="position: relative; top: 60px; right: -150px;">

               <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                 @csrf
                   <div class="title">
                       <label>Title</label>
                       <input style="color: black" type="text" name="title" placeholder="Write a title" required>
                   </div>
                    <div class="price">
                        <label>Price</label>
                        <input style="color: black" type="num" name="price" placeholder=" price" required>
                    </div>
                    <div class="img">
                        <label>Image</label>
                        <input style="color: black" type="file" name="image" placeholder=" image" required>
                    </div>
                    <div class="description">
                       <label>description</label>
                       <input style="color: black" type="text" name="description" placeholder="Description" required>
                   </div>
                   <div class="save">
                    <input style="color: white" type="submit" value="Save">
                </div>
               </form>
               <div>
                  <table bgcolor="orange">
                      <tr>
                        <th style="padding: 30px;">Food Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Description</th>
                        <th style="padding: 30px;">Image</th>
                        <th style="padding: 30px;">Action</th>
                        <th style="padding: 30px;">Action2</th>
                      </tr>
                    @foreach ($data as $data )
                      <tr align="center">
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td> <img style="width: 100px; height: 100px;" src='/foodimage/{{ $data->image }}'></td>
                        <td>  <a href="{{ url('/deletemenu', $data->id) }}">Delete</a> </td>
                        <td>  <a href="{{ url('/updateview', $data->id) }}">Update</a> </td>
                      </tr>
                    @endforeach
                   
                  </table>
               </div>
           </div>
      </div>
      @include("admin.adminscript")
     
    </body>
</html>