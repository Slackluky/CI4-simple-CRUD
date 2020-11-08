<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Products_model extends Model
{
     
    public function getProduct()
    {
        $builder = $this->db->table('products');
        return $builder->get();
    }
    public function saveProduct($data){
        $query = $this->db->table('products')->insert($data);
        return $query;
    }
    public function updateProduct($data, $id)
    {
        $query = $this->db->table('products')->update($data, array('id_product' => $id));
        return $query;
    }
    
    public function deleteProduct($id)
    {
        $query = $this->db->table('products')->delete(array('id_product' => $id));
        return $query;
    } 
 
   
}