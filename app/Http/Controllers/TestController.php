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


class TestController extends Controller
{

    public function getpliegues_perimetros()
    {
        return view('test.pliegues_perimetros');
    }

    public function getfms()
    {
        return view('test.fms');
    }

    public function getplancha_prono()
    {
        return view('test.plancha_prono');
    }

    public function getburpees()
    {
        return view('test.burpees');
    }

    public function getdomin_susp_isométrica()
    {
        return view('test.dom_sus_isometrica');
    }

    public function getruffier()
    {
        return view('test.ruffier');
    }

    public function getcooper()
    {
        return view('test.cooper');
    }

    public function getsalto_vertical()
    {
        return view('test.salto_vertical');
    }

    public function getrockport()
    {
        return view('test.rockport');
    }

    public function getvpliegues_perimetros()
    {
        return view('test.visualizacion.pliegues_perimetros');
    }

    public function getvfms()
    {
        return view('test.visualizacion.fms');
    }

    public function getvplancha_prono()
    {
        return view('test.visualizacion.plancha_prono');
    }

    public function getvburpees()
    {
        return view('test.visualizacion.burpees');
    }

    public function getvdomin_susp_isométrica()
    {
        return view('test.visualizacion.dom_sus_isometrica');
    }

    public function getvruffier()
    {
        return view('test.visualizacion.ruffier');
    }

    public function getvcooper()
    {
        return view('test.visualizacion.cooper');
    }

    public function getvsalto_vertical()
    {
        return view('test.visualizacion.salto_vertical');
    }

    public function getvrockport()
    {
        return view('test.visualizacion.rockport');
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
}
