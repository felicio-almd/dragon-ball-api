<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonagemController extends Controller
{
    private $personagens;

    public function __construct(Personagem $personagem)
    {
        $this->personagens = $personagem;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personagens = $this->personagens->all();

        // PARA API
        return response()->json($personagens, Response::HTTP_OK);

        // PARA VIEW WEB
        // return view('personagens', compact('personagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_personagens');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|min:3|max:80',
            'raca' => 'required|string|min:3|max:80',
            'idade' => 'nullable|integer|min:0',
            'nivel_de_ki' => 'required|integer|min:1',
        ], [
            'nome.required' => 'O CAMPO NOME DEVE SER OBRIGATÓRIO',
            'nome.string' => 'O NOME DEVE SER UMA STRING',
            'nome.min' => 'O NOME DEVE TER NO MÍNIMO 3 CARACTERES',
            'nome.max' => 'O NOME DEVE TER NO MÁXIMO 80 CARACTERES',

            'raca.required' => 'O CAMPO RAÇA DEVE SER OBRIGATÓRIO',
            'raca.string' => 'A RAÇA DEVE SER UMA STRING',

            'idade.integer' => 'A IDADE DEVE SER UM NÚMERO INTEIRO',
            'idade.min' => 'A IDADE DEVE SER NO MÍNIMO 0',

            'nivel_de_ki.required' => 'O CAMPO NÍVEL DE KI DEVE SER OBRIGATÓRIO',
            'nivel_de_ki.integer' => 'O NÍVEL DE KI DEVE SER UM NÚMERO INTEIRO',
            'nivel_de_ki.min' => 'O NÍVEL DE KI DEVE SER NO MÍNIMO 1',
        ]);

        $personagem = Personagem::create($data);

        // PARA API
        return response()->json([$personagem, 'message' => 'Personagem criado com sucesso'], Response::HTTP_CREATED);

        // PARA VIEW WEB
        // return redirect()->route('index')->with('success', 'Personagem criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personagem = $this->personagens->findOrFail($id);

        // para api
        return response()->json($personagem, Response::HTTP_FOUND);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personagem = $this->personagens->findOrFail($id);

        // PARA VIEW WEB
        return view('edit_personagens', compact('personagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $personagem = $this->personagens->findOrFail($id);
        $data = $request->validate([
            'nome' => 'required|string|min:3|max:80',
            'raca' => 'required|string|min:3|max:80',
            'idade' => 'nullable|integer|min:0',
            'nivel_de_ki' => 'required|integer|min:1',
        ], [
            'nome.required' => 'O CAMPO NOME DEVE SER OBRIGATÓRIO',
            'nome.string' => 'O NOME DEVE SER UMA STRING',
            'nome.min' => 'O NOME DEVE TER NO MÍNIMO 3 CARACTERES',
            'nome.max' => 'O NOME DEVE TER NO MÁXIMO 80 CARACTERES',

            'raca.required' => 'O CAMPO RAÇA DEVE SER OBRIGATÓRIO',
            'raca.string' => 'A RAÇA DEVE SER UMA STRING',

            'idade.integer' => 'A IDADE DEVE SER UM NÚMERO INTEIRO',
            'idade.min' => 'A IDADE DEVE SER NO MÍNIMO 0',

            'nivel_de_ki.required' => 'O CAMPO NÍVEL DE KI DEVE SER OBRIGATÓRIO',
            'nivel_de_ki.integer' => 'O NÍVEL DE KI DEVE SER UM NÚMERO INTEIRO',
            'nivel_de_ki.min' => 'O NÍVEL DE KI DEVE SER NO MÍNIMO 1',
        ]);

        $personagem->update($data);

        // api
        return response()->json([$personagem, 'message' => 'Personagem atualizado com sucesso'], Response::HTTP_OK);

        // view web
        // return redirect()->route('index')->with('success', 'Personagem atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $personagem = $this->personagens->findOrFail($id);

        $personagem->delete();

        // api
        return response()->json(['message' => 'Personagem deletado com sucesso'], Response::HTTP_OK);

        // view web
        // return redirect()->route('index')->with('success', 'Personagem atualizado com sucesso');
    }
}
