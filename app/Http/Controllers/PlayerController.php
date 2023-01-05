<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Player::all();
        return view('players.index', ['players' => $players]);
    }

    public function comments($id)
    {
        $comments = Comment::where('player_id', $id)->with('post')->orderBy('id', 'desc')->paginate(10);
        $player = Player::find($id);
        return view('players.comments', ['player' => $player, 'comments' => $comments]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $player = Player::find($id);
        $posts = $player->posts()->orderBy('id', 'desc')->paginate(10);
        $user = User::find($player->user_id);
        $isAdmin = $user->isAdmin();
        return view('players.show', ['player' => $player, 'posts' => $posts, 'isAdmin' => $isAdmin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
    
        return view('players.edit', ['player' => $player]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);

        $validationRules = [
            'position' => ['sometimes', 'integer'],
            'rank' => ['sometimes', 'in:immortal,divine,ancient,legend,archon,crusader,guardian,herald,uncalibrated'],
            'country' => ['sometimes', 'string', 'max:255'],
            'profile_picture' => ['sometimes', 'image'],
        ];
    
        if ($request->filled('alias')) {
            if ($request->alias != $player->alias) {
                $validationRules['alias'] = ['string', 'max:255', Rule::unique('players')];
                $player->alias = $request->alias;
            } 
        } else{
            $player->alias = $player->alias;
        }
    
        $request->validate($validationRules);
    
        $player->position = $request->filled('position') ? $request->position : $player->position;
        $player->rank = $request->filled('rank') ? $request->rank : $player->rank;
        $player->country = $request->filled('country') ? $request->country : $player->country;
        
        $player->user_id = $request->user_id;
    
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $fileLocation = ('profile_pictures/' . $filename);
            $storagePath = storage_path('app/public/profile_pictures');
            $file->move($storagePath, $filename);
            $player->profile_picture = $fileLocation;
        }
    
        $player->save();
    
        return redirect()->route('players.show', ['id' => $id])->with('success', 'Profile updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
