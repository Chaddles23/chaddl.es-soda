<?php
	$content = $page->properties->content;
	$contentRows = explode(PHP_EOL, $content);
?>

@extends('layouts.app')

@section('content')
	
	<div id="landing" class="h-100 d-flex flex-column align-items-center justify-content-center">
		@foreach($contentRows as $delay=>$contentRow)
			<div class="card" style="animation-delay: {{ $delay / 4 }}s, {{ ($delay % 2 == 0 ? 0 : 0.5) + count($contentRows) / 4 }}s">
				<h1 class="card-body">
					{!! $contentRow !!}
				</h1>
			</div>
		@endforeach
	</div>

@endsection