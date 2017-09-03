<html>
    <head>
        <meta charset="UFT-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/produtos">Estoque</a>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                        <li><a href="{{action('ProdutoController@novo')}}">Adicionar produto</a></li>
                    </ul>
                </div>
            </nav>
        
            @yield('conteudo')
        </div>
    </body>
</html>