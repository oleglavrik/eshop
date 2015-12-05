<?php
    return array(
        'product/([0-9]+)'  => 'product/view/$1',
        'catalog'           => 'catalog/index',
        'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
        'category/([0-9]+)' => 'catalog/category/$1',
        'user/register'     => 'user/register',
        'user/login'        => 'user/login',
        'user/logout'       => 'user/logout',
        'account/edit'      => 'account/edit',
        'account'           => 'account/index',
        'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
        'cart/checkout'     => 'cart/checkout',
        'cart'              => 'cart/index',

        ''                  => 'site/index'
    );