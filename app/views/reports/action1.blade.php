@section('content')
<?php auth_check_mentainer(); ?>

<?php
$user = ArcApp::user();
//print_r($user);
?>


	<div class="log_report">
		<h1 class='admin item-title spool'>Staff Users Actions ( last hour activity )</h1>

		<div class="panel panel-primary">
			<table class="table table-bordered table-condensed table-striped table-hover">
				<thead class="a_thead">
					<tr>
						<th colspan="1">
							<span class="a_shead">Time</span>
						</th>
						<th colspan="1">
							<span class="a_shead">Type</span>
						</th>
						<th colspan="1">
							<span class="a_shead">Url</span>
						</th>
						<th colspan="1">
							<span class="a_shead">User name</span>
						</th>
					</tr>
				</thead>
					<tbody>
							@foreach ($results as $k => $v)
								<tr>
			  					<td>&#160;{{sprintf('%s', date('H:i:s \o\n d-m-Y', strtotime($v['last_event_ts'])))}}</td>
			  					<td>&#160;{{$v['type']}}</td>
			  					<td>&#160;{{$v['url']}}</td>
			  					<td>&#160;{{$v['user_name']}}</td>
								</tr>
							@endforeach
					</tbody>
			</table>
		</div>










	</div>























@stop
