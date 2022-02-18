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
      
      <div style="position: relative; top:70px; right: -150; ">
          <table bgcolor="grey" border="1px" > 
              <tr>
                  <th style="padding: 30px;">Name</th>
                  <th style="padding: 30px;">Email</th>
                  <th style="padding: 30px;">Phone</th>
                  <th style="padding: 30px;">Guest</th>
                  <th style="padding: 30px;">date</th>
                  <th style="padding: 30px;">Time</th>
                  <th style="padding: 30px;">Message</th>
              </tr>
              @foreach ($data as $data)
                <tr align="center">
                    <th style="padding: 30px;">{{ $data->name }}</th>
                    <th style="padding: 30px;">{{ $data->email }}</th>
                    <th style="padding: 30px;">{{ $data->phone }}</th>
                    <th style="padding: 30px;">{{ $data->guest }}</th>
                    <th style="padding: 30px;">{{ $data->date }}</th>
                    <th style="padding: 30px;">{{ $data->time }}</th>
                    <th style="padding: 30px;">{{ $data->message }}</th>
                </tr>
               @endforeach
              
          </table>
      </div>
    </div>
      @include("admin.adminscript")
     
    </body>
</html>