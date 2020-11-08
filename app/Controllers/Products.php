<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Products_model;
 
class Products extends Controller
{
    public function index()
    {
        $model = new Products_model();
        $data['products']  = $model->getProduct()->getResult();
        echo view('v_products', $data);
    }

    public function save()
    {
        $model = new Products_model();
        $data = array(
            'product_name'        => $this->request->getPost('product_name'),
            'price'       => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
        );
        $model->saveProduct($data);
        return redirect()->to('/products');
    }

    public function update()
    {
        $model = new Products_model();
        $id = $this->request->getPost('id_product');
        $data = array(
            'product_name'        => $this->request->getPost('product_name'),
            'price'       => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('/products');
    }

    public function delete()
    {
        $model = new Products_model();
        $id = $this->request->getPost('id_product');
        $model->deleteProduct($id);
        return redirect()->to('/products');
    }
 
}