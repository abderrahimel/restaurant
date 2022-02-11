<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/assets/css/admin.css') }}" />
    <title>Document</title>
</head>
<body>
    <x-app-layout>
   
    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
      </head>
      <body>
        <div class="container-scroller">
          @include("admin.navbar")
         <div class="table-user">
             <table class="table-1">
                 <tr>
                     <th class="ligne">Name</th>
                     <th class="ligne">Email</th>
                     <th class="ligne">Action</th>
                 </tr>
                 @foreach ($users as $user)
                    <tr class="second-ligne">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                      @if ($user->usertype=="0")
                         <td><a href="{{ url('/deleteuser', $user->id) }}">Delete</a> </td>
                      @else
                        <td>Not Allowed</td>
                      @endif
                    </tr>
                 @endforeach
                
             </table>
         </div>
        </div>
          @include("admin.adminscript")
           
        </body>
    </html>
</body>
</html>