<?php  namespace estoque\Http\Controllers;
//    use Illuminate\Support\Facades\DB;
    use estoque\Produto;
    use Illuminate\Support\Facades\Validator;
    use Request;
    use estoque\Http\Requests\ProdutoRequest;

    class ProdutoController extends Controller {
        public function lista() {
            
            $produtos = Produto::all();
            
            return view('Produtos/listagem')->withProdutos($produtos);
        }

        public function listaJson() {
            $produtos = Produto::all();
            return $produtos;
        }


        public function novo() {
            $id = Request::route('id');
            if(!empty($id)) {
                $produto = Produto::find($id);
                return view('Produtos/formulario')->withProduto($produto);
            }
            else {
                return view('Produtos/formulario');
            }

        }

        public function adiciona(ProdutoRequest $request) {

            $resposta = $request->all();
            
            if(empty($resposta['customId'])){
                Produto::create($resposta);
            } else {
                Produto::where('id', $resposta['customId'])
                    ->update(['nome'=>$resposta['nome'], 'valor'=>$resposta['valor'], 
                        'quantidade'=>$resposta['quantidade'],
                        'descricao'=>$resposta['descricao']]);
            }

            return redirect()
                ->action('ProdutoController@lista')
                ->withInput(Request::only('nome'));
        }

        public function remove($id) {
            $produto = Produto::find($id);
            $produto->delete();
            return redirect()->action('ProdutoController@lista');
        }
    }