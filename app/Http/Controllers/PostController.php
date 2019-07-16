<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

  public function index()
  {
    return $this->responseSuccess('index'); 
  }

  public function create()
  {
    return $this->responseSuccess('create'); 
  }

  public function store()
  {
    return $this->responseSuccess('store'); 
  }

  public function show($post)
  {
    return $this->responseSuccess('show'); 
  }

  public function edit($post)
  {
    return $this->responseSuccess('edit'); 
  }

  public function update($post)
  {
    return $this->responseSuccess('update'); 
  }

  public function destroy($post)
  {
    return $this->responseSuccess('destroy'); 
  }

}
