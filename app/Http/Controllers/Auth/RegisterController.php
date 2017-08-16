<?php

namespace WhyBuy\Http\Controllers\Auth;

use WhyBuy\User;
use WhyBuy\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'CPF' => 'required|integer|max:11',
            'RG' => 'required|string|max:9',
            'date' => 'required|date',
            'Sexo' => 'required|string',
            'Telefone' => 'required|integer',
            'Telefone2' => 'integer',
            'nomeEstab' => 'required|string|max:255',
            'Cnpj' => 'required|string|max:18',
            'Inscricaoestadual' => 'required|string|max:15',
            'Endereco' => 'required|string|max:255',
            'CEP' => 'required|string|max:9',
            'Cidade' => 'required|string|max:255',
            'Estado' => 'required|string|max:2',
            'ramoAtiv' => 'required|string|max:255',
            'Nomefantasia' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'senha' => 'required|string|min:6|confirmed'
        
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \WhyBuy\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'CPF' => $data['cpf'],
            'RG' => $data['rg'],
            'date' => $data['dataNasc'],
            'Sexo' => $data['sexo'],
            'Telefone' => $data['telUm'],
            'Telefone2' => $data['telDois'],
            'nomeEstab' => $data['nomeEstab'],
            'Cnpj' => $data['cnpj'],
            'Inscricaoestadual' => $data['ei'],
            'Endereco' => $data['endereco'],
            'CEP' => $data['cep'],
            'Cidade' => $data['cidade'],
            'Estado' => $data['estado'],
            'ramoAtiv' => $data['ramoAtiv'],
            'nomeFantasia' => $data['nomeFantasia'],
            'email' => $data['email'],
            'senha' => bcrypt($data['password'])
        ]);
    }
}
