<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestNewsletter;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsletter(RequestNewsletter $request)
    {
        $newslatter = Newsletter::create([
            'email' => $request->email,
        ]);

        return back()->withSuccess('Subscripción completada');
    }
}
