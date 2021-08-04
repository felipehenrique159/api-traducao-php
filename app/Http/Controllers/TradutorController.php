<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarDadosTraducao;
use Illuminate\Http\Request;
use \Statickidz\GoogleTranslate;

class TradutorController extends Controller
{
    public function traduzirTexto(ValidarDadosTraducao $request)
    {
        $de = $request->de;
        $para = $request->para;
        $texto = $request->texto;

        $trans = new GoogleTranslate();
        $result = $trans->translate($de, $para, $texto);

        return $result;
    }
}
