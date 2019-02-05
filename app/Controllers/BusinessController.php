<?php
/**
 * Created by VSCODE
 * User: Aaron Vong
 * Date: 29-Jan-19
 * Time: 11:53 AM
 */
namespace App\Controllers;
use CodeIgniter\Controller;
use Business;
use CodeIgniter\API\ResponseTrait;

class BusinessController extends Controller {

    use ResponseTrait;

    public function index() {
        $model = new Business();
        $business = $model->findAll();
        return $this->respond($business, 200, 'yeet');
    }

    public function show($id) {
        $model = new Business();
        $business = $model->find($id);
        return $this->respond($business, 200, 'business found');
    }

    public function new() {
        return $this->failUnauthorized('Unauthorized/Not implemented', 401, "error");
    }

    public function edit() {
        return $this->failUnauthorized('No edits allowed/Not implemented', 401, "error");
    }

    public function create() {
        return $this->failUnauthorized('No creation allowed/Not implemented', 401, "error");
    }

    public function update() {
        return $this->failUnauthorized('No updates allowed/Not implemented', 401, "error");
    }

    public function delete() {
        return $this->failUnauthorized('No deletes allowed/Not implemented', 401, "error");
    }
}
?>