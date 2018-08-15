<?php

namespace App;

use App\User;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    public static function dlPdfUrl($id) {
        return route('voyager.dashboard') . '/download-pdf/' . $id;
    }
}
