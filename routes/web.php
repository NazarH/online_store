<?php

use Illuminate\Support\Facades\Auth;

Auth::routes();

include(base_path('routes/admin/web.php'));
include(base_path('routes/basket/web.php'));
include(base_path('routes/main/web.php'));
include(base_path('routes/order/web.php'));
include(base_path('routes/orders/web.php'));
include(base_path('routes/products/web.php'));
include(base_path('routes/profile/web.php'));


