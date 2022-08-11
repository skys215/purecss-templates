@if(!empty($errors))
    @if($errors->any())
        @foreach($errors->all() as $error)
            <aside class="pure-message message-error">
                <p><strong>ERROR</strong>: {!! $error !!}</p>
            </aside>
        @endforeach
    @endif
@endif
