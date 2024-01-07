<?php

use App\Http\Controllers\page1Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('emre');

/*
Route::get('/newpage', function () {
    return view('newpage');
});
*/
/*
Route::match(['get','post'],"post", function () {
    return view('newpage');
});

Route::any("post", function () {
    return view('newpage');
});

*/

// route parametre gonderimi 
/*
Route::get('newpage/{emrah?}/{yuksel?}', function ($ad=null,$soyad=null) {
    return $ad."".$soyad;
});
*/

/*
// parametre kısıtlamaları
Route::get('newpage/{ad}/{soyad}', function ($ad,$soyad) {
    return $ad."".$soyad;

//})->where('ad','[0-9]+');
})->where(['ad'=>'[a-z]+','soyad'=>'[azA-z]+']);

*/
/*
//isimlendirme kısayol kullanımı 
Route::get('newpage/{ad}/{soyad}', function ($ad,$soyad) {
    return $ad."".$soyad;

//})->where('ad','[0-9]+');
})->where(['ad'=>'[a-z]+','soyad'=>'[azA-z]+']) ->name('newpageParam');

Route::get('post', function () {
    return view('newpage');
})->name('homepage');

*/


/*

// contorller eğlemlerine route tanımlaması 
Route::get('show','App\Http\Controllers\page1Controller@show');
Route::get('page','App\Http\Controllers\page1Controller@index');
//Route::get('page2','App\Http\Controllers\Backend\page2Controller@index2');


Route::get('page3','App\Http\Controllers\Frontend\pageController@index');


// route gruplama
Route::group(['namespace'=>'App\Http\Controllers\Backend'],function(){
     Route::get('page2','page2Controller@index2');

    Route::get('page3','page3Controller@index2');

    Route::get('page4','page4Controller@index2');

    Route::get('single','SingleController');


    Route::get('page2/{ad?}/{soyad?}','page2Controller@index2');


    Route::get('page3','page3Controller@index2')->name('backendpage3');

});

*/



///////////View Yapısı 


// Route::get('/', function () {
//     return view('Course');
// });

// Route::get('xxx','App\Http\Controllers\Backend\page3Controller@index3');


/*
Route::get('/backend', function () {
         return view('Backend.index');
 });
*/


//  Route::get('/page', function () {
//     $data=[
//            'ad'=> 'emre',
//            'Soyad'=> 'Yenen',
//     ];
//     /*
//     return view('page',$data)->with($data);
//     return view('page',$data)->with//(diziyi yazabiliriz);
//     return view('page',$data)->with('ad','emre');
//     */

//     //return view('page',compact('data'));  // direkt dizi yi yollar ve foreach ile donerek
// });

/*

Route::get("page", function () {
    return view('page');
});


Route::get("page2", function () {
    return view('index');
});

Route::get("contact", function () {
    return view('contact');
});

*/



Route::get('/page1',function()
{
     // return view('course');
      //return response()->json([1=>'Emre',2=>'Enes']) ;

      //return redirect('/download/file.txt');
      // return response()->download('download/file.txt');

      //return response()->HomeMessage("Bakımdayız");


     //  return url()->full();
         
});
/*
Route::get('/collection',function(){
       $collection=collect([1,2,3,4]);
       return  $collection->all();
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->avg();//dizdeki elemanlarının ortalası});
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->count();//dizdeki elemanların sayısı
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->min();//max
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->dd();
});

*/
/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->diff('40');// dizideki eşleşmeyen değerleri verir.
});
*/
/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->duplicates();//d bir dizide tekrar eden değerli verir

});
*/
/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->except();//dizide verilen indisli değerleri çıkartır    
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->only('0');//dizide verilen indis değerini geri dondürür
});
*/
/*
Route::get('/collection',function(){
    $collection=collect([10,200,30,455]);
    $filtered=$collection->filter(function($value,$key){
        return $value >50;
});
  return $filtered->all();
});
// filtreleme yapar 

*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
    return  $collection->first();// ilk değeri dondurur last ()-> sson değeri dondurur.
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([
        'ad'=>'emre',
        'soyad'=>'Yenen'
    ]);
    return $collection->flatten();  // çok boyutlu bir diziyi tek boyutlu diziye çevirir.
   
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([
        'ad'=>'emre',
        'soyad'=>'Yenen'
    ]);
    return $collection->forget('ad');  //  belirtilen dizi elemanını diziden çıkartır.
   
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([
        'ad'=>'emre',
        'soyad'=>'Yenen'
    ]);
    return $collection->get('ad');  // belirtilen diziyi  elemanını döndürür. 
   
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([
        'ad'=>'emre',
        'soyad'=>'Yenen'
    ]);
     return "sonuc".$collection->isEmpty(); // boşsa  1 deeğerini dondur .
    //  boş değilse isNonEmpty 
    });
*/

