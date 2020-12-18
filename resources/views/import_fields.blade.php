@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import</div>

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

                    <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                @if (isset($csv_header_fields))
                                <tr>
                                    @foreach ($csv_header_fields as $csv_header_field)
                                        <th>{{ $csv_header_field }}</th>
                                    @endforeach
                                </tr>
                                @endif
                                @foreach ($csv_data as $row)
                                    <tr>
                                    @foreach ($row as $key => $value)
                                        <td>{{ $value != null ? $value : null }}</td>
                                    @endforeach
                                    </tr>
                                @endforeach
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
