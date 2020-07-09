{{--<div class="container">--}}
    <div class="col-md-2">
    @if(!Auth::guest())
    <h3>Simple Search</h3>
    <p>Search for name, nationality or class joined or thesis title</p>


    <br> <br>
    <p>Click to view all students under the selected programme</p>
    <div class="card card-columns" style="width: 18rem;">
        <ul class="list-group list-group-flush">
   {{--         @foreach($programmes as $program)
                <li class="list-group-item"><a href="{{ url('/programmes') }}/{{$program->id}}">{{$program->programmes}}</a></li>
            @endforeach--}}
        </ul>
    </div>
    @endif
    </div>
{{--    </div>--}}
