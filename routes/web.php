<?php

use Illuminate\Support\Facades\Auth;

Auth::routes();

include(base_path('routes/admin/admin.php'));
include(base_path('routes/basket/basket.php'));
include(base_path('routes/main/main.php'));
include(base_path('routes/order/order.php'));
include(base_path('routes/orders/orders.php'));
include(base_path('routes/products/products.php'));
include(base_path('routes/profile/profile.php'));


