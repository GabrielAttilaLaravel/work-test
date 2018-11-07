<?php

function currentUser()
{
    return auth()->user();
}

function adminRoute()
{
    return (auth()->user()->role->nombreR === 'admin') ? 'admin_' : false;
}