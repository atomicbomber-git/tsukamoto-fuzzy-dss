@if (session("message-state") == "success")
    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 mb-3" role="alert">
        <i class="fa fa-check mr-1"></i>
        <p> {{ session("message-text") }} </p>
    </div>
@endif

