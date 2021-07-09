<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ItemEdit;
use App\Models\Transaction;

class ItemsInventory extends BaseController
{
    protected $items;
    protected $transaksi;
 
    function __construct()
    {
        $this->items = new Item();
        $this->transaksi = new Transaction();
    }

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
        $data['items'] = $this->items->findAll();

		echo view('admin/admin_inv_list',$data);
	}

    public function invoice_list()
	{
        $data['transactions']= $this->transaksi->getAllTransaction();
		echo view('admin/admin_inv_invoice',$data);
	}

	public function save()
    {
        $name = $this->request->getPost('product_name');
        $category = $this->request->getPost('category');
        $vendor = $this->request->getPost('vendor');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');
        $stock = $this->request->getPost('stock');

        helper(['form']);
		$rules = [
            'product_name'         => 'required|min_length[1]|max_length[100]|is_unique[items.product_name]',
            'category'      => 'required',
            'vendor'         => 'required|min_length[1]|max_length[100]',
            'stock'      => 'required',
            'price'      => 'required',
            'description'      => 'required|min_length[1]|max_length[1000]',
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error_reg', $this->validator->listErrors());
            return redirect()->back();
        }
        $data=[
            'product_name' => $name,
            'category_id' => $category,
            'vendor' => $vendor,
            'price' => $price,
            'stock' => $stock,
            'description' => $description,
        ];
        $this->items->save($data);

        $item_image = new ItemImage();

        // dapatkan input file berupa array
        $files = $this->request->getFiles();
 
        if($files){
            // buat value id random di table uploads
            $item_data=$this->items->where($data)->first();
             
            // ulangi insert gambar ke table galery menggunakan foreach
            foreach($files['file_upload'] as $img){
                $name=$img->getRandomName();
                $data_uploads = [
                    'item_id' => $item_data['i_id'],
                    'path' => $name
                ];
 
                $img->move(ROOTPATH . 'public/uploads', $name);
                $item_image->save($data_uploads);
             
            }
            session()->setFlashdata('success', 'Berhasil membuat items dengan '.count($files['file_upload']).' files');
            return redirect()->to('admin/products/add');
         
        }
    }

    public function form_edit($id){
        $cat = new Category();
        $data['categories'] = $cat->findAll();
        $data['item'] = $this->items->getFullItemsbyId($id);
        $data['img'] = $this->items->getAllImages($id);
        helper('form');
        echo view('admin/admin_inv_edit',$data);
    }

    public function updateItem($id)
    {
        
        $name = $this->request->getPost('product_name');
        $category = $this->request->getPost('category');
        $vendor = $this->request->getPost('vendor');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');
        $stock = $this->request->getPost('stock');

        $data=[
            'product_name' => $name,
            'category_id' => $category,
            'vendor' => $vendor,
            'price' => $price,
            'stock' => $stock,
            'description' => $description,
        ];

        $this->items->update($id, $data);
        session()->setFlashdata('success', 'Berhasil mengupdate produk');
        return redirect()->to('/admin/products/edit_item/'.$id);
    }

    public function edit_img($id){

        $item_image = new ItemImage();
        $data=$item_image->where('im_id',$id)->first();
        $files = $this->request->getFile('file_upload');
        if($files){
            // ulangi insert gambar ke table galery menggunakan foreach
            $name=$files->getRandomName();
            $data_uploads = [
                'path' => $name
            ];

            $files->move(ROOTPATH . 'public/uploads', $name);
            
            
            $item_image->update($id,$data_uploads);
            session()->setFlashdata('success', 'Berhasil mengupdate gambar');
            return redirect()->to('/admin/products/edit_item/'.$data['item_id']);
         
        }

    }

    public function delete($id)
    {
        $itemData=[
            'i_status'  => I_DEACTIVE
        ];
        $this->items->update($id,$itemData);
        return redirect()->to('admin/products')->with('berhasil', 'Data Berhasil di Delete');
    }
    public function undelete($id)
    {
        $itemData=[
            'i_status'  => I_ACTIVE
        ];
        $this->items->update($id,$itemData);
        return redirect()->to('admin/products')->with('berhasil', 'Data Berhasil di Delete');
    }
    
}