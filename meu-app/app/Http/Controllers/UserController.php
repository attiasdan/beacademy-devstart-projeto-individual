<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;

use function GuzzleHttp\Promise\queue;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    // public function show($id)
    // {
    //     if (!$user = User::find($id))
    //         return redirect()->route('users.index');

    //     return view('users.show', compact('user'));
    // }
    public function create() {
        return view('users.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        
        $this->model->create($data);

        return redirect()->route('users.index');
    }
    public function update(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        
        $user->update($data);

        return redirect()->route('users.index');
    }
}
