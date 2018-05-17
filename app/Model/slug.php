<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class slug extends Model
{
    protected $table = 'slug';
    public $timestamps = false;

    public static function saveSlug( $TenHH_id, $slug){
        $slugObject = Slug::where('TenHH_id', $TenHH_id)->first();
        try{
            if(!$slugObject){
                DB::table('slug')->insert([
                    'TenHH_id' => $TenHH_id,
                    'slug' => $slug
                ]);
            }else{
                DB::table('slugs')
                    ->where('TenHH_id', $TenHH_id)
                    ->update(['slug' => $slug]);
            }

            return true;
        }catch(\Exception $ex){
            \Log::error($ex->getMessage());
            return false;
        }

    }
    public static function removeSlug( $TenHH_id){
        DB::table('slugs')->where('TenHH_id', $TenHH_id)->delete();
    }
}
