<?php
    return array(
        # product
        'product/([0-9]+)' => 'product/view/$1',
        # catalog
        'catalog'                         => 'catalog/index',
        'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
        'category/([0-9]+)'               => 'catalog/category/$1',
        # user
        'user/register' => 'user/register',
        'user/login'    => 'user/login',
        'user/logout'   => 'user/logout',
        # account
        'account/edit' => 'account/edit',
        'account'      => 'account/index',
        # cart
        'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
        'cart/checkout'         => 'cart/checkout',
        'cart/delete/([0-9]+)'  => 'cart/delete/$1',
        'cart'                  => 'cart/index',
        # admin
        'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
        'admin/product/create'          => 'adminProduct/create',
        'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
        'admin/product'                 => 'adminProduct/index',
        'admin'                         => 'admin/index',
        # home
        '' => 'site/index',

    );