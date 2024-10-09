<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\FormContactRequest;
use Illuminate\Support\Facades\Mail;

class FormContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FormContactRequest $request)
    {
        $trainer = "b2b@pdachwitz.pl";
        $trainee = "b2b@artforma.eu";

        Mail::send(
            'email.b2b',
            [
                'names' => $request->input('names', ""),
                'messageMail' => $request->input('message', ""),
                'phone' => $request->input('phone', ""),
                'mail' => $request->input('email', ""),
            ],
            function ($m) use ($trainee, $trainer) {
                $m->from($trainer);
                $m->to($trainee)->subject("B2B Artforma - Zusammenarbeit");
            }
        );

        return response([
            'msg' => 'success'
        ], 200);
    }
}
