@extends('admin.default')

@section('main_content')

<!-- Main row -->
  <div class="row">
    
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-12 connectedSortable">

      <!-- solid sales graph -->
      <div class="box box-solid bg-teal-gradient">
        <div class="box-header">
          <i class="fa fa-th"></i>

          <h3 class="box-title">Sales Graph</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body border-radius-none">
        	<div class="row" style="margin-top: 20px;">
          	
	          	<div class="col-lg-2 col-sm-4 col-md-3 col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3 col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3 col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3 col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3 col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3  col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3  col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3  col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3  col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
	          	<div class="col-lg-2 col-sm-4 col-md-3  col-xs-6" style="text-align: center;">
	          		<div class="well " style="height: 100px; background-color: grey;">
	          			<a href="#"><i class="fa fa-plus-circle" style="font-size: 50px;"></i></a><br>Upload image
	          		</div>
	          	</div>
          	</div>
        <div class="chart" id="line-chart" style="height: 250px;"></div>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

@endsection