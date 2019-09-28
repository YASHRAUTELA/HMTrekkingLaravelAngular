@extends('admin.default')

@section('main_content')

@include('admin.header')
<!-- Main row -->
  <div class="row" >
    
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-12 connectedSortable" >

      <!-- solid sales graph -->
      <div class="box box-solid bg-teal-gradient" >
        <div class="box-header" style="background-color:{{$user['color']}}">
          <i class="fa fa-user"></i>

          <h3 class="box-title">{{$user['category']}}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body border-radius-none" style="background-color: white;">
        	<div class="row" style="margin-top: 20px; overflow-x: auto;">
          		<table class="table table-hover" id="myTable" style="padding: 0px 10px; ">
          			<thead  style=" font-size: 20px; font-weight: bold; color: {{$user['color']}}">
          				<tr>
          					<td>ID</td>
          					<td>Name</td>
          					<td>Email</td>
          					<td>Country</td>
          					<td>Phone</td>
          				</tr>
          			</thead>
          			@yield('user_content')
          		</table>
          	</div>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

@endsection