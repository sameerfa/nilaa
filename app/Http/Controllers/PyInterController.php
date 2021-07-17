<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Session;
use App\Models\Programs;

class PyInterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      session::forget('file_name');
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
        session::put('file_name', "codes/".rand().".txt");
        $fname = session::get('file_name');
      }

      $check = Programs::where('file_name',$fname)->first();
      if(empty($check->id)){
        $program  = new Programs;
        $program->user_id = auth()->user()->id;
        $program->file_name = $fname;
        $program->name  = $request->input('name');
        $program->save();
      }
      $pname  = $request->input('name');

      $myfile     = fopen($fname, "w");
      $txt = $request->input('code');

      fwrite($myfile, $txt);
      fclose($myfile);

      $filepath = '"'.$fname.'"';

      $scriptpy = 'nila00\run.py '.$filepath;
      $command  = escapeshellcmd($scriptpy);
      $pre_output   = shell_exec($command);
      if(strpos($pre_output, "\n0\n")){
        $output = substr($pre_output, 0, strpos($pre_output, "\n0\n"));
      }else if(strpos($pre_output, "[")){
        $output = substr($pre_output, 0, strpos($pre_output, "["));
      }else{
        $output = $pre_output;
      }


      return view('interpreter', compact('output','txt','pname'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $program = Programs::where('id',$id)->where('user_id',auth()->user()->id)->first();
      if(empty($program->id)){ return redirect('404'); }
      session::put('file_name', $program->file_name);
      $fname = session::get('file_name');
      $pname  = $program->name;

      $file     = fopen($fname, "r");
      while(! feof($file)) {
        $txt = fgets($file);
      }
      fclose($file);

      return view('interpreter', compact('txt','pname'));
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
