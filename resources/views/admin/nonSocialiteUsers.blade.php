@extends('admin.users')

@section('user_content')

<tbody style="color: grey; font-size: 16px; font-weight: bold;">
	@if(isset($user['all_non_socialite_user']))
		@foreach($user['all_non_socialite_user'] as $non_socialite_user)
		<tr>
			<td>{{$non_socialite_user->id}}</td>
			<td>{{$non_socialite_user->name}}</td>
			<td>{{$non_socialite_user->email}}</td>
			<td>{{$non_socialite_user->country_name}}</td>
			<td>{{$non_socialite_user->phone}}</td>
		</tr>
		@endforeach
	@else
		<tr>
			<td colspan="5" style="text-align: center;">No data found</td>
		</tr>
	@endif
	
</tbody>

@endsection