<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*文章列表action
 * @author mm
 */
class Upload_m extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
       $this->load->library('pagination');
   }
   
   public function upload_list($per_page,$start_page,$tid)
   {
       $sql = "SELECT * FROM `zh_uploads` WHERE `tid`=$tid ORDER BY `add_time` DESC LIMIT $start_page , $per_page";
       $query = $this->db->query($sql);
       return $query->result_array();
   }
   
   public function count_all()
   {
   		return $this->db->count_all_results('zh_uploads');
   }
   
   public function add_file($article)
   {
       $this->db->insert('zh_uploads', $article);
       return TRUE;
   }
   
   public function delete_file($uid)
   {
       $this->db->where('uid',$uid);
       $query = $this->db->get('zh_uploads');
       $result = $query->result_array();
       foreach ($result as $row) {
       		echo unlink($row['url']);
       }
       $this->db->where('uid',$uid);
       $this->db->delete('zh_uploads');
       return TRUE;
   }
   
   public function getby_uid($uid)
   {
	   $this->db->where('uid',$uid);
	   $query = $this->db->get('zh_uploads');
	   return $query->row_array();
   }
}