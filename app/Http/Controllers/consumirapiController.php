<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class consumirapiController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:9000/api/products');

        /*dd($response);*/
        return $response->json();
    }

    public function show($id)
    {
        $a = 'http://localhost:9000/api/products/';
        $a .= $id;
        $response = Http::get($a);

        /*dd($response);*/
        return $response->json();
    }

    public function mostrarUmProduto($id)
    {
        $a = 'http://localhost:9000/api/products/';
        $a .= $id;
        $b = 'http://localhost:9000/api/products/';
        $b .= $id;
        $json = file_get_contents($b);
        $ob = json_decode($json);
        /*$produto = new Product;
        $produto = Http::get($a); */
        // $produto = Produto::findOrFail($id);
        // return view('produtos.edit', ['produto' => $produto]);
        return view('consumirapi.mostrarproduto', ['urlapi' => $a], ['produto' => $ob]);
    }

    public function create()
    {
        return view('consumirapi.create');
    }

    public function edit($id)
    {
        $a = 'http://localhost:9000/api/products/';
        $a .= $id;
        $b = 'http://localhost:9000/api/products/';
        $b .= $id;
        $json = file_get_contents($b);
        $ob = json_decode($json);
        /*$produto = new Product;
        $produto = Http::get($a); */
        // $produto = Produto::findOrFail($id);
        // return view('produtos.edit', ['produto' => $produto]);
        return view('consumirapi.edit', ['urlapi' => $a], ['produto' => $ob]);
    }

    public function delete($id)
    {
        $a = 'http://localhost:9000/api/destruir/';
        $a .= $id;
        $b = 'http://localhost:9000/api/products/';
        $b .= $id;
        $json = file_get_contents($b);
        $nome = json_decode($json);
        return view('consumirapi.delete', ['urlapid' => $a], ['produtonome' => $nome->name]);
    }

    public function fazerLogin()
    {
        return view('consumirapi.login');
    }

    public function fazerCadastro()
    {
        return view('consumirapi.cadastrar');
    }

    public function fazerLogout()
    {
        return view('consumirapi.logout');
    }

    public function verDashboard()
    {
        $response = Http::get('http://localhost:9000/api/products');
        $produtos = $response->json();
        return view('consumirapi.dashboard', ['produtos' => $produtos]);
    }

}
