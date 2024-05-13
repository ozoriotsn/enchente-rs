<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Pagination\Paginator;

class SearchService
{

    public function __construct()
    {
        Paginator::useBootstrap();

    }

    public static function search($data)
    {

        $search = $data;

        if (isset($search) && !empty($search)) {
            $customers = Customer::where('name', 'like', '%' . $search . '%')->paginate(3);
        } else {
            $customers = Customer::paginate(3);
        }

        return $customers;

    }

}
