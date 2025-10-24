<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller

{
    public function __invoke(Request $request, string $plan = 'price_1SLfC9LsxN8FK3AScHzm4Vdb')
    {
        $user = User::find(2);
        return  $user
            ->newSubscription('prod_TIFh3ohEnrEacv', $plan)
            ->checkout([
                'success_url' => route('success'),
                'cancel_url' => route('pricing'),
            ]);
    }
}
