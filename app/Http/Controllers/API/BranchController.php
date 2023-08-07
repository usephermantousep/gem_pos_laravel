<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use Exception;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required'],
                'company_id' => ['required']
            ]);

            $data = Branch::create([
                'name' => $request->name,
                'company_id' => $request->company_id
            ]);

            return ResponseFormatter::success($data);
        } catch (Exception $e) {
            return ResponseFormatter::error(null, $e->getMessage(), 500);
        }
    }
}
