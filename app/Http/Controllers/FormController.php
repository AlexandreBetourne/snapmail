<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;

class FormController extends Controller
{
  public function index()
  {
    return view('welcome');
  }

  public function post(Message $message, Request $request)
  {
    $datas = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message'),
        'key' => md5(uniqid(true))
    ];

    $message->forceCreate($datas);

    // NE FONCTIONNE PAS
    // Mail::send('email', $data, function ($m) use ($data) {
    //     $m
    //     ->to($data['email'], $data['name']
    //     ->subject("hey"));
    // });
    return view('email', $datas);
  }

  public function mail(Message $message, Request $request, $id)
  {
    $m = $message->where('key', $id)->firstOrFail();
    $m->delete();
    return view('mail', ['data' => $m]);

  }
}
