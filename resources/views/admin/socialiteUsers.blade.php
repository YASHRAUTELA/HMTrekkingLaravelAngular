@extends('admin.users')

@section('user_content')

<tbody style="color: grey; font-size: 16px; font-weight: bold;">
	@if(isset($user['all_socialite_user']))
		@foreach($user['all_socialite_user'] as $socialite_user)
		<tr>
			<td>{{$socialite_user->id}}</td>
			<td>{{$socialite_user->name}}</td>
			<td>{{$socialite_user->email}}</td>
			<td>{{$socialite_user->country_name}}</td>
			<td>{{$socialite_user->phone}}</td>
		</tr>
		@endforeach
	@else
		<tr>
			<td colspan="5" style="text-align: center;">No data found</td>
		</tr>
	@endif
	
</tbody>

@endsection