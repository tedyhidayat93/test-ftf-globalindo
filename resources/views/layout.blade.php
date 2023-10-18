<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    
    <div class="container">
        <div class="row">
            <!-- Alerts -->
            <div class="col">
                @if ($message = Session::get('success'))
                <div class="alert alert-dismissible alert-success bd bd-success-400" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon text-32 mg-t-5 mg-xs-t-0"></i>
                        <span>{{ $message }}</span>
                    </div><!-- d-flex -->
                </div><!-- alert -->
                @elseif ($message = Session::get('error'))
                <div class="alert alert-dismissible alert-danger bd bd-danger-400" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon text-32 mg-t-5 mg-xs-t-0"></i>
                        <span>{{ $message }}</span>
                    </div><!-- d-flex -->
                </div><!-- alert -->
                @elseif ($errors->all())
                <div class="alert alert-dismissible alert-danger bd bd-danger-400" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon text-32 mg-t-5 mg-xs-t-0"></i>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><!-- d-flex -->
                </div><!-- alert -->
                @endif
            </div>
            <!-- alerts end -->
        </div>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stack('scripts')
  </body>
</html>