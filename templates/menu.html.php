<nav class="navbar navbar-expand navbar-light rounded">
    <a class="navbar-brand" href="/">
        <img src="/images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
        aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/products" id="dropdown09" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Playstation</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="/products/category?categoryId=4">Consoles</a>
                    <a class="dropdown-item" href="/products/category?categoryId=5">Games</a>
                    <a class="dropdown-item" href="/products/category?categoryId=6">Accessories</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/products" id="dropdown09" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">XBOX</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="/products/category?categoryId=1">Consoles</a>
                    <a class="dropdown-item" href="/products/category?categoryId=2">Games</a>
                    <a class="dropdown-item" href="/products/category?categoryId=3">Accessories</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/products" id="dropdown09" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">PC</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="/products/category?categoryId=7">Consoles</a>
                    <a class="dropdown-item" href="/products/category?categoryId=8">Games</a>
                    <a class="dropdown-item" href="/products/category?categoryId=9">Accessories</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/products" id="dropdown09" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Nintendo</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="/products/category?categoryId=10">Consoles</a>
                    <a class="dropdown-item" href="/products/category?categoryId=11">Games</a>
                    <a class="dropdown-item" href="/products/category?categoryId=12">Accessories</a>
                </div>
            </li>
        </ul>
        <form action="/search" method="POST" class="form-inline my-2 my-md-0 pt-2 mr-5">
            <input class="form-control search" type="text" name="searchTerm" placeholder="Search GStorm...">
        </form>
        <ul class="navbar-nav gs-nav-right">
            <?php if (isset($_SESSION['loggedin'])) { ?>
                <li class="nav-item dropdown ml-2 pl-2 pr-2">
                    <a class="nav-link dropdown-toggle" href="/account/signIn" id="ddAccount" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ddAccount">
                        <a class="dropdown-item" href="/account/my">My Account</a>
                        <a class="dropdown-item" href="/account/previousOrders">My Orders</a>
                        <a class="dropdown-item" href="/account/signOut">Sign Out</a>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item ml-2 pl-2 pr-2">
                    <a class="nav-link" href="/account/signIn">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
            <?php } ?>
            <li class="nav-item pl-2 pr-2">
                <a class="nav-link" href="/wishlist/my">
                    <i class="fas fa-heart"></i>
                </a>
            </li>
            <li class="nav-item pl-2 pr-2 mr-2">
                <a class="nav-link" href="/basket/my">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>