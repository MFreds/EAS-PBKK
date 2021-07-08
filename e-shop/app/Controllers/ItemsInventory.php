<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ItemEdit;
class ItemsInventory extends BaseController
{
    protected $items;
 
    function __construct()
    {
        $this->items = new Item();
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
        $item= new Item();
        $data['items'] = $item->findAll();

		echo view('admin/admin_inv_list',$data);
	}

    public function invoice_list()
	{
        $item= new Item();
		$keranjang= new Cart();
        $transaksi= new Transaction();
        $data['transactions']= $transaksi->getAllTransaction();

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
        // print_r($this->request->getPost('stock'));
        // die();

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
        $item = new Item();
        $data=[
            'product_name' => $name,
            'category_id' => $category,
            'vendor' => $vendor,
            'price' => $price,
            'stock' => $stock,
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
        $items = new Item();
        //$item_edit = new ItemEdit();
        $cat = new Category();
        $data['categories'] = $cat->findAll();
        $data['item'] = $items->getFullItemsbyId($id);
        // print_r($data['items']);
        // die();
        $data['img'] = $items->getAllImages($id);
        //$data['items'] = $items->PilihItem($id)->getRow();
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

        $items = new Item();
        $items->update($id, $data);
        session()->setFlashdata('success', 'Berhasil mengupdate produk');
        return redirect()->to('/admin/products/edit_item/'.$id);
    }

    public function edit_img($id){
        // print(a);
        // print($id);
        $item_image = new ItemImage();
        $data=$item_image->where('im_id',$id)->first();
        // print_r($data);die();
        // dapatkan input file berupa array
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

        // die();
        // $items = new Item();
        // //$data['items'] = $items->getFullItems_byId($id);
        // $img = $items->getImages_byId($id);
        // //echo $img['path'];
        // $files = $this->request->getFiles('file_upload');
        // if($files)
        // {
        //     $img_lama = $img['path'];
        //     if(file_exists("uploads/".$img_lama)){
        //         unlink("uploads/".$img_lama);
        //     }
        //     foreach($files['file_upload'] as $img){
        //         $name=$img->getRandomName();
        //         $data_uploads = [
        //             'path' => $name
        //         ];
        //         $img->move(ROOTPATH . 'public/uploads', $name);
        //     }
        //     return redirect()->to('/admin/products/edit/'.$items['i_id']);
        // }
    }

    // public function update($id)
    // {
    //     if (!$this->validate([
    //         'product_name' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi'
    //             ]
    //         ],
    //         'vendor' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi'
    //             ]
    //         ],
    //         'description' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi'
    //             ]
    //         ],
    //         'category_id' => [
    //             'rules' => 'required|valid_email',
    //             'errors' => [
    //                 'required' => '{field} Harus diisi',
    //                 'valid_email' => 'Email Harus Valid'
    //             ]
    //         ],
 
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back();
    //     }
 
    //     $this->item->update($id, [
    //         'product_name' => $this->request->getVar('product_name'),
    //         'vendor' => $this->request->getVar('vendor'),
    //         'description' => $this->request->getVar('description'),
    //         'category_id' => $this->request->getVar('category_id')
    //     ]);
    //     session()->setFlashdata('message', 'Update Data Item Berhasil');
    //     return redirect()->to('/admin/products');
    // }

    // public function update(){
    //     $items = new Item();
    //     if ($this->request->getMethod() !== 'post') {
    //         return redirect()->to('admin/products');
    //     }
    //     $id = $this->request->getPost('id');
    //     $validation = $this->validate([
    //         'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
    //     ]);
 
    //     if ($validation == FALSE) {
    //     $data = array(
    //         'product_name'  => $this->request->getPost('product_name'),
    //         'vendor' => $this->request->getPost('vendor'),
    //         'description' => $this->request->getPost('description'),
    //         'category_id' => $this->request->getPost('category_id')
    //     );
    //     } else {
    //     $dt = $items->PilihItem($id)->getRow();
    //     $gambar = $dt->gambar;
    //     $path = '../public/uploads/';
    //     @unlink($path.$gambar);
    //         $upload = $this->request->getFile('path');
    //         $upload->move(WRITEPATH . '../public/uploads/');
    //     $data = array(
    //         'product_name'  => $this->request->getPost('product_name'),
    //         'vendor' => $this->request->getPost('vendor'),
    //         'description' => $this->request->getPost('description'),
    //         'category_id' => $this->request->getPost('category_id'),
    //         'image' => $upload->getName()
    //     );
    //     }
    //     $items->edit_data($id,$data);
    //     return redirect()->to('admin/products')->with('berhasil', 'Data Berhasil di Ubah');
        
    // }

    public function delete($id)
    {
        $items = new Item();
        $data['item'] = $items->getFullItemsbyId($id);
        // // print_r($data['items']);
        // // die();
        $data['img'] = $items->getAllImages($id);
        $item_image = new ItemImage();
        foreach($data['img'] as $img){
            if(file_exists("uploads/".$img['path'])){
                    unlink("uploads/".$img['path']);
                }
            $item_image->delete($img['im_id']);
        }
        $items->delete($id);
        return redirect()->to('admin/products')->with('berhasil', 'Data Berhasil di Delete');
    }
    
}