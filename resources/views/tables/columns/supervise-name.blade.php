<div style="width: 100px;">
    @php
    use App\Models\User;
    $supervisors = User::whereIn('id', $getState())->get();
    @endphp
    <p style="font-size: 15px;">
        @foreach($supervisors as $supervisor)
        {{ $supervisor->name }}
        @if (!$loop->last)
        ,
        @endif
        @endforeach
    </p>

</div>