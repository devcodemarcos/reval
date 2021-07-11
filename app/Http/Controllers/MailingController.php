<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Mail\ContactFormMail;

class MailingController extends Controller
{
    public function contactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'phone' => 'nullable|digits:10',
            'message' => 'required|min:10|max:1000'
        ]);

        if ($validator->fails()) {
            return redirect('/contacto#cotizacion')->withErrors($validator)->withInput();
        }

        $data = (object) [
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'message' => $request->post('message'),
        ];

        Mail::to('ventas@valvulasreval.mx')
            ->cc($request->post('email'))
            ->send(new ContactFormMail($data));

        return redirect('/contacto#cotizacion')->with('success', '¡Mensaje enviando correctamente!');
    }
}
