@foreach (session('flash_notification', collect())->toArray() as $message)
    <aside class="pure-message message-success">
        <p>{!! $message['message'] !!}</p>
    </aside>
@endforeach
{{ session()->forget('flash_notification') }}
