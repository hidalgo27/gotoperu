<?php

namespace App\Http\Controllers;

use App\TCategoria;
use App\TDestino;
use App\TPaquete;
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 1)->get();
        $paquete_f = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 2)->get();
        $paquete_mg = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 3)->get();
        $paquete_m = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 4)->get();
        $categoria = TCategoria::get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();


        return view('page.home', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'paquete_f'=>$paquete_f, 'paquete_mg'=>$paquete_mg, 'paquete_m'=>$paquete_m, 'categoria'=>$categoria]);

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

    public function packages()
    {
        $categoria = TCategoria::get();
        $paquete_categoria = TPaqueteCategoria::with('paquete')->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.packages',['categoria'=>$categoria, 'paquete_categoria'=>$paquete_categoria, 'paquete_destinos'=>$paquete_destinos]);
    }
    public function destinations()
    {
        $destinos = TDestino::get();
        return view('page.destinations', ['destinos'=>$destinos]);
    }
    public function destinations_sow($title)
    {
        $destinations = str_replace('-', ' ', strtoupper($title));

        $destinos = TDestino::get();
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes')->where('estado', 1)->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();

        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($destinations) { $query->where('nombre', $destinations);}])->get();
//        dd($paquetes_destino);
        return view('page.destinations-show', ['paquetes_de'=>$paquetes_de, 'paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos, 'destinos'=>$destinos, 'title'=>$destinations]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($titulo)
    {
        $title = str_replace('-', ' ', strtoupper($titulo));
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $paquete = TPaquete::with('itinerario','paquetes_destinos', 'precio_paquetes')->where('titulo', $title)->get();
        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }
    public function mail()
    {
        $from = 'info@gotoperu.com';

        $category = $_POST['txt_category'];
        $number = $_POST['txt_number'];
        $days = $_POST['txt_days'];
        $date = $_POST['txt_date'];
        $description = $_POST['txt_description'];

        $name = $_POST['txt_name'];
        $email = $_POST['txt_email'];
        $phone = $_POST['txt_phone'];

//        dd($category, $number, $days, $date, $description, $name, $email, $phone);

        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('Inquire GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru');
            });


            Mail::send(['html' => 'notifications.page.admin-form-design'], [
                'category' => $category,
                'number' => $number,
                'days' => $days,
                'date' => $date,
                'description' => $description,
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'GotoPeru')
                    ->subject('Inquire GotoPeru.Travel')
                    /*->attach('ruta')*/
                    ->from('info@gotoperu.com', 'GotoPeru.Travel');
            });


            return 'Thank you for contact us, you will receive a reply in less than 24 hours, gurantee. :)';

        }
        catch (Exception $e){
            return $e;
        }

//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
