<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Lista de cursos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('nome')->get();

        return view('courses.index', compact('courses'));
    }

    /**
     * Retorna o form de criação de curso
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Salva o registro no BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::create($request->all());

        return redirect(route('courses.index'));
    }

    /**
     * Mostra detalhes do curso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $course = Course::findOrFail($id);

        return view('courses.show', compact('course'));
    }

    /**
     * Mostra o form para edição do curso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $course = Course::findOrFail($id);
        (int) $dataInicio = substr($course->data_inicio, 0, 10);

        return view('courses.edit', compact('course', 'dataInicio'));
    }

    /**
     * Atualiza o curso no BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect(route('courses.index'));
    }

    /**
     * Apaga o curso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect(route('courses.index'));
    }
}
