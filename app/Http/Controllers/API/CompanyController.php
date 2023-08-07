<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required'],
            ]);

            $data = Company::create([
                'name' => $request->name,
                'info' => $request->info,
                'address' => $request->address,
                'contact' => $request->contact,

            ]);

            return ResponseFormatter::success($data);
        } catch (Exception $e) {
            return ResponseFormatter::error(null, $e->getMessage(), 500);
        }
    }
}
