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
            <div class="panel-heading">Company.csv</div>

            <div class="panel-body">
              <form method="GET" action="{{ URL::route('import')}}"  class="col-12 form-inline">
                <div class="form-row">
                  <div class="form-group col-3">
                    <input type="text" class="form-control" placeholder="CMGSegmentName">
                  </div>
                  <div class="form-group col-3">
                    <input type="text" class="form-control" placeholder="CMGUnmaskedName">
                  </div>
                  <div class="form-group col-3">
                    <input type="text" class="form-control" placeholder="ClientTier">
                  </div>

                  <button type="submit" class="btn btn-primary">Filter</button>
                </div>
              </form>
            </div>

            <div class="container">

              <table class="table table-bordered">

                <tr>

                  <th>Id</th>

                  <th>Title</th>

                </tr>

                @foreach($data as $post)

                  <tr>

                    <td>{{ $post->id }}</td>

                    <td>{{ $post->title }}</td>

                  </tr>

                @endforeach

              </table>

            </div>



            {{ $data->links() }}

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
