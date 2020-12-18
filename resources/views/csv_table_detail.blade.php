@extends('layouts.main_layout')

@section('content')

  <div class="container-fluid" style="margin-bottom: 30px">
    <div class="page-header">
      <h1>Company Rev Details</h1>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="col-xs-3">
          <label>Client Tier :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>
        <div class="col-xs-3">
          <label>Comercial Stream :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>
        <div class="col-xs-3">
          <label>Commercial Bussiness :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>
        <div class="col-xs-3">
          <label>Bussiness Category :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>

      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-12">
        <div class="col-xs-3">
          <label>Bussiness Segment :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>
        <div class="col-xs-3">
          <label>Country :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>

        <div class="col-xs-3">
          <label>World Region :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>

        <div class="col-xs-3">
          <label>Manager In Contact :</label>
          <br>
          <input type="text" class="form-control" value="" readonly>
        </div>
      </div>

    </div>

    <br>

    <div class="row">
      <div class="col-md-12">
        <div class="col-xs-3">
          <div id="roe-div"></div>
        </div>
        <div class="col-xs-3">
          <div id="revenue-div"></div>
        </div>
        <div class="col-xs-3">
          <div id="eop-div"></div>
        </div>
        <div class="col-xs-3">
          <div id="average-div"></div>
        </div>
      </div>
    </div>


    <br>


    <div class="panel panel-primary">
      <div class="panel-heading">Edit Form</div>
      <div class="panel-body">

        <form action="" method="POST" >
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-12">
              <div class="col-xs-3">
                <input type="hidden" class="form-control" name="offset" value="" >

                <label>ROE_FY14 :</label>
                <br>
                <input type="text" class="form-control" name="ROE_FY14" value="" >
              </div>
              <div class="col-xs-3">
                <label>ROE_FY15 :</label>
                <br>
                <input type="text" class="form-control" name="ROE_FY15" value="" >
              </div>
              <div class="col-xs-3">
                <label>REVENUE_FY14 :</label>
                <br>
                <input type="text" class="form-control" name="REVENUE_FY14" value="" >
              </div>
              <div class="col-xs-3">
                <label>REVENUE_FY14 :</label>
                <br>
                <input type="text" class="form-control" name="REVENUE_FY15" value="" >
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="col-xs-3">
                <label>RWA FY14 :</label>
                <br>
                <input type="text" class="form-control" name="REV_RWA_FY14" value="" >
              </div>
              <div class="col-xs-3">
                <label>RWA FY15 :</label>
                <br>
                <input type="text" class="form-control" name="REV_RWA_FY15" value="" >
              </div>
              <div class="col-xs-3">
                <label>TotalLimits_EOP_FY14 :</label>
                <br>
                <input type="text" class="form-control" name="TotalLimits_EOP_FY14" value="" >
              </div>
              <div class="col-xs-3">
                <label>TotalLimits_EOP_FY15 :</label>
                <br>
                <input type="text" class="form-control" name="TotalLimits_EOP_FY15" value="" >
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="col-xs-3">
                <label>Company_Avg_Activity_FY14 :</label>
                <br>
                <input type="text" class="form-control" name="Company_Avg_Activity_FY14" value="" >
              </div>
              <div class="col-xs-3">
                <label>Company_Avg_Activity_FY15:</label>
                <br>
                <input type="text" class="form-control" name="Company_Avg_Activity_FY15" value="" >
              </div>
            </div>
          </div>
      <div class="panel-footer">
        <button type="submit" class="btn btn-danger">Re-Submit</button>
      </div>

      </form>
    </div>




  </div>
    @piechart('ROE', 'roe-div')
    @combochart('Revenue', 'revenue-div')
    @linechart('EOP', 'eop-div')
    @barchart('Average', 'average-div')
@endsection