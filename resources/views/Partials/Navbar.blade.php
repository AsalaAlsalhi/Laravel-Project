<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 242, 230, 0.9);">
    <div class="container">
        <a class="navbar-brand" href="{{ route('web') }}" 
           style="
               font-family: 'Pacifico', cursive; 
               font-size: 1.8rem; 
               padding: 0.3rem 0.8rem; 
               border-radius: 15px; 
               background-color: rgba(255, 255, 255, 0.3);
               display: flex;
               align-items: center;
               justify-content: center;
                      color: #ff7f50;  

           ">
           FruitStore
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            style="border-color: #ff7f50;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- Left --}}
            <ul class="navbar-nav me-auto">
                <li class="nav-item mx-2"><a class="nav-link" href="{{ route('web') }}" style="color: #ff7f50;">🏠 Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#" style="color: #ff7f50;">🍊 Categories</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#" style="color: #ff7f50;">🛍️ Products</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#" style="color: #ff7f50;">🛒 Cart</a></li>
            </ul>

            {{-- Right --}}
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item mx-2">
                        <a href="{{ route('dashboard') }}" class="btn" style="background-color: #ff7f50; color: white; font-weight: 600; border-radius: 6px;">Dashboard</a>
                    </li>
                    <li class="nav-item mx-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn" style="background-color: #ff7f50; color: white; font-weight: 600; border-radius: 6px;">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item mx-1">
                        <a href="{{ route('login') }}" class="btn" style="background-color: #ff7f50; color: white; font-weight: 600; border-radius: 6px;">Login</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="{{ route('register') }}" class="btn" style="background-color: #ff7f50; color: white; font-weight: 600; border-radius: 6px;">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
