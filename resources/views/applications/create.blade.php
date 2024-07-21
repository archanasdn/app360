<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form Example - SB Admin</title>
    <link href="{{ url('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    
    <div id="layoutSidenav">
      
        <div id="layoutSidenav_content">
            <main>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Form Example</h3>
                                </div>
                                <div class="card-body">
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                  
                                    <form method="post" action="{{ url('applications') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="{{$data->id ?? 0}}">
                                            <label for="exampleFormControlInput1">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="" required>
                                            @if ($errors->has('name'))
                                            <span class=" text-danger  form-text font-size-85p" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone Number</label>
                                            <input type="number" class="form-control" id="phone_number" name="phone" placeholder="phone_number" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Cv</label>
                                            <input type="file" class="form-control" id="cv" name="cv" placeholder="" value="" required>
                                        </div>
                                    
                                        <br>
                                      
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                    </form>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
</body>

</html>