/*
    Route::get('/collection',function(){
        $collection=collect([
            ['id'=> '1', 'ad'=>'emre'],
            ['id'=> '2', 'ad'=>'enes']
          
        ]);
        $plucked= $collection->pluck('ad'); 
        return $plucked->all();// dizinin belirtilen anahtar değerini alır.
       
    });
    
*/

/*
Route::get('/collection',function(){
    $collection=collect([
        ['id'=> '1', 'ad'=>'emre'],
        ['id'=> '2', 'ad'=>'enes']
      
    ]);
         $collection->pop();// dizinin son elemanını siler 
          return $collection->all();
   
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4]);
         $collection->prepend(5);// dizinin başına  eleman ekler
          return $collection->all();
   
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([
        'ad'=>'emre',
      'soyad'=>'Yenen',
      'course'=>'laravel'
      
]);
         $collection->pull("soyad");// dizideki bir elemanı  anahtar belirterek kaldırır.
          return $collection->all();
   
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4,5,6,7,8,9]);
          return $collection->random();//dizi  içinden bir değeri random olarak dondurur.
   
});

*/


/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4,5,6,7,8,9]);
          return $collection->random();//dizi  içinden bir değeri random olarak dondurur.
   
});

*/


/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4,5,6,7,8,9]);
          return $collection->search(21);
   
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4,5,6,7,8,9]);
          return $collection->shuffle();// dizi elemanlarını rast gele karıştırır.
    
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4,5,6,7,8,9]);
          return $collection->sort()->values()->all();// diziyi  sıralar 
    
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([
        ['id'=> '1', 'ad'=>'emre'],
        ['id'=> '2', 'ad'=>'enes']
      
    ]);
         $collection->pop();// dizinin son elemanını siler 
          return $collection->sortBy('ad')->values();// a-z sıralama yapar.
   
});

*/

/*

Route::get('/collection',function(){
    $collection=collect([
        ['id'=> '1', 'ad'=>'emre'],
        ['id'=> '2', 'ad'=>'enes']
      
    ]);
         $collection->pop();// dizinin son elemanını siler 
          return $collection->sortByDesc('ad')->values();// a-z sıralama yapar.
   
});

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,4,5,6,7,8,9]);
          return $collection->sum();//dizideki elemanları toplar
    
});
*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,1,5,6,1,8,9]);
          return $collection->sum();//dizideki elemanları toplar
    
});

*/

/*
Route::get('/collection',function(){
    $collection=collect([1,2,3,1,5,6,1,8,9]);
          return $collection->unique()->values()->all();// aynı değerleri silerek benezersiz bir dizi oluşturur.
    
});

*/



//////db section ////////





/*
Route::get('/page1','App\Http\Controllers\page1Controller@index');

*/





Route::get('course','App\Http\Controllers\CourseController@index')->name('courseGet');

Route::get('courseInsert','App\Http\Controllers\CourseController@courseInsert')->name('courseInsert');

Route::post('courseInsertPost','App\Http\Controllers\CourseController@courseInsertPost')->name('courseInsertPost');



Route::get('courseUpdate/{id}','App\Http\Controllers\CourseController@courseUpdate')->name('courseUpdate');


Route::post('courseUpdatePost/{id}','App\Http\Controllers\CourseController@courseUpdatePost')->name('courseUpdatePost');



Route::get('courseDelete/{id}','App\Http\Controllers\CourseController@courseDelete')->name('courseDelete');







