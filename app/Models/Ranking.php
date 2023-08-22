<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Ranking extends Model
{
    use HasFactory;


    public static function getbobot($id_alternatif)
    {
     $data = DB::select("select SUM(bobot)  as bobot FROM nilaiReferensi WHERE id_alternatif =  '".$id_alternatif."'" );
     return $data[0]->bobot;
    }
 
    public static function savingdata($id_alternatif,$bobot)
    {
 
     try {
       
         $save =  DB::table('ranking')->insert([
             'id_alternatif' => $id_alternatif,
            
             'bobot' => $bobot
         ]);
        
         return "Success";
     } catch (\Exception $e) {
         return $e;
     }
 
    
    }
    public static function deletedata($id_alternatif)
    {
 
     try {
         $save = DB::table('ranking')
         ->Where("id_alternatif",$id_alternatif)
         ->delete();
 
         return "Success";
     } catch (\Exception $e) {
         return $e;
     }
 
    
    }

    public static function getall()
    {
     $data = DB::select("select * FROM ranking LEFT JOIN siswas ON ranking.id_alternatif = siswas.nisn" );
     return $data;
    }
}

