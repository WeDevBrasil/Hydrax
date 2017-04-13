<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ES Hydrax - Dashboard</title>
        <link rel="stylesheet" href="/assets/css/autoload.css">
        <link rel="stylesheet" href="/assets/css/dashboard.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    </head>

    <body>
        <header>
            <div class="container">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </header>
        <main role="main">
            <div class="title"> <a href="index.html">ES Hydrax</a> > Dashboard </div>
            <div class="container-fluid">

                <!-- Side Menu -->
                <div class="col-md-2" id="side-menu">

                    <!-- Menu de Clientes -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Clientes <a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="{{ route('customer.index') }}">Todos</a></li>
                                    <li><a href="{{ route('customer.create') }}">Registro</a></li>
                                    <li><a href="#">Pagamentos</a></li>
                                    <li><a href="#">Relatórios</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Menu de Empresas -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Empresas <a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="{{ route('company.index') }}">Todos</a></li>
                                    <li><a href="{{ route('company.create') }}">Registro</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Menu de Fornecedores -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Fornecedores <a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="{{ route('provider.index') }}">Todos</a></li>
                                    <li><a href="{{ route('provider.create') }}">Registro</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Menu de Pedidos -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Pedidos <a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="{{ route('order.index') }}">Todos</a></li>
                                    <li><a href="{{ route('order.create') }}">Registro</a></li>
                                    <li><a href="#">Relatórios</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Menu de Vendedores -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Vendedores <a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="#">Todos</a></li>
                                    <li><a href="#">Registro</a></li>
                                    <li><a href="#">Relatórios</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Menu de Produtos -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Produtos<a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="{{ route('product.index') }}">Todos</a></li>
                                    <li><a href="{{ route('product.create') }}">Registro</a></li>
                                    <li><a href="#">Relatórios</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Menu de Usuarios -->
                    <div class="row">
                        <div class="panel">
                            <div class="panel-heading">Usuarios<a href="#" class="btn-action">-</a> </div>
                            <div class="panel-body">
                                <nav>
                                    <li><a href="{{ route('product.index') }}">Todos</a></li>
                                    <li><a href="{{ route('product.create') }}">Registro</a></li>
                                    <li><a href="#">Relatórios</a></li>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div> <!-- Fim Side Menu -->

                <!-- Content -->
                <div class="col-md-10" id="content">


                    @yield('content')


                </div> <!-- Fim Content -->

            </div>
        </main>
        <footer role="complementary">
            <p><strong>&copy; SE Hydrax </strong> - Todos os direitos reservados - 2017</p>
        </footer>

        <script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/assets/bower_components/dynatable/jquery.dynatable.js"></script>
        <script>
            $('#list-products').dynatable();
            $('#list-orders').dynatable();
            $('#list-clients').dynatable();
            $('#list-providers').dynatable();
        </script>
        <script src="/assets/js/dashboard.js"></script>

    </body>

</html>