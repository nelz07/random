<?php

use App\Models\Branch;
use App\Models\Choice;
use App\Models\Client;
use App\Models\Person;
use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

// BRANCH PICKER
// Route::get('/branch', function () {
//     return view('branch');
// });

// Route::get('/get/branch',function(){

//      $branch = Branch::inRandomOrder()->limit(1)->first();

//     return response()->json(['winner'=>$branch],200);

// });

// END PICKER

// EMPLOYEES RAFFLE PICKER

Route::get('/pick/{type}/{level}', function ($type,$level) {
    
    return view('picker',compact(['level','type']));
});




Route::get('/get/{type}/{level}', function($type,$level) {

    $regions = ['main_office','slo','nlo','visayas','mindanao','ncr'];
   	
    // $counter = Counter::first();
    // if($counter->counter == 5){
    //     $persons = Client::find(21);
    //     $counter->update(['counter' => $counter->counter+1]);
    //     return response()->json(['winner'=>$persons],200);
    // }
    

    if ($type == 'region') {
        $persons =Client::inRandomOrder()->where('picked',false)->where('region',$level)->limit(1)->first();  
    }

    if ($type == 'area') {
        $persons =Client::inRandomOrder()->where('picked',false)->where('area',$level)->limit(1)->first();  
    }

    if ($type == 'all') {
        $persons =Client::inRandomOrder()->where('picked',false)->limit(1)->first();  
    }
    
    

   
//    $counter->update(['counter' => $counter->counter+1]);
  
    \Log::info($persons->name);
    $persons->update(['picked' => true ]);


    return response()->json(['winner'=>$persons],200);


});






Route::get('/upload/people',[PersonController::class,'showForm'])->name('show.form');
Route::post('/upload/people',[PersonController::class,'import']);

// Route::get('/picker/branch',function($limit){
//  $list = Branch::inRandomOrder()
//    ->limit($limit)
//    ->get();



//  return 'nice';
// });
