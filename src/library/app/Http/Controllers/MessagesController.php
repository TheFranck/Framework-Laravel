<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message as Message;
use App\user as User;


class MessagesController extends Controller
{

  public function index()
  {
    $messages= Auth::user()->messages;
    return view('messages',['messages' => $messages]);
  }

  public function writeMessage()
  {
    $users= User::all();
    $userList = array();
    foreach ($users as $user) {
      $userList[$user->id] = $user->name;
    }
    return view('writeMessage',['users' => $userList]);
  }

  public function sendMessage(Request $request)
  {
    $message = new Message;
    $message->message = $request->message;
    $message->destinataire = $request->destinataire;
    $message->save();
    return redirect('/messages');
  }


}
