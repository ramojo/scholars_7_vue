@extends('layouts.app')
{{--@extends('layouts.sidebar-left')--}}
@section('content')
<div class="container">
    <student-home-container :items="{{json_encode($programmes)}}">
    </student-home-container>

</div>
@endsection
