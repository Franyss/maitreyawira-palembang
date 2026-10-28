<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DataController extends Controller
{
    public function index($tableName = 'user')
    {
        // Daftar semua tabel yang ingin ditampilkan
        $tables = [
            'user',
            'access',
            'achievement',
            'achievement_detail',
            'app_config',
            'app_menu',
            'app_slider',
            'collaboration_logo',
            'consultation_set',
            'cons_schedule',
            'custom_page',
            'facility',
            'facility_detail',
            'gallery',
            'gallery_school',
            'gallery_tag',
            'gallery_tag_detail',
            'history',
            'history_detail',
            'history_video',
            'job',
            'job_detail',
            'job_school',
            'job_source',
            'page',
            'popup',
            'post',
            'post_school',
            'post_tag',
            'post_tag_detail',
            'program',
            'program_detail',
            'scholarship',
            'school',
            'schs_file',
            'service_hour',
            'student_reg',
            'testimony',
            'testimony_detail',
        ];

        if (!in_array($tableName, $tables)) {
            abort(404, 'tabel tidak ditemukan');
        }

        // Ambil daftar kolom dan baris data secara dinamis
        $columns = Schema::getColumnListing($tableName);
        $rows = DB::table($tableName)->get();

        return view('data', compact('tables', 'tableName', 'columns', 'rows'));
    }
}
