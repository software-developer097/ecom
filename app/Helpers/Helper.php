<?php

namespace App\Helpers;

use App\Log;
use App\User;
use App\Models\upload;
use App\Models\Ecommerce;
use DB;

class Helper
{
     

    public static function agent_name($image) 
       {

        //  dd($id);
      $agentName = Upload::where('id',$image)->get();
      //dd($agentName);
      if($agentName->count()>0){
        
        $agent_name = $agentName[0];
      }else{
        $agent_name = "";
      }

      return $agent_name;
          
   }
  //  public static function datail($id)
  //  {
  //    $detail = Ecommerce::find($id)->get();
     
  //    return $detail;
  //  }
		
}
