@if (session('success'))
    <div class="message-container">
        <p class="success">
            {{ session('success')  }}
        </p>
    </div>        
@endif

@if (session('error'))
    <div class="message-container">
        <p class="error">
            {{ session('error')  }}
        </p>
    </div>        
@endif

@if ($errors->any())
    <div class="message-container">
        <p class="error">
            @foreach ($errors->all() as $error)
                {{ $error  }} <br>           
            @endforeach 
        </p>
    </div>   
@endif