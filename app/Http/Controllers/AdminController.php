<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Role;



class AdminController extends Controller
{
    function home(){
        // tương tác với model để lẩy dữ liệu
        // hiển thị dữ liệu
                return view('admin.home');
            } 

            public function listproduct(){
                $products=Product::orderBy('id', 'DESC')->paginate(5);
                return view('admin.product.list',compact('products'));
            }
            public function listcategory(){
                $categories=Category::orderBy('name', 'ASC')->paginate(6);
                $products=Product::orderBy('id', 'ASC')->paginate(6);
                return view('admin.category.list',compact('categories'));
            }

            public function formaddproduct(){
                $categories=Category::orderBy('name', 'ASC')->get();
              
                return view('admin.product.add',compact('categories'));
            }

            public function formaddrole(){
                $roles=Role::orderBy('role_name', 'ASC')->get();
                return view('admin.role.add',compact('roles'));
            }
            public function formaddcategory(){
                // $categories=Category::orderBy('name', 'ASC')->get();
              
                return view('admin.category.add');
            }
            public function insertPro(Request $request)
                {
                    $validatedData = $request->validate([
                        'name' => 'required|string|max:50',
                        'price' => 'required|numeric',
                        'category_id' => 'required|integer|exists:categories,id',
                        'img' => 'required|file|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
                        'description' => 'nullable|string',
                    ]);

                    if ($request->hasFile('img')) {
                        $imageName = time() . '.' . $request->img->extension();
                        $request->img->move(public_path('upload'), $imageName);
                        $validatedData['img'] = 'upload/' . $imageName;
                    }
                    

                        $products = Product::create($validatedData);

                        return redirect()->route('listproduct');
                }


                public function insertCate(Request $request)
                {
                    $validatedData = $request->validate([
                        'name' => 'required|string|max:50',
                    ]);

                        $categories = Category::create($validatedData);

                        return redirect()->route('listcategory');
                }

                public function insertRole(Request $request)
                {
                    $validatedData = $request->validate([
                        'role_name' => 'required|string|max:50',
                        'description' => 'nullable|string',

                    ]);

                        $roles = Role::create($validatedData);

                        return redirect()->route('listrole');
                }

                public function deletePro($id)
                {
                    // Tìm sản phẩm theo ID
                    $product = Product::find($id);

                    // Kiểm tra nếu sản phẩm tồn tại
                    
                        // Kiểm tra nếu có tệp hình ảnh và tệp tồn tại trên hệ thống
                        $imagePath ="upload/".$product->img;
                        if (file_exists($imagePath)) {
                            // Xóa tệp hình ảnh
                            unlink($imagePath);
                        }

                        // Xóa sản phẩm khỏi cơ sở dữ liệu
                        $product->delete();
                        
                        // Bạn có thể trả về thông báo thành công hoặc chuyển hướng đến trang khác
                        return redirect()->route('listproduct')->with('success', 'Sản phẩm đã được xóa thành công.');
                    }


                    public function deleteCate($id)
                {
                    // Tìm sản phẩm theo ID
                    $category = Category::find($id);

                        // Xóa sản phẩm khỏi cơ sở dữ liệu
                        $category->delete();
                        
                        // Bạn có thể trả về thông báo thành công hoặc chuyển hướng đến trang khác
                        return redirect()->route('listcategory')->with('success', 'Sản phẩm đã được xóa thành công.');
                    }


                    public function deleteRole($id)
                    {
                        // Tìm sản phẩm theo ID
                        $role = Role::find($id);
    
                            // Xóa sản phẩm khỏi cơ sở dữ liệu
                            $role->delete();
                            
                            // Bạn có thể trả về thông báo thành công hoặc chuyển hướng đến trang khác
                            return redirect()->route('listrole')->with('success', 'Sản phẩm đã được xóa thành công.');
                        }


                    public function formeditproduct($id){
                        $categories=Category::orderBy('name', 'ASC')->get();
                        $products=Product::orderBy('id', 'ASC')->paginate(6);
                        $product=Product::find($id);
                        return view('admin.product.edit',compact('categories','products','product'));
                    }

                  
                    public function updatePro(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:50',
        'price' => 'required|numeric',
        'category_id' => 'required|integer|exists:categories,id',
        'img' => 'nullable|file|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        'description' => 'nullable|string',
    ]);

    $product = Product::findOrFail($id);

    if ($request->hasFile('img')) {
        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('upload'), $imageName);
        $validatedData['img'] = 'upload/' . $imageName;

        // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
        $oldImagePath = public_path($product->img);
        if (file_exists($oldImagePath) && $product->img != 'default.jpg') {
            unlink($oldImagePath);
        }
    } else {
        // Nếu không có hình ảnh mới, giữ lại hình ảnh cũ
        $validatedData['img'] = $product->img;
    }

    $product->update($validatedData);

    return redirect()->route('listproduct')->with('success', 'Product updated successfully');
}


public function deleteSelectedProducts(Request $request)
{
    $ids = $request->input('ids');
    
    if (!empty($ids)) {
        Product::whereIn('id', $ids)->delete();
    }
    
    return redirect()->route('listproduct')->with('success', 'Các sản phẩm đã được xóa thành công.');
}

public function deleteSelectedRoles(Request $request)
{
    $ids = $request->input('ids');
    
    if (!empty($ids)) {
        Role::whereIn('id', $ids)->delete();
    }
    
    return redirect()->route('listrole')->with('success', 'Các sản phẩm đã được xóa thành công.');
}

public function deleteSelectedCategories(Request $request)
{
    $ids = $request->input('ids');
    
    if (!empty($ids)) {
        Category::whereIn('id', $ids)->delete();
    }
    
    return redirect()->route('listcategory')->with('success', 'Các danh mục đã được xóa thành công.');
}


public function listcomment(){
    $comments=Comment::orderBy('id', 'DESC')->paginate(5);
    return view('admin.comment.list',compact('comments'));
}

public function listrole(){
    $roles=Role::orderBy('id', 'DESC')->paginate(5);
    return view('admin.role.list',compact('roles'));
}
                
}
