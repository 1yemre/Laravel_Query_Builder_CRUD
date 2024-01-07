<?php

namespace App\Http\Controllers;
use Illuminate\support\Collection;
use Illuminate\Http\Request;
use Validator;
use App\Rules\Age;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
      public function index()
      {
        // return view("Course");

        $course= DB::table("course")
           ->orderBy('course_must','DESC')
           ->get();

         //  dd($course);
         return view('course')->with('course',$course);
       
      }

      public function courseInsert()
      {

         return view('courseInsert');   
      }
    
      public function courseInsertPost(Request $request)
      {
         $request->validate([
            'course_title'=>'required',
            'course_content'=>'required',
            'course_must'=>'required',
         ]);
        // return  $request->all();

       $result= DB::table('course')->insert([
            'course_title'=>$request->course_title,
            'course_content'=>$request->course_content,
            'course_must'=>$request->course_must,

        ]);

      if($result)
      {
          return back()->with('success','Kayıt Başarılı');  
      }
      else{
             return back()->with('error','Hata oluştu');
      }
        

      }



       public function courseUpdate($id)
       {    /*  1.yol 
            $course= DB::table('course')
            ->where('id',$id)
            ->first();

            return view('courseUpdate',compact('course'));

            */
            $course= DB::table('course')
            ->find($id);
            return view('courseUpdate',compact('course'));



       }


       public function courseUpdatePost(Request $request,$id)
       {
          $request->validate([
             'course_title'=>'required',
             'course_content'=>'required',
             'course_must'=>'required',
          ]);
         // return  $request->all();
 
        $result= DB::table('course')
        ->where('id',$id)
        ->update([
             'course_title'=>$request->course_title,
             'course_content'=>$request->course_content,
             'course_must'=>$request->course_must,
 
         ]);
 
       if($result)
       {
           return back()->with('success','Kayıt Başarılı');  
       }
       else{
              return back()->with('error','Hata oluştu');
       }
         
 
       }
      
      public function courseDelete($id){
         DB::table('course')
         ->where('id',$id)
         ->delete();



        return back();
      }






