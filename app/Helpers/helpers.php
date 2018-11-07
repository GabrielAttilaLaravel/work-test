<?php

function currentUser()
{
    return auth()->user();
}

function adminRoute()
{
    return ('admin' === 'admin') ? 'admin_' : false;
}