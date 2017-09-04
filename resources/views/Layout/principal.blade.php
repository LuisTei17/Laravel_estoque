<html>
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed bloco" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="/produtos">Estoque</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                            <li><a href="{{action('ProdutoController@novo')}}">Adicionar produto</a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                </div>
            </nav>
        
            @yield('conteudo')
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
    </body>
</html>