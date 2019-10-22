
@extends('layout/master')
@section('body1')
<h1>This is index page.</h1>
@endsection

@section('maincontent')
<h1>This is main content of index page.</h1>
<?php
$msg="test";
$u="indreni";
?>
@if($msg=="hello")

{{$msg}}
@elseif($msg=="hi")

{{$msg}}
@else
{{$u}}
@endif

@endsection


<!-- @section('ifelse')

<?php
$msg="test";
$u="indreni";
?>
@if($msg=="hello")

{{$msg}}
@elseif($msg=="hi")

{{$msg}}
@else
{{$u}}
@endif

@endsection -->