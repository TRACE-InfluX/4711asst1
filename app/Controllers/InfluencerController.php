<?php
/**
 * Created by PhpStorm.
 * User: remtr
 * Date: 29-Jan-19
 * Time: 11:53 AM
 */
namespace App\Controllers;
use CodeIgniter\Controller;
use Influencer;
use CodeIgniter\API\ResponseTrait;

class InfluencerController extends Controller {

    use ResponseTrait;

    public function index() {
        $model = new Influencer();
        $students = $model->findAll();

        return $this->response->setStatusCode(200)->setJSON($students);
    }

    public function show($id) {
        $model = new Influencer();
        $student = $model->find($id);
        return $this->respond($student, 200, 'student found');
    }

    public function new() {
        return $this->failUnauthorized('Unauthorized/Not implemented', 401, "error");
    }

    public function edit($id) {
        return $this->failUnauthorized('No edits allowed/Not implemented', 401, "error");
    }

    public function create() {
        return $this->failUnauthorized('No creation allowed/Not implemented', 401, "error");
    }

    public function update($id) {
        return $this->failUnauthorized('No updates allowed/Not implemented', 401, "error");
    }

    public function delete($id) {
        return $this->failUnauthorized('No deletes allowed/Not implemented', 401, "error");
    }
}