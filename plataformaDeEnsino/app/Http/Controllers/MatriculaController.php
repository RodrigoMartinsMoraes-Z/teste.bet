<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Professor;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Exibe uma lista de matrículas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Carrega todas as matrículas com seus relacionamentos
        $matriculas = Matricula::with(['aluno', 'curso', 'disciplina', 'professor'])->get();

        // Retorna a view 'matriculas.index' com as matrículas
        return view('matriculas.index', compact('matriculas'));
    }

    /**
     * Mostra o formulário para criar uma nova matrícula.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Carrega todos os alunos, cursos, disciplinas e professores
        $alunos = Aluno::all();
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        $professores = Professor::all();

        // Retorna a view 'matriculas.create' com os dados necessários
        return view('matriculas.create', compact('alunos', 'cursos', 'disciplinas', 'professores'));
    }

    /**
     * Armazena uma nova matrícula no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida os dados recebidos
        $validated = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'curso_id' => 'required|exists:cursos,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'professor_id' => 'required|exists:professores,id',
        ]);

        // Cria a matrícula com os dados validados
        Matricula::create($validated);

        // Redireciona para a lista de matrículas com uma mensagem de sucesso
        return redirect()->route('matriculas.index')->with('success', 'Matrícula criada com sucesso!');
    }

    /**
     * Exibe os detalhes de uma matrícula específica.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        // Carrega os relacionamentos da matrícula
        $matricula->load(['aluno', 'curso', 'disciplina', 'professor']);

        // Retorna a view 'matriculas.show' com a matrícula
        return view('matriculas.show', compact('matricula'));
    }

    /**
     * Mostra o formulário para editar uma matrícula existente.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        // Carrega todos os alunos, cursos, disciplinas e professores
        $alunos = Aluno::all();
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        $professores = Professor::all();

        // Retorna a view 'matriculas.edit' com a matrícula e os dados necessários
        return view('matriculas.edit', compact('matricula', 'alunos', 'cursos', 'disciplinas', 'professores'));
    }

    /**
     * Atualiza uma matrícula existente no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        // Valida os dados recebidos
        $validated = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'curso_id' => 'required|exists:cursos,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'professor_id' => 'required|exists:professores,id',
        ]);

        // Atualiza a matrícula com os dados validados
        $matricula->update($validated);

        // Redireciona para a lista de matrículas com uma mensagem de sucesso
        return redirect()->route('matriculas.index')->with('success', 'Matrícula atualizada com sucesso!');
    }

    /**
     * Remove uma matrícula do banco de dados.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        // Exclui a matrícula
        $matricula->delete();

        // Redireciona para a lista de matrículas com uma mensagem de sucesso
        return redirect()->route('matriculas.index')->with('success', 'Matrícula excluída com sucesso!');
    }
}
