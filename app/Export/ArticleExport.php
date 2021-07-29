<?php 
namespace App\Export;

use App\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class ArticleExport implements FromView{

    public function view():View
    {
        return view("exports.article",["data"=>$this->getData()]);
    }

    private function getData(){
        return Article::where("is_deleted",0)->where("is_indraft",0)
        ->select("created_at as date","art_id as uic","location","name as project_name",
        "email","photographer","architects as firm_name",
        DB::raw("(CASE WHEN project_type='1' THEN 'architecture'
            WHEN project_type = '2' THEN 'Interior' 
            WHEN project_type = '3' THEN 'Product Design'
            WHEN project_type = '4' THEN 'Technology' 
            ELSE 'NOT SPECIFIED' END 
        ) as project_type"),"author","fb as facebook","insta as instagram","twiter as twitter","linkedin as linkendin",
        DB::raw("(CASE WHEN is_active = 0 THEN 'In active'
        WHEN is_active = 1 THEN 'Active' ELSE 'NOT SPECIFIED' END) as status"))
        ->get();
    }

}