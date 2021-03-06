<?php
  $filepath=realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/database.php');
  include_once ($filepath.'/../helper/format.php');
?>
<?php
/**
 * 
 */
class category
{ 
     private $db;
     private $fm;	
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function insert_category($category_name, $category_slug, $category_desc)
	{
		$category_name =$this->fm->validation($category_name);
		$category_slug =$this->fm->validation($category_slug);
		$category_desc =$this->fm->validation($category_desc);

		$category_name= mysqli_real_escape_string($this->db->link,$category_name);
		$category_slug= mysqli_real_escape_string($this->db->link,$category_slug);
		$category_desc= mysqli_real_escape_string($this->db->link,$category_desc);

	  if($category_name=="" || $category_slug=="" || $category_desc=="" )
	  {
	  $alert="Không được để trống";
	  return $alert;
	  }
	  else
	  {
	  	$query="INSERT into tbl_category(category_name, category_slug, category_desc) values('$category_name', '$category_slug', '$category_desc')";
	  	$result=$this->db->insert($query);
	  	if($result)
	  	{
	  		$alert = "<span class='success'>Thêm thành công</span>";
	  		return $alert;
	  	}
	  	else
	  	{
	  	  $alert="<span class='error'>Thêm thất bại</span>";
	  	  return $alert;
	  	}
	  
	  }

	}
	public function show_category()
	{
		$query="SELECT * from tbl_category order by category_id desc";
		$result=$this->db->select($query);
		return $result;
	}
	public function getcatebyId($id)
	{
		$query="SELECT * from tbl_category  where category_id= '$id' order by category_id desc";
		$result=$this->db->select($query);
		return $result;

	}
	public function updateCategory($category_name, $category_slug, $category_desc, $id)
	{
		$category_name =$this->fm->validation($category_name);
		$category_slug =$this->fm->validation($category_slug);
		$category_desc =$this->fm->validation($category_desc);

		$category_name= mysqli_real_escape_string($this->db->link,$category_name);
		$category_slug= mysqli_real_escape_string($this->db->link,$category_slug);
		$category_desc= mysqli_real_escape_string($this->db->link,$category_desc);
		$id= mysqli_real_escape_string($this->db->link,$id);

	  if($category_name=="" || $category_slug=="" || $category_desc=="")
	  {
	  $alert="Không được để trống";
	  return $alert;
	  }
	  else
	  {
	  	$query="UPDATE tbl_category set category_name='$category_name', category_slug='$category_slug', category_desc='$category_desc' where category_id='$id'";
	  	$result=$this->db->update($query);
	  	if($result)
	  	{
	  		$alert = "<span class='success'>Cập nhật thành công</span>";
	  		return $alert;
	  	}
	  	else
	  	{
	  	  $alert="<span class='error'>Cập nhật thất bại</span>";
	  	  return $alert;
	  	}
	  
	  }
	}
	public function del_category($id)
	{
		$query="DELETE from tbl_category where category_id='$id'";
		$result=$this->db->delete($query);
		if($result)
		{
			$alert = "<span class='success'>Xóa thành công</span>";
	  		return $alert;
		}
		else
		{
			$alert = "<span class='success'>Xóa thất bại</span>";
			return $alert;

		}
	}
	public function show_cate_fe(){
		$query="SELECT * from tbl_category order by category_id";
		$result=$this->db->select($query);
		return $result;
	}
	public function show_pr_cate($id){
		$query="SELECT * from tbl_product where catId='$id' order by catId limit 8";
		$result_pr=$this->db->select($query);
		return $result_pr;
	}
	public function show_titile_cate($id){
		$query="SELECT tbl_product.*,tbl_category.catId,tbl_category.catName from tbl_product,tbl_category
		where tbl_product.catId=tbl_category.catId and tbl_product.catId='$id' limit 1";
		$result=$this->db->select($query);
		return $result;
	}
}
?>