<header class="mb-4">
    <nav class="navbar <navbar-expand-sm navbar-light bg-warning">
        <a class="navbar-brand" href="/">Tasklist</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item"><a href="#" class="nav-link">NewTask</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                @else
                    <li>{!! link_to_route("signup.get", "Signup", [], ["class" => "nav-link"]) !!}</li>
                    <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                @endif
            </ul>
        </div>
    </nav>    
</header>