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

Route::get('/pick', function ($level="pick") {
    return view('picker',compact('level'));
});


Route::get('/feud', function(Request $request){
    return view('family-feud');

});

Route::post('/get/choice', function(Request $request)
{
    
   $choice =  DB::table('choices')
        ->where('choice', 'like', $request->name)
        ->get();
    if($choice->count() > 0)
    {
        return response()->json(['msg' => $choice->first()->choice]);
    }else{
        return response()->json(['msg' => 'X']);
    }

    
});

Route::get('/pick/{level}', function($level) {
// Picker for area / region

    // $ctr = Counter::first()->counter;
    // $ctr++; 
    // // var_dump($ctr);
    // if ($level == 'area') {
    //   Counter::first()->update(['counter' => $ctr]);
    //   $person = Person::where('area_id', $ctr)->inRandomOrder()->limit(1)->first();  
    //   \Log::info($person->name. ' '.$person->branch);
    //   return response()->json(['winner'=>$person],200);
    // }elseif($level == 'region') {
   


    //   Counter::first()->update(['counter' => $ctr]);
    //   $person = Person::where('region_id', $ctr)->inRandomOrder()->limit(1)->first();  
    //   \Log::info($person->name. ' '.$person->branch);
    //   return response()->json(['winner'=>$person],200);

    // }
// End

    
    // Counter::first()->update(['counter' => $ctr]);
   	// $person =Client::where('picked',false)->inRandomOrder()->limit(1)->first();

	// $person->update(['picked' => true]);





// LECC
    

// RANDOM PICKER FOR MORE THAN 1

     // $persons =Client::inRandomOrder()->limit(30)->get();


     // foreach ($persons as $person) {
     //     \Log::info($person->name. ' '.$person->branch);
     // }

// END FOR MORE THAN 1







// RANDOM PICKER FOR 1
   	
   $persons =Client::inRandomOrder()->where('picked',false)->limit(1)->first();  
   // f  
    // \Log::info($person->name. ' '.$person->branch);
   // dd($persons);
     
         \Log::info($persons->name);
     $persons->update(['picked' => true ]);
    // $person->update(['picked'=> true]);
    
// END FOR 1








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
