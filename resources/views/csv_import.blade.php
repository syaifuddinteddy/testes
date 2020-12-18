@extends('layouts.main_layout')

@section('content')

  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            Test Aplikasi-PT Kano Teknologi Utama
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="panel panel-default">
            <div class="panel-heading">CSV Import</div>

            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('proses_upload') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                  <label for="file" class="col-md-4 control-label">CSV file to import</label>

                  <div class="col-md-6">
                    <input id="file" type="file" class="form-control" name="file" required>

                    @if ($errors->has('file'))
                      <span class="help-block">
                                          <strong>{{ $errors->first('file') }}</strong>
                                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      Import CSV
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
