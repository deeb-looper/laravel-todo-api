<?php

namespace App\Http\Controllers\V1;

use App\Http\Resources\V1\TodoResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return TodoResource::collection(Todo::where('user_id', $request->user()->id)-> paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoRequest $request)
    {  
        $data = $request->all();
        $data['user_id'] = $request->user()->id;
        $todo = Todo::create($data);

        return new TodoResource($todo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Todo $todo)
    {
        if ($request->user()->id != $todo->user_id) {
            return abort(403, 'Unauthorized');
        }
        return new TodoResource($todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoRequest  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        if ($request->user()->id != $todo->user_id) {
            return abort(403, 'Unauthorized');
        }
        $todo->update($request->all());
        return new TodoResource($todo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Todo $todo)
    {
        if ($request->user()->id != $todo->user_id) {
            return abort(403, 'Unauthorized');
        }
        $todo->delete();
        return response('', 204);
    }
}
