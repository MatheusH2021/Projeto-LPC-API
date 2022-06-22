<?php

namespace App\Http\Controllers;

/*-handle-guzzle-exception-and-get-http-body-*/

// use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MeuImovelController extends Controller
{
    
    /*- Somente retorno de views -*/
    
    public function index()
    {
        return view('login');
    }

    public function cadastrar()
    {
        return view('cadastrar');
    } 

    public function editar($id)
    {
        $http = new \GuzzleHttp\Client();

        /*- Definindo o Header da consulta -*/
        $header = [
            'Authorization' => 'Bearer '.session('token'),
            'Accept'        => 'aplication/json',
        ];

        /*- Consultando a API -*/
        $response = $http->get("https://api.softpop.com.br/public/api/v1/imovel/{$id}", [
            'headers'=>$header,
        ]);
        
        /*-Formatando o resultado -*/
        $result = json_decode((string)$response->getBody(), true);
        
        return view('edit')->with(['itens'=>$result['data']]);
    }
    /*----------------------------*/

    /*- Funções da API -*/

    /*- Login utilizando a API -*/
    public function apiLogin(Request $request)
    {

        $http = new \GuzzleHttp\Client();
        
        /*- Informações do Usuário -*/
        $email    = $request->email;
        $password = $request->password;
        
        try{
            
            /*- Consultando api para login -*/
            $response = $http->post('https://api.softpop.com.br/public/api/v1/login', [
                'query'=>[
                    'email'=>$email,
                    'password'=>$password
                ]
            ]);
    
            /*-Formatando o resultado-*/
            $result = json_decode((string)$response->getBody(), true);
            
            /*-Adicionando TOKEN a Sessão-*/
            $request->session()->put('token', $result['token']);
            
            // return dd($result);
            return redirect()->route('home');
            
        }catch(\GuzzleHttp\Exception\BadResponseException $e){
            
            $response = $e->getResponse();
            $error_result = json_decode((string)$response->getBody(), true);

            return view('errors.error-handling-login')->with(['error'=>$error_result['message']]);

        }
    }
    
    /*- Pagina inicial recebendo os imoveis da API -*/
    public function home($id = null)
    {
        $http = new \GuzzleHttp\Client();

        /*- Definindo o Header da consulta -*/
        $header = [
            'Authorization' => 'Bearer '.session('token'),
            'Accept'        => 'aplication/json',
        ];

        /*- Consultando a API -*/
        $response = $http->get("https://api.softpop.com.br/public/api/v1/imovel?page={$id}",[
            'headers'=>$header,
        ]);

        /*-Formatando o resultado-*/
        $result = json_decode((string)$response->getBody(), true);

        // return dd($result);
        return view('home')->with(['itens'=>$result]);
        
    }
    
    /*- Cadastro de imovel usando a API -*/
    public function apiCadastro(Request $request)
    {
        $http = new \GuzzleHttp\Client();
        
        /*- Definindo o Header da consulta -*/
        $header = [
            'Authorization' => 'Bearer '.session('token'),
            'Accept'        => 'aplication/json',
        ];
        
        try {
            /*- Consultando a API -*/
            $response = $http->post('https://api.softpop.com.br/public/api/v1/imovel', [
                'headers' => $header,
                'query'   => [
                    'titulo'=>$request->title,
                    'descricao'=>$request->description,
                    'conteudo'=>$request->content,
                    'price'=>$request->price,
                    'quarto'=>$request->bedrooms,
                    'banheiro'=>$request->bathrooms,
                    'area_propriedade'=>$request->area,
                    'total_area_propriedade'=>$request->total_area,
                    'slug'=>'imovel-Matheus',
                ],
            ]);
            
            $result = json_decode((string)$response->getBody(), true);

            // return dd($result);
            return view('success.cadastro')->with(['message'=>$result['data']]);

        } catch(\GuzzleHttp\Exception\BadResponseException $e) {
            
            $response = $e->getResponse();
            $error_result = json_decode((string)$response->getBody(), true);

            return view('errors.error-handling-imovel')->with(['error'=>$error_result['message']]);

        }
    }
    
    /*- Editando imovel da API -*/
    public function apiEditar($id, Request $request)
    {
        $http = new \GuzzleHttp\Client();

        /*- Definindo o Header da consulta -*/
        $header = [
            'Authorization' => 'Bearer '.session('token'),
            'Accept'        => 'aplication/json',
        ];
        try{

            $response = $http->patch("https://api.softpop.com.br/public/api/v1/imovel/{$id}", [
                'headers'=>$header,
                'query'  => [
                    'titulo'=>$request->title,
                    'descricao'=>$request->description,
                    'conteudo'=>$request->content,
                    'price'=>$request->price,
                    'quarto'=>$request->bedrooms,
                    'banheiro'=>$request->bathrooms,
                    'area_propriedade'=>$request->area,
                    'total_area_propriedade'=>$request->total_area,
                    'slug'=>'imovel-Matheus',
                ],
            ]);
            
            // return dd($result);
            return redirect()->route('home');

        } catch(\GuzzleHttp\Exception\BadResponseException $e){
            
            $response = $e->getResponse();
            $error_result = json_decode((string)$response->getBody(), true);

            return view('errors.error-handling-imovel-edit')->with(['error'=>$error_result['message'], 'id'=>$id]);

        }     
    }

    /*- Deletando imoveis da API -*/ 
    public function apiDelete($id)
    {
        $http = new \GuzzleHttp\Client();

        /*- Definindo o Header da consulta -*/
        $header = [
            'Authorization' => 'Bearer '.session('token'),
            'Accept'        => 'aplication/json',
        ];

        $response = $http->delete("https://api.softpop.com.br/public/api/v1/imovel/{$id}", [
            'headers'=>$header,
        ]);
        
        $result = json_decode((string)$response->getBody(), true);

        return view('success.delete')->with(['message'=>$result['data']]);
    }

    /*- Finalizar sessão -*/
    public function logout()
    {
        $http = new \GuzzleHttp\Client();

        /*- Definindo o Header da consulta -*/
        $header = [
            'Authorization' => 'Bearer '.session('token'),
            'Accept'        => 'aplication/json',
        ];

        /*- Consultando a API para logout -*/
        $response = $http->get('https://api.softpop.com.br/public/api/v1/logout', [
            'headers'=>$header,
        ]);
        
        /*- Limpando sessions() -*/ 
        session()->flush();

        return redirect()->route('login');
    }
    /*------------------*/

}
