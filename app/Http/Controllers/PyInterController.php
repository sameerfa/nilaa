<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Session;

class PyInterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('interpreter');
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
      $fname = session::get('file_name');
      if(empty($fname)){
        session::put('file_name', rand().".txt");
        $fname = session::get('file_name');
      }
      $myfile     = fopen($fname, "w"); // temporary file for induvidual users || save the file and keep it
      $txt = $request->input('code');
      //$txt = 'RUN("example.myopl")';
      //$txt = 'VAR A = 5';
      fwrite($myfile, $txt);
      fclose($myfile);

      $filepath = '"'.$fname.'"';

      $scriptpy = 'nila00\run.py '.$filepath;
      $command  = escapeshellcmd($scriptpy);
      $output   = shell_exec($command);

      /*
      #run script using process
      $process = new Process(['C:\Program Files\Python37\python.exe', $scriptpy]);
      $process->run();
      */

      return view('interpreter', compact('output','txt'));
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
