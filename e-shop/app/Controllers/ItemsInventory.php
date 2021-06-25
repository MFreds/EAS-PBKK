<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
class ItemsInventory extends BaseController
{
	public function new_item()
	{
		$cat= new Category();
        $data['categories'] = $cat->findAll();

        helper('form');
		echo view('admin/admin_inv_new',$data);
	}

    public function list_item()
	{
		$cat= new Category();
        $data['categories'] = $cat->findAll();
        $item= new Item();
        $data['items'] = $item->findAll();

		echo view('admin/admin_inv_list',$data);
	}

	public function save()
    {
        $name = $this->request->getPost('product_name');
        $category = $this->request->getPost('category');
        $vendor = $this->request->getPost('vendor');
        $description = $this->request->getPost('description');

        helper(['form']);
		$rules = [
            'product_name'         => 'required|min_length[1]|max_length[100]',
            'category'      => 'required',
            'vendor'         => 'required|min_length[1]|max_length[100]',
            'description'      => 'required|min_length[1]|max_length[1000]',
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error_reg', $this->validator->listErrors());
            return redirect()->back();
        }
        $item = new Item();
        $data=[
            'product_name' => $name,
            'category_id' => $category,
            'vendor' => $vendor,
            'description' => $description,
        ];
        $item->save($data);

        $item_image = new ItemImage();

        // dapatkan input file berupa array
        $files = $this->request->getFiles();
 
        if($files){
             
            // buat value id random di table uploads
            $item_data=$item->where($data)->first();
             
            // ulangi insert gambar ke table galery menggunakan foreach
            foreach($files['file_upload'] as $img){
                $name=$img->getRandomName();
                $data_uploads = [
                    'item_id' => $item_data['id'],
                    'path' => $name
                ];
 
                $img->move(ROOTPATH . 'public/uploads', $name);
                $item_image->save($data_uploads);
             
            }
            session()->setFlashdata('success', 'Berhasil membuat items dengan '.count($files['file_upload']).' files');
            return redirect()->to('admin/products/add');
         
        }
    }
}
