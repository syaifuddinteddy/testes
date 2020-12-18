@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('test.save') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                                <div class="col-md-6">
                                    <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="header" checked> File contains header row?
                                        </label>
                                    </div>
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


                        <hr>

                        <!-- Titip -->
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                @if (isset($headers))
                                    <tr>
                                        @foreach ($headers as $header)
                                            <th>{{ $header }}</th>
                                        @endforeach
                                    </tr>
                                @endif
                                </thead>
                                <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        @foreach ($row as $key => $value)
                                            <td>{{ $value != null ? $value : null }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                        <!-- Titip -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
