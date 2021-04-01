<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- Datatable Css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">


    <title>Teacher Managment System</title>
  </head>
  <body>
  <section class="content-header">
     <div class="row">
          <div class="col-md-12">
               <div class="pull-right">
                    <a type="button" class="btn btn-info btn-lg btn-flat " href="{{route('teacher.create')}}">Add
                            Teacher</a>
               </div>
          </div>
     </div>
</section>
    <table id="table_id" class="display">
        <thead class="thead-dark">
           
            <tr>
              <th scope="col">Lecture Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Phone</th>
              <th scope="col">Email Id</th>
              <th scope="col">Address</th>
              <th scope="col">Nationailty</th>
              <th scope="col">DOB</th>
              <th scope="col">Faculty</th>
            </tr>
          </thead>
        <tbody>
            @foreach($teachers as $teacherdata)
                <tr>
                    <td>{{$teacherdata->name}}</td>
                    <td>{{$teacherdata->gender}}</td>
                    <td>{{$teacherdata->phone}}</td>
                    <td>{{$teacherdata->email}}</td>
                    <td>{{$teacherdata->address}}</td>
                    <td>{{$teacherdata->nationality}}</td>
                    <td>{{$teacherdata->DOB}}</td>
                    <td>{{$teacherdata->faculty}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{-- datatable --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf'
                ]
            });
        });
    </script>
  </body>
</html>
