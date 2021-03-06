<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'sekolah';

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function pendidikan(){
        return $this->belongsTo('App\Models\pendidikan');
    }

    public function kondisiKecamatan($query){
        $query->with(array('kecamatan' => function($kecamatan){
              $kecamatan->select('nama');
        }));
    }

    public function scopeKondisi($query){
      if (request('kuisioner')) {
        $query->where('kecamatan_id',request('kecamatan'))
              ->where('pendidikan_id',request('pendidikan'));
      }else{
        if (request('pendidikan')) {
          $query->where('pendidikan_id',request('pendidikan'));
        }
        if (request('kecamatan')) {
          $query->where('kecamatan_id',request('kecamatan'));
        }
        if (request('sekolah')) {
          $query->where('id',request('sekolah'));
        }
      }
    }
}
