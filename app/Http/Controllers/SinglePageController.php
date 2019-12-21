<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    /*#####################################################
    #------------------------------------------------------
    # Function index
    #-------------------------------------------------------
    #
    # @_CH17: 
    #
    #
    #
    #
    #####################################################*/
    public function index(){

        return view('layouts.app');
    
    }
}
