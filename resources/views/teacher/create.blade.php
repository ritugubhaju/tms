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

  </head>
  <body>
  <!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Teachers</a></li>
                    <li class="breadcrumb-item active">Add Teacher</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add Teacher</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form role="form" action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                     <div class="form-group">
                          <label for="name">Lecturer's Name:</label>
                          <input type="text" name="name" class="form-control" placeholder="Name">
                          @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                     </div>
                    
                     <div class="form-group">
                          <label for="gender">Gender:</label><br>
                          <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                     </div>

                     <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" class="form-control" required>
                        @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                         @endif
                      </div>

                     <div class="form-group">
                          <label for="email">Email id:</label>
                          <input type="email" name="email" class="form-control" required>
                          @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                         @endif
                     </div>

                     <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" class="form-control" required>
                        @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                         @endif
                    </div>

                     <div class="form-group">
                          <label for="nationality">Nationality:</label>
                          <input type="text" name="nationality" class="form-control" required>
                          @if ($errors->has('nationality'))
                                <span class="text-danger">{{ $errors->first('nationality') }}</span>
                         @endif
                     </div>

                     <div class="form-group">
                          <label for="dob">DOB:</label>
                          <input type="date" name="dob" class="form-control" required>
                          @if ($errors->has('dob'))
                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                         @endif
                     </div>
                     
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" name="faculty" id="faculty">
                        <option disabled selected>--Choose Any option--</option>
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                        </select>
                    </div>

                    <div class="form-group d-none" id="management">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple name="subject[]" class="form-control" id="management">
                        <option value="social" name="social">Social</option>
                        <option value="english" name="english">English</option>
                        <option value="nepali" name="nepali">Nepali</option>
                        </select>
                    </div>

                    <div class="form-group d-none" id="science">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple name="subject[]" class="form-control">
                        <option value="social" name="math">Math</option>
                        <option value="english" name="physics">Physics</option>
                        <option value="nepali" name="chemistry">Chemistry</option>
                        </select>
                    </div>


                     <button type="submit" class="btn btn-success">Add Teacher</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
    <!-- /.content -->
</section>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
        $(document).ready(function(){
        $('#faculty').on('change', function() {
          if ( this.value == 'science')
          {
            $("#science").removeClass('d-none');
          }
          else
          {
            $("#science").addClass('d-none');
          }
        });
        $('#faculty').on('change', function() {
          if ( this.value == 'management')
          {
            $("#management").removeClass('d-none');
          }
          else
          {
            $("#management").addClass('d-none');
          }
        });
    });
</script>

</body>
</html>
