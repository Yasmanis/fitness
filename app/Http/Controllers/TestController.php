<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlieguesPerimetrosTest;
use App\FMSTest;
use App\PlanchaPronoTest;
use App\BurpeesTest;
use App\DominadaSuspensionIsometricaTest;
use App\CooperTest;
use App\RuffierTest;
use App\SaltoVerticalTest;
use App\RockportTest;
use App\UserFicha;


class TestController extends Controller
{

    public function getpliegues_perimetros()
    {
        $user_fichas = UserFicha::all();
        return view('test.pliegues_perimetros',compact('user_fichas'));
    }

    public function getfms()
    {
        $user_fichas = UserFicha::all();
        return view('test.fms',compact('user_fichas'));
    }

    public function getplancha_prono()
    {
        $user_fichas = UserFicha::all();
        return view('test.plancha_prono',compact('user_fichas'));
    }

    public function getburpees()
    {
        $user_fichas = UserFicha::all();
        return view('test.burpees',compact('user_fichas'));
    }

    public function getdomin_susp_isométrica()
    {
        $user_fichas = UserFicha::all();
        return view('test.dom_sus_isometrica',compact('user_fichas'));
    }

    public function getruffier()
    {
        $user_fichas = UserFicha::all();
        return view('test.ruffier',compact('user_fichas'));
    }

    public function getcooper()
    {
        $user_fichas = UserFicha::all();
        return view('test.cooper',compact('user_fichas'));
    }

    public function getsalto_vertical()
    {
        $user_fichas = UserFicha::all();
        return view('test.salto_vertical',compact('user_fichas'));
    }

    public function getrockport()
    {
        $user_fichas = UserFicha::all();
        return view('test.rockport',compact('user_fichas'));
    }

    public function getvpliegues_perimetros()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.pliegues_perimetros',compact('user_fichas'));
    }

    public function getvfms()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.fms',compact('user_fichas'));
    }

    public function getvplancha_prono()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.plancha_prono',compact('user_fichas'));
    }

    public function getvburpees()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.burpees',compact('user_fichas'));
    }

    public function getvdomin_susp_isométrica()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.dom_sus_isometrica',compact('user_fichas'));
    }

    public function getvruffier()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.ruffier',compact('user_fichas'));
    }

    public function getvcooper()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.cooper',compact('user_fichas'));
    }

    public function getvsalto_vertical()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.salto_vertical',compact('user_fichas'));
    }

    public function getvrockport()
    {
        $user_fichas = UserFicha::all();
        return view('test.visualizacion.rockport',compact('user_fichas'));
    }

    public function storeplieguesperimetrosTest(Request $request)
    {
        PlieguesPerimetrosTest::create($request->all());
        return back()->with('infoplieguesperimetrosTest', 'Test Salvado');
    }

    public function storefmsTest(Request $request)
    {
        FMSTest::create($request->all());
        return back()->with('infofmsTest', 'Test Salvado');
    }

    public function storeplanchapronoTest(Request $request)
    {
        PlanchaPronoTest::create($request->all());
        return back()->with('infoplanchapronoTest', 'Test Salvado');
    }

    public function storeburpeesTest(Request $request)
    {
        BurpeesTest::create($request->all());
        return back()->with('infoburpeesTest', 'Test Salvado');
    }

    public function storedom_susp_isometricoTest(Request $request)
    {
        DominadaSuspensionIsometricaTest::create($request->all());
        return back()->with('infodom_susp_isometricoTest', 'Test Salvado');
    }

    public function storecooperTest(Request $request)
    {
        CooperTest::create($request->all());
        return back()->with('infostorecooperTest', 'Test Salvado');
    }

    public function storeruffierTest(Request $request)
    {
        RuffierTest::create($request->all());
        return back()->with('infostoreruffierTest', 'Test Salvado');
    }

    public function storesalto_verticalTest(Request $request)
    {
        SaltoVerticalTest::create($request->all());
        return back()->with('infosalto_verticalTest', 'Test Salvado');
    }

    public function storerockportTest(Request $request)
    {
        RockportTest::create($request->all());
    }

    public function vpliegues_perimetros(Request $request)
    {
        $valores_test = PlieguesPerimetrosTest::where('user_id', $request->user_id)->orderBy('date')->get();

        $valores_tripcipital = $valores_test->pluck('tripcipital');
        $valores_plieguesgemelo = $valores_test->pluck('plieguesgemelo');
        $valores_subescapular = $valores_test->pluck('subescapular');
        $valores_suprailiaco = $valores_test->pluck('suprailiaco');
        $valores_abdominal = $valores_test->pluck('abdominal');
        $valores_brazo = $valores_test->pluck('brazo');
        $valores_pecho = $valores_test->pluck('pecho');
        $valores_abdomen = $valores_test->pluck('abdomen');
        $valores_cadera = $valores_test->pluck('cadera');
        $valores_muslo = $valores_test->pluck('muslo');
        $valores_perimetrogemelo = $valores_test->pluck('perimetrogemelo');

        return back()->with('valores_test',$valores_test)
                     ->with('user_id',$request->user_id)
                     ->with('valores_tripcipital',$valores_tripcipital)
                     ->with('valores_plieguesgemelo',$valores_plieguesgemelo)
                     ->with('valores_subescapular',$valores_subescapular)
                     ->with('valores_suprailiaco',$valores_suprailiaco)
                     ->with('valores_abdominal',$valores_abdominal)
                     ->with('valores_brazo',$valores_brazo)
                     ->with('valores_pecho',$valores_pecho)
                     ->with('valores_abdomen',$valores_abdomen)
                     ->with('valores_cadera',$valores_cadera)
                     ->with('valores_muslo',$valores_muslo)
                     ->with('valores_perimetrogemelo',$valores_perimetrogemelo);
    }
}
