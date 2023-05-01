<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\BaseServiceApi;
use App\Http\Controllers\Api\V1\Traits\HasForm;
use Illuminate\Http\Request;

class BaseControllerApi extends Controller
{
    use HasForm;

    protected BaseServiceApi $service;

    public function __construct(BaseServiceApi $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->getAll();
    }

    public function show(int $id)
    {
        return $this->service->getById($id);
    }

    public function store(Request $request)
    {
        $params = $this->formParams();
        return $this->service->create($params);
    }

    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}
