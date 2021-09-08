@include ('layouts.app')

@section('content')
    @if (count($favorites) > 0)
        <ul class="list-unstyled">
            @foreach($favorites as $favorite)
            <li class = "media mb-3">
                テスト
            </li>
        </ul>
    @endif
@endsection