////////////////////





      
    public function courseInsert2(request $request)
     {
            //dd($request);
            //return $request->all();
            //return $request->input();
            //return $request->input('course_title');
            // echo $request->course_title;

      
     //return $request->path(); // formun gonderilidiği yolu alır. 

     //return $request->is();// gelen istek yolunu verilen desenle eşleşip eşleşmediğini kontrol eder.
      /*
            if($request->is('courseInsert'))
            {
                  return $request->all();
            }else{
                  echo "Beklenmeyen istek";
            }

      */
    

            /*
            // return $request->url();//url verir

            if($request->isMethod('post')) //methodu dondurur
            {
                  echo "post";
            }else{
                  echo "get";
            }
            
                  */

            //return $request->except(['course_title']);//  Ayıklamak için kullanılır belirtilen değer çıkartılır.

     

            //return  $request->only(['course_title']);//sadece izin verilenleri gösterir

            
            /*

            if($request->has('course_title')) // boyle bir name'de eleman varmı diye kontrol eder.
            {
                    echo "değer var";
            }

            */

    /*
            if($request->filled('course_title')) // değer olup olamdığını kontrol eder.
            {
                    echo "değer var";
            }
     */     

     /*
       $request->flashOnly('course_content'); //sadece belitilenin session'unu tutar.
      if($request->filled("course_title"))
      {
             $request->all();
      }else{
             echo "değer yok ";
      }
 
      return back();
    */


    /*
    $request->flashExcept('course_must');// birden çok  alan olduğunda sadece belirtilenin tutulmasını engeller.
    return back();
   */


      //return $request->file('course_file');

      //dd($request->file('course_file'));



///response  operations

      //return response("Emre Enes Yenen",200)->header("content-type","Text");
      //return response("Emre Enes Yenen",200)->header("content-type","application/pdf");// pdf dondurur.

      //return redirect('/Course');//yonledirme yapar.

      // return back();//mevcut sayfaya geri doner.

      
      // return  redirect()->route('course_get');

      /*
            if($request->hasFile('course_file'))
            {
                  echo "işlem başarılı";
            } else{
                  return back()->with("status","dosya eklemelisiniz"); //session oluşturur.
            }

      */

      // return $request->all();

      /*
            $collection=collect([1,2,3,4]);
            return  $collection->all();
      */ 

     }
     


     public function courseInsert3(request $request)
     {
       
        /*
          $validatedData=$request->validate([
               "course_title"=>"bail|required|min:5",
               "course_content"=>"required"

          ]);

         dd($validatedData);
         return $request->all();
         */
        /*
          $mesaj=[
              "course_title.required"=>"Bu Alanı  :attribute   giremek zorunlu değil",
              "miz "=>"düşük karakter sayısı ",
          ];
         
         $validator = Validator::make($request->all(),[
              'course_title' =>"sometimes|required",
              'course_content' =>"arequired"
         ],$mesaj)->validate();

           */

         /*
         if ($validator->fails())
         {
            return "Doğrulama işlemlerinde hata var!";
         }
         
         */
            /*
           $validator->after(function ($validator){

                      $validator->errors()->add("EkBilgi","Ben Sonradan Dahil edildim");
           })->validate();

         */
  
         


     

         /*
         $validator = Validator::make($request->all(),[
            'course_title' =>"sometimes|required",
            'course_content' =>"arequired",
            'course_must' =>["required",
                   function($attribute,$value,$fail)
                   {   if($value>=18){
                        $fail($attribute.'18 yaşından Buyukler Kayıt Olamaz!');
                       }
                   },
            
            ]
       ])->validate();
       
           */

   /*
           $validator = Validator::make($request->all(),[
            'course_title' =>"sometimes|required",
            'course_content' =>"required",
            'course_confirm' =>"required",
            ])->validate();
   */



      /*

      $validator = Validator::make($request->all(),[
            'course_title' =>"sometimes|active_url",
            'course_content' =>"required",
            'course_confirm' =>"required",
            ])->validate();
      */

  

      /*
      $validator = Validator::make($request->all(),[
            'course_title' =>"sometimes",
            'course_date' =>"after:10/5/2023",// bu tarihten sonra bir tarih gir anlamına gelir.   'course_date' =>"befor:10/5/2023" tam tersi onceki tarih olmalıdır...
            'course_content' =>"required",
            'course_confirm' =>"required",
            ])->validate();
      
       */


     /*
      $validator = Validator::make($request->all(),[
            'course_title' =>"sometimes",
            'course_date' =>"after:10/5/2023",
            'course_content' =>"required",
            'course_confirm' =>"array",
            ])->validate();
      

      */
      /*

      $validator = Validator::make($request->all(),[
            'course_title' =>"email:rfc,dns", // mail kontrol eder alan adı üzerinden  gider alan adı varsa tüm  mail adreslerini var kabul eder.
            'course_date' =>"after:10/5/2023",
            'course_content' =>"required",
            'course_confirm' =>"array",
            ])->validate();
 */

     /*
      $validator = Validator::make($request->all(),[
            'password'=>'confirmed'
            
            ])->validate();

    */

/*
    $validator = Validator::make($request->all(),[
      'password'=>'file'
      
      ])->validate();

*/

   /*
  $validator = Validator::make($request->all(),[
      'course_file'=>'mimes:jpeg,png',
      
      ])->validate();

*/
 
/*
$validator = Validator::make($request->all(),[
      'course_title'=>'filled',// required ile benzer mantıkta
      
      ])->validate(); 

*/



/*
  $validator = Validator::make($request->all(),[
      'course_file'=>'image',//  sadece resim olan dosyaların girişine izin verir.
      
      ])->validate(); 
*/
/*
  $validator = Validator::make($request->all(),[
      'password'=>'same:password2',// iki alanın doğruluğunu teğit eder. şifre doğrulama mantığıyla aynı 
      
      ])->validate(); 
*/

/*
      $validator = Validator::make($request->all(),[
      'password'=>'same:password2',// iki alanın doğruluğunu teğit eder.
            
       ])->validate(); 
      
*/








///// database section//////














     }
     

 



}
