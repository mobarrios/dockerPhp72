<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\CompanyRepo as Repo;
use App\Http\Repositories\Configs\IvaConditionsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;




class CompanyController extends Controller
{
    protected $usersRepo;

    public function  __construct(Repo $repo, Route $route, Request $request, IvaConditionsRepo $ivaConditionsRepo)
    {
        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;
        $this->section          = 'company';
        $this->data['section']  = $this->section;

        $this->data['ivaConditions'] = $ivaConditionsRepo->ListsData('name','id');
    }

    
}
