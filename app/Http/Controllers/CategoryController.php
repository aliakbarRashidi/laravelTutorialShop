<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller {

  public function index() {
    return View('category.index');
  }

  public function store(Request $request) {
    echo 'store';
    echo '<br><br>';
    var_dump($request->all());
    echo '<br><br>';
    var_dump($request->get('email'));
    echo '<br><br>';
    var_dump($request->get('notExistField'));
  }
